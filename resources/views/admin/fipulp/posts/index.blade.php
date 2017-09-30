@extends('admin.layout.layout')

@section('title')
News
@endsection

@section('nav3')
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
@include("admin.news.ajax")


@endsection

@section('css')
<link rel="stylesheet" href="{{asset('lte-admin/plugins/datepicker/datepicker3.css')}}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News
        <small>Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL::Route('admin.index')}}"> Home</a></li>
        <li class="active">News</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div id ="flash" class="col-md-12">
            </div>

            <div class="col-md-12" id="successflash">
                <div class="alert alert-success">
                <h4><i class="icon fa fa-check"></i> Data berhasil diupdate!</h4>
              </div>
            </div>

            <div class="col-md-12" id="failflash">
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
                                <th>Tanggal</th>
                                <th>Hashtag</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="datalist">
                            @foreach($news as $ne)
                            <tr id="row{{$ne['idnews']}}">
                                <td> {{$ne['title']}} </td>
                                <td> {{$ne['date']}} </td>
                                <td> {{$ne['hashtag']}} </td>                                
                                <td><img src="{{asset('forsa/news/'.$ne->image())}}" width="100"> </td>
                                <td> 
                                    <button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="{{$ne['idnews']}}">
                                    Edit
                                    </button>

                                    <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="{{$ne['idnews']}}">
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
                <h4 class="modal-title">Edit News</h4>
              </div>
              <div class="modal-body">
                <form id="form" name="form">
                  <input type="hidden" name="id" value="" id="id">
                  <input type="hidden" name="fileCount" value="1" id="fileCount">
                  
                  <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" placeholder="Judul" name="title">
                  </div>
                  <div class="form-group">
                    <label for="content">Konten</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="date" name="date">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label for="hashtag">Hashtag</label>
                    <input type="text" class="form-control" id="hashtag" placeholder="Hashtag" name="hashtag" required>
                  </div>
                  <div class="form-group">
                    <label for="fileimage">Image (Recommended 1280x720 px)</label>
                    <input type="file" name="file-1" onChange="validateJPG(this)" value="blank">
                    <a href="#" id="fileimage" target="_blank">Download</a>
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