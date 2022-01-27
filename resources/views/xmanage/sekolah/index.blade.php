@extends('layout.template')
@section('title','Profil Sekolah')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Setting Data Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Sekolah</label>
                    <input type="text" class="form-control" id="exampleInputSekolah" placeholder="Nama Sekolah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No. Hp</label>
                    <input type="number" limit="12" class="form-control" id="exampleInputHp" placeholder="085XXXXXXXXX">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="exampel@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control" placeholder="Alamat Sekolah"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <!-- button -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <!-- /button -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection