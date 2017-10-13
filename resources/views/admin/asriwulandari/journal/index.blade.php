@extends('admin.asriwulandari.layout.layout')

@section('title')
    Jurnal
@endsection

@section('nav7')
    class="active"
@endsection

@section('js')

    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="{{asset('lte-admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('lte-admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    @include("admin.asriwulandari.journal.ajax")

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Jurnal
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
                                <th>Detail</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody id="datalist">
                                @foreach($journal as $jrnl)
                                <tr id="row{{$jrnl->id}}">
                                    <td>{{$jrnl->title}}</td>
                                    <td style="word-wrap: break-word;">{{ str_limit($jrnl->detail,30) }}</td>
                                    <td>{{$jrnl->file}}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-info editModal" data-toggle="modal" data-target="#editModal" value="{{$jrnl->id}}">
                                            Edit
                                        </button>

                                        <button type="button" class="btn btn-danger deleteModal" data-toggle="modal" data-target="#deleteModal" value="{{$jrnl->id}}">
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
                        <h4 class="modal-title">Add Jurnal</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form" name="form">
                            <input type="hidden" name="id" value="" id="id">
                            <input type="hidden" name="_method" id="method">
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" placeholder="Judul" name="title" required>
                            </div>
                            <div class="form-group" style="word-wrap: break-word;">
                                <label for="title">Detail</label>
                                <textarea type="text" class="form-control" style="width: 100%; height: 400px;" id="detail" placeholder="detail jurnal" name="detail" required></textarea>
                            </div>
                            <div class="form-group" id="file-container">
                                <label for="file">File</label>
                                <input type="file" name="file" id="file" required accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <br><input type='text' class='form-control' id='filename' disabled style="display:none;">
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