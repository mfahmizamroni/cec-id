<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tambah Gaji
          <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">General Elements</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      </br></br>
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Add Salary</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                <div class="">
                  <h4 class="pull-left"><b>IDENTITAS PEGAWAI</b></h4>
                  <div class="pull-right">
                      <a href="<?php echo base_url().'staff';?>"" class="btn btn-primary">Lihat Daftar Pegawai</a>
                  </div>
                </div>
                <br>
                <hr>
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" class="form-control" placeholder="098877555" >
                </div>
                <div class="form-group">
                  <label>Nama Pegawai</label>
                  <div class="row">
                    <div class="col-xs-6">
                      <input type="text" class="form-control" placeholder="Ilham" disabled>
                    </div>
                    <div class="col-xs-6">
                      <input type="text" class="form-control" placeholder="Sukmawan" disabled>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Jl. Abcdefgh no 28" disabled>
                </div>
                <div class="form-group">
                  <label>Outlet</label>
                  <input type="text" class="form-control" placeholder="Mulyosari" disabled>
                </div>
                </br>
                <div class="">
                  <h4><b>RINCIAN GAJI</b></h4>
                </div>
                <hr>
                <div class="form-group">
                <label>Tanggal Penggajian</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Gaji Pokok</label>
                  <input type="text" class="form-control" placeholder="5.000.000">
                </div>
                <div class="form-group">
                  <label>Gaji Lembur</label>
                  <input type="text" class="form-control" placeholder="500.000">
                </div>
                <div class="form-group">
                  <label>Bonus</label>
                  <input type="text" class="form-control" placeholder="200.000">
                </div>
                <hr>
                <div class="form-group">
                  <label class="col-sm-3 control-label"><b>Total Gaji  : </b></label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" placeholder="57.000.000" disabled>
                  </div>
                </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit Gaji</button>
                </div>

                <br>
              </form>
            </div>
            <!-- /.box -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- =============================================== -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>