@extends('admin.biodegum.layout.layout')

@section('title')
Portfolio
@endsection

@section('nav2')
class="active"
@endsection

@section('js')

<meta name="_token" content="{!! csrf_token() !!}" />
@include("admin.biodegum.portfolio.ajax")

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Portfolio
        <small>Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL::Route('biodegumdashboard')}}"> Home</a></li>
        <li class="active">Portfolio</li>
      </ol>
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
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="datalist">
                            @foreach($images as $img)
                            <tr id="row{{$img['id']}}">
                                <td> {{$img['title']}} </td>
                                <td><img src="{{asset('/images/biodegum/portfolio/'.$img->image())}}" width="300"> </td>
                                <td> 
                                    <button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="{{$img['id']}}">
                                    Edit
                                    </button>

                                    <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="{{$img['id']}}">
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
                <h4 class="modal-title">Edit Portfolio</h4>
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
                    <label for="subtitle">Sub Judul</label>
                    <input type="text" class="form-control" id="subtitle" placeholder="Sub Judul" name="subtitle">
                  </div>

                  <div class="form-group">
                    <label for="fileimage">Image</label>
                    <input type="file" name="file-1" onChange="validateJPG(this)" value="blank">
                    <a href="#" id="fileimage" target="_blank">Download</a>
                  </div>
                  
                  <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>
                  <!--<div class="form-group">
                    <label for="dark">Dark</label>
                    <select class="form-control" name="dark" id="dark">
											<option value="yes">Dark</option>
											<option value="no">Light</option>
										</select>
                  </div>
                  <div class="form-group">
                    <label for="position">Position</label>
                    <select class="form-control" name="position" id="position">
											<option value="left">Left</option>
											<option value="mid">Mid</option>
											<option value="right">Right</option>
										</select> 
                  </div>-->
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