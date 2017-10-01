<script>
  $(function () {
    $("#successflash").hide();
    $("#failflash").hide();
  });
    var table = $("#example1").DataTable({
        responsive:true
    });
    $('#date').datepicker({
       format: 'yyyy-m-d',
       defaultDate: "{{date('Y-m-d')}}"
    });

    /* Ajax Start */
    var url = "{{URL::Route('admin.news.index')}}";
    var uploadurl = "{{URL::Route('upload')}}";

    //display modal form for task editing
    $("#datalist").on('click', '.editModal', function(){
        var id = $(this).val();
        $.get(url + '/' + id, function (data) {
            //success data
            //console.log(data);
            $("#fileimage").hide();
            $('#id').val(data.idnews);
            $('#hashtag').val(data.hashtag);
            $('#title').val(data.title);
            CKEDITOR.instances.content.setData(data.content);
            $('#date').val(data.date);
            if(data.image != null){
                $("#fileimage").attr("href", "{{asset('forsa/news/')}}/"+data.image);
                $("#fileimage").show();
            }
            
            $('#btn-save').val("update");
        }) 
    });

    //display modal form for creating new task
    $('#btn-add').click(function(){
        $('#form').trigger("reset");
        CKEDITOR.instances.content.setData("");
        $('#btn-save').val("add");
        $("#fileimage").hide();
    });

    //delete task and remove it from list
     $("#datalist").on('click', '.deleteModal', function(){
        var id = $(this).val();
        $('#btndelete').val(id);
    });

    //create new task / update existing task
    $("#btn-save").click(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var $myForm = $('#form')
        if (!$myForm[0].checkValidity()) {
          $myForm.find(':submit').click()
          return;
        }

        var formData = {
            title : $('#title').val(),
            content:CKEDITOR.instances['content'].getData(),
            hashtag:$('#hashtag').val(),
            date:$('#date').val(),
            file:"",
            
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var id = $('#id').val();
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url = url+'/' + id;
        }

        console.log(formData);

        
        $.ajax({
            type: "POST",
            url: uploadurl,
            data:  new FormData($('#form')[0]),
            processData: false,
            contentType: false,
            success: function (dataImage) {
                formData.file = JSON.stringify(dataImage);
                $.ajax({
                    type: type,
                    url: my_url,
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);

                        var newData = [
                            data.title,
                            data.date,
                            data.hashtag,
                            '<img src="{{asset('forsa/news/')}}/'+data.image+'" width="100">',
                            '<button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="'+data.idnews+'">Edit</button> <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="'+data.idnews+'">Delete</button>'
                            ];

                        if (state == "add"){ //if user added a new record
                            var newRow = table.row.add(newData).draw().node();
                            $(newRow).attr("id","row"+data.idnews);
                        }else{ //if user updated an existing record

                            table.row("#row" + id).data(newData).draw(false);
                        }

                        $('#form').trigger("reset");
                        $('#editModal').modal('hide');
                        $('#flash').html($('#successflash').html());
                        
                    },
                    error: function (data) {
                        $('#editModal').modal('hide');
                        var msgError = ""
                        if (data.responseJSON.error)
                            msgError = data.responseJSON.error;
                        $("#failerror").text("Terjadi Kesalahan "+msgError)
                        $('#flash').html($('#failflash').html());
                        console.log('Error:', data);

                    }
                });
                
            },
            error: function (dataImage) {
               
                console.log('Error Image:', dataImage);

            }
        });
        
    });

    //delete task and remove it from list
    $('#btndelete').click(function(){
        var id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({

            type: "DELETE",
            url: url + '/' + id,
            success: function (data) {
                console.log(data);
                table.row("#row" + data.idnews).remove().draw(false);
                 $('#flash').html($('#successflash').html());
                $('#deleteModal').modal("hide");
            },
            error: function (data) {
                console.log('Error:', data);
                $("#failerror").text("Terjadi Kesalahan");
                $('#flash').html($('#failflash').html());
                $('#deleteModal').modal("hide");
            }
        });
    });

    // Function to preview image after validation
   function validateJPG(objFileControl) {
     var file = objFileControl.value;
     var len = file.length;
     var size = objFileControl.files[0].size;
     var ext = file.slice(len - 4, len);

     if (ext.toUpperCase() != ".JPG" && ext.toUpperCase() != ".PNG" && ext.toUpperCase() != ".JPEG") {
         alert("Only picture files allowed.");
         objFileControl.value=""
     } else if (size > 1000000) {
         alert("File size maximum 1MB");
        objFileControl.value=""
     }
  }

/* Ajax End */
</script>