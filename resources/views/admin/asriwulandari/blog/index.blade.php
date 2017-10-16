@extends('admin.asriwulandari.layout.layout')

@section('title')
Blog
@endsection

@section('nav6')
class="active"
@endsection

@section('js')

<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('lte-admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('lte-admin/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    CKEDITOR.replace( 'content', {
      extraPlugins: 'imageuploader'
    });
  });
</script>
@include("admin.asriwulandari.blog.ajax")


@endsection

@section('css')
<link rel="stylesheet" href="{{asset('lte-admin/plugins/datepicker/datepicker3.css')}}">
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

            <div class="col-md-12" id="successflash" style="display: none;">
                <div class="alert alert-success">
                <h4><i class="icon fa fa-check"></i> Data berhasil diupdate!</h4>
              </div>
            </div>

            <div class="col-md-12" id="failflash" style="display: none;">
                <div class="alert alert-danger">
                <h4><i class="icon fa fa-check"></i> Data gagal diupdate!</h4>
                <div id="failerror"></div>
              </div>
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
                                <th>Judul</th>
                                <th style="max-width: 300px;">Konten</th>
                                <th>Link</th>
                                @if(Auth::user()->role == 1)
                                <th>Created By</th>
                                @endif
                                <th>Image</th>
                                <th>Category</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="datalist">
                            @foreach($blogs as $bl)
                            <tr id="row{{$bl['id']}}">
                                <td> {{$bl['title']}} </td>
                                <td style="width: 500px;"> {!!str_limit($bl['content'], 250)!!}</td>
                                <td> {{$bl['subtitle']}} </td>
                                @if(Auth::user()->role == 1)
                                <td> {{$bl['created_by']}} </td>
                                @endif
                                <td><img src="{{asset('/images/asriw/posts/'.$bl->image())}}" width="100"> </td>
                                <td> {{$bl['category']}} </td>
                                <td> 
                                    <button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="{{$bl['id']}}">
                                    Edit
                                    </button>

                                    <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="{{$bl['id']}}">
                                    Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <center>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal" id="btn-add">Tambah</button>
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
                <h4 class="modal-title">Edit Blog</h4>
              </div>
              <div class="modal-body">
                <form id="form" name="form">
                  <input type="hidden" name="id" value="" id="id">
                  <input type="hidden" name="fileCount" value="1" id="fileCount">
                  
                  <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" placeholder="Judul blog Anda" name="title">
                  </div>
                  <div class="form-group">
                    <label for="content">Konten</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Link Video (Kosongkan apabila ingin post menggunakan gambar)</label>
                    <input type="text" class="form-control" id="subtitle" placeholder="Copy link video embed dari youtube (Contoh : https://www.youtube.com/embed/KNT7wuqaykc)" name="subtitle">
                  </div>
                  <div class="form-group">
                    <label for="img_header">Image (Recommended 1280x720 px)</label>
                    <input type="file" name="file-1" onChange="validateJPG(this)" value="blank">
                  </div>
                  <div class="form-group">
                    <label for="category">Category</label>
                      <select name="category" class="form-control" id="category">
                          <option value="1">Image</option>
                          <option value="2">Video</option>
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