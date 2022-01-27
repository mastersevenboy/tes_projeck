@extends('layout.template')
@section('title','Data Kelas')
@section('content')

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Kelas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <p><a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</a></p>
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- $no=1; -->
                @foreach($tb_kelas as $s) 
                <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->id_kelas}}</td>
                    <td>{{$s->nm_kelas}}</td>
                    <td>
                    <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>

        <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<h4 class="modal-title">Tambah Kelas</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
                <form action="{{route('xkelas.create')}}" method="get">
				<div class="modal-body">
                    <div class="mt-2">
					<label for="id_kelas">Kode Kelas</label>
                    <input type="text" class="form-control"  placeholder="Kode Kelas">
                    </div>
                    <div class="mt-2">
					<label for="nm_kelas">Nama Kelas</label>
                    <input type="text" class="form-control"  placeholder="Nama Kelas">
                    </div>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
                </form>
			</div>
		</div>
	</div>
@endsection

