<script>
  // $(function () {
  //   $("#successflash").hide();
  //   $("#failflash").hide();
  // });
    // var table = $("#example1").DataTable({
    //     "order": [[ 2, "asc" ]],
    //     responsive:true
    // });

    var table = $("#example1").DataTable();

    /* Ajax Start */
    var url = "{{URL::Route('fipulp.gallery.index')}}";
    var uploadurl = "{{URL::Route('upload')}}";

    //display modal form for task editing
    $("#datalist").on('click', '.editModal', function(){
        var id = $(this).val();
        $.get(url + '/' + id + '/edit', function (data) {
            //success data
            $("#fileimage").hide();
            $('#id').val(data.id);
            $('#title').val(data.title);
            $('#subtitle').val(data.subtitle);
            $('#description').val(data.description);
            // $('#image_source').val(data.image_source);
            if(data.image_source != ''){
                $("#fileimage").attr("href", "{{asset('/images/fipulp/gallery')}}/"+data.image_source);
                $("#fileimage").show();
            }
            
            $('#btn-save').val("update");
        })
    });

    //display modal form for creating new task
    $('#btn-add').click(function(){
        $('#form').trigger("reset");
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
            //content:$('#content').val(),
            subtitle:$('#subtitle').val(),
            description:$('#description').val(),
            //dark:$('#dark').val(),
            //position:$('#position').val(),
            // image_source:"",
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
                            '<img src="{{asset('images/fipulp/gallery/')}}/'+data.image_source+'" width="300">',
                            '<button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="'+data.id+'">Edit</button> <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="'+data.id+'">Delete</button>'
                            ];
                        if (state == "add"){ //if user added a new record
                            var newRow = table.row.add(newData).draw().node();
                            $(newRow).attr("id","row"+data.id);
                        }else{ //if user updated an existing record
                            table.row("#row" + id).data(newData).draw(false);
                            window.location.reload();
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
                table.row("#row" + data.idslider).remove().draw(false);
                $('#flash').html($('#successflash').html());
                $('#deleteModal').modal("hide");
                window.location.reload();
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