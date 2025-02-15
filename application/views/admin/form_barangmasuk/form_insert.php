<!DOCTYPE html>
<html lang="en">


<head>
  <title><?= $title; ?></title>
  <?php $this->load->view("admin/_layouts/header.php") ?>
  <div class="wrapper">
  <?php $this->load->view("admin/_layouts/navbar.php") ?>
  <?php $this->load->view("admin/_layouts/sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah Data Barang Masuk</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Barang Masuk</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Data Barang Masuk</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?=base_url('admin/proses_databarang_masuk_insert')?>" role="form"
                  method="post">

                  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                  <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
                  </div>
                  <?php } ?>

                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="id_transaksi" >ID Transaksi</label>
                        <input type="text" name="id_transaksi"  class="form-control"
                          id="id_transaksi" readonly="readonly"
                          value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="tanggal" >Tanggal</label>
                        <input type="date" name="tanggal"  class="form-control"
													id="tanggal" placeholder="Masukan Tanggal">
													<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    <div class="form-group col-md-6">
                      <label for="divisi">Divisi</label>
                      <select name="divisi" class="form-control">
                        <option value="" selected="">-- Pilih --</option>
                        <?php foreach($list_divisi as $ld){ ?>
                        <option value="<?=$ld->kode_divisi?>"><?=$ld->nama_divisi?></option>
                        <?php } ?>
                      </select>
										</div>
										</div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="kode_barang">No. Seri / Kode Barang</label>
                      <input type="text" name="kode_barang" class="form-control"
												id="kode_barang" placeholder="No. Seri / Kode Barang">
												<?= form_error('kode_barang', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nama_barang">Nama Barang</label>
                      <input type="text" name="nama_barang" class="form-control"
												id="nama_barang" placeholder="Nama Barang">
												<?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="jumlah">Jumlah</label>
                      <input type="number" name="jumlah" class="form-control" id="jumlah"
												placeholder="Jumlah">
												<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="satuan">Satuan</label>
                      <select name="satuan" class="form-control">
                        <option value="" selected="">-- Pilih --</option>
                        <?php foreach($list_satuan as $s){ ?>
                        <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="reset" name="btn_reset" class="btn btn-secondary"><i
                        class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a type="submit" class="btn btn-warning" onclick="history.back(-1)" name="btn_kembali"><i
                        class="far fa-arrow-alt-circle-left" aria-hidden="true"></i> Kembali</a>
                    <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i>
                      Simpan</button>
                    <a type="submit" class="btn btn-primary center-block"
                      href="<?=base_url('admin/tabel_barangmasuk')?>" name="btn_listbarang"><i class="fa fa-table"
                        aria-hidden="true"></i> List Barang</a>
                  </div>
              </div>
              <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

<head>
  <title><?= $title; ?></title>
	<?php $this->load->view("admin/_layouts/header.php") ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<?php $this->load->view("admin/_layouts/navbar.php") ?>
	<?php $this->load->view("admin/_layouts/sidebar.php") ?>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Barang Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Data Barang Masuk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="container">
            <!-- general form elements -->
          <div class="box box-primary" style="width:94%;">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Data Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/proses_databarang_masuk_insert')?>" role="form" method="post">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?= validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
                  <input type="text" name="id_transaksi" style="margin-left:37px;width:20%;display:inline;" class="form-control" readonly="readonly" value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>">
                </div>
                <div class="form-group">
                  <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal</label>
                  <input type="text" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control form_datetime" placeholder="Klik Disini">
                </div>
                <div class="form-group" style="margin-bottom:40px;">
                  <label for="divisi" style="margin-left:220px;display:inline;">Divisi</label>
                  <select class="form-control" name="divisi" style="margin-left:80px;width:20%;display:inline;">
                    <option value="" selected="">-- Pilih --</option>
                    <?php foreach($list_divisi as $ld){ ?>
                    <option value="<?=$ld->kode_divisi?>"><?=$ld->nama_divisi?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="kode_barang" style="width:87%;margin-left: 12px;">No. Seri / Kode Barang</label>
                  <input type="text" name="kode_barang" style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" placeholder="Kode Barang">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="nama_Barang" style="width:73%;">Nama Barang</label>
                  <input type="text" name="nama_barang" style="width:90%;margin-right: 67px;" class="form-control" id="nama_Barang" placeholder="Nama Barang">
              </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="satuan" style="width:73%;">Satuan</label>
                  <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;">
                    <option value="" selected="">-- Pilih --</option>
                    <?php foreach($list_satuan as $s){ ?>
                    <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group" style="display:inline-block;">
                <label for="jumlah" style="width:73%;margin-left:33px;">Jumlah</label>
                <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:67px;" class="form-control" id="jumlah">
            </div>
            <div class="form-group" style="display:inline-block;">
              <button type="reset" class="btn btn-basic" name="btn_reset" style="width:95px;margin-left:-70px;"><i class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
						</div>
              <!-- /.box-body -->
              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%;margin-right:26%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <a type="button" class="btn btn-info" style="width:14%;margin-right:29%" href="<?=base_url('admin/tabel_barangmasuk')?>" name="btn_listbarang"><i class="fa fa-table" aria-hidden="true"></i> List Barang Masuk</a>
                <button type="submit" style="width:20%" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
              </div>
            </form>
          </div>
          </div>
        </div>
        </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view("admin/_layouts/footer.php") ?>
  <script src="<?= base_url()?>assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
  $(".form_datetime").datetimepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    todayBtn: true,
    pickTime: false,
    minView: 2,
    maxView: 4,
  });
  </script>
  </body>
</html>

	<?php $this->load->view("admin/_layouts/footer.php") ?>
	<script src="<?= base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
      $(".form_datetime").datetimepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayBtn: true,
        pickTime: false,
        minView: 2,
        maxView: 4,
      });
  </script>
  </body>
  </html>

