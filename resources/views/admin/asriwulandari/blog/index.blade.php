@extends('admin.asriwulandari.layout.layout')

@section('title')
    Blog
@endsection

@section('nav6')
    class="active"
@endsection

@section('js')

    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="{{asset('lte-admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('lte-admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('lte-admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('lte-admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('lte-admin/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script>
      $(function () {
        CKEDITOR.replace( 'deskripsi', {
          extraPlugins: 'imageuploader'
        });
      });
    </script>
    @include("admin.asriwulandari.blog.ajax")

@endsection

@section('css')
<link rel="stylesheet" href="{{asset('lte-admin/plugins/datepicker/datepicker3.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blog
            <small>Panel</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div id ="flash" class="col-md-12">
            </div>

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Deskripsi</th>
                                <th>Path</th>
                                <th>Link</th>
                                <th>Category</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody id="datalist">
                                @foreach($blogs as $bl)
                                <tr id="row{{$bl->id}}">
                                    <td>{{$bl->title}}</td>
                                    <td>{{$bl->deskripsi}}</td>
                                    <td class="text-center"><img src="{{asset('storage/asriw/blog/'.$bl->path)}}" width="300"></td>
                                    <td>{{$bl->link}}</td>
                                    <td>{{$bl->category}}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="{{$bl->id}}">
                                            Edit
                                        </button>

                                        <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="{{$bl->id}}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            
                            </tbody>
                        </table>

                        <center>
                            <button type="button" class="btn btn-default addModal" data-toggle="modal" data-target="#editModal" id="btn-add">Tambah</button>
                        </center>

                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>



    </section>

    <div class="example-modal">
        <div class="modal" id="editModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add Blog</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form" name="form">
                            <input type="hidden" name="id" value="" id="id">
                            <input type="hidden" name="_method" id="method">
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" placeholder="Judul" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Detail</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group" id="file-container">
                                <label for="file">Main Image</label>
                                <input type="file" name="file" onChange="validateJPG(this)" id="file">
                                <br><input type='text' class='form-control' id='filename' disabled style="display:none;">
                            </div>
                            <div class="form-group">
                                <label for="link">Link Video</label>
                                <input type="text" class="form-control" id="link" placeholder="Link Video" name="link" >
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" class="form-control">
                                    <option value="1">Standard</option>
                                    <option value="2">Gambar</option>
                                    <option value="3">Video</option>
                                </select>
                            </div>

                            <input type="submit" value="submit" style="display:none;">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btn-save">Save</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal" id="deleteModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Hapus Data</h4>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin ingin menghapus data?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="btndelete">Delete</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- /.example-modal -->


    <!-- /.content -->
@endsection