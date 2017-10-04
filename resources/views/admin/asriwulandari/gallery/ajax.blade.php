<script>
    // $(function () {
    //     $("#successflash").hide();
    //     $("#failflash").hide();
    // });

    var successflash = '<div class="col-md-12" id="successflash"><div class="alert alert-success"><h4><i class="icon fa fa-check"></i> Data berhasil diupdate!</h4></div></div>';
    var failflash = '<div class="col-md-12" id="failflash"><div class="alert alert-danger"><h4><i class="icon fa fa-check"></i> Data gagal diupdate!</h4><div id="failerror"></div></div></div>';

    var table = $("#example1").DataTable();

    /* Ajax Start */
    var url = "{{URL::Route('gallery.index')}}";
    

    //display modal form for task editing
    $("#datalist").on('click', '.editModal', function(){
        var id = $(this).val();
        $.get(url + '/' + id + '/edit', function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#title').val(data.title);
            $('#filename').css('display', 'inline').val(data.image);
            $('#method').val('PUT');
            $('#file').prop('required', false);
            
            $('#btn-save').val("update");
        })
    });

    $('.addModal').on('click', function(){
        $('#filename').css('display', 'none');
        $('#file').prop('required', true);
        $('#method').val('POST');
    });

    //display modal form for creating new task
    $('#btn-add').click(function(){
        $('#form').trigger("reset");
        $('#btn-save').val("add");
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
            name:$('#name').val(),
            email:$('#email').val(),
            vacancy:$('#vacancy').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var id = $('#id').val();
        var my_url = url;
        if (state == "update"){
            my_url = url+'/' + id;
        }

        // console.log(formData);

        $.ajax({    
            type: 'POST',
            url: my_url,
            data: new FormData($('#form')[0]),
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);

                var newData = [
                    data.title,
                    '<img src="{{asset('storage/asriw/gallery/')}}/'+data.image+'" width="300">',
                    '<button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="'+data.id+'">Edit</button> <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="'+data.id+'">Delete</button>'
                ];

                if (state == "add"){ //if user added a new record
                    var newRow = table.row.add(newData).draw().node();
                    $(newRow.cells[2]).addClass('text-center');
                    $(newRow.cells[1]).addClass('text-center');
                    $(newRow).attr("id","row"+data.id);

                }else{ //if user updated an existing record

                    table.row("#row" + id).data(newData).draw(false);
                }

                $('#form').trigger("reset");
                $('#editModal').modal('hide');
                $('#flash').html(successflash);

            },
            error: function (data) {
                $('#editModal').modal('hide');
                var msgError = ""
                if (data.responseJSON.error)
                    msgError = data.responseJSON.error;
                $("#failerror").text("Terjadi Kesalahan "+msgError)
                $('#flash').html(failflash);
                console.log('Error:', data);

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
                table.row("#row" + data.id).remove().draw(false);
                $('#flash').html(successflash);
                $('#deleteModal').modal("hide");
            },
            error: function (data) {
                console.log('Error:', data);
                $("#failerror").text("Terjadi Kesalahan");
                $('#flash').html(failflash);
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

        if (size > 2000000) {
            alert("File size maximum 2MB");
            objFileControl.value=""
        }
    }

    /* Ajax End */
</script>