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
              <h1>Update Data Barang Masuk</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Update Data Barang Masuk</li>
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
                <form class="form-horizontal" action="<?=base_url('admin/proses_databarang_masuk_update')?>" role="form"
                  method="post">

                  <?php if(validation_errors()){ ?>
                  <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong><br> <?= validation_errors(); ?>
                  </div>
                  <?php } ?>

                  <div class="card-body">
                    <div class="form-row">
                      <?php foreach($data_barang_update as $d){ ?>
                      <div class="form-group col-md-3">
                        <label for="id_transaksi" >ID Transaksi</label>
                        <input type="text" name="id_transaksi"  class="form-control"
                          id="id_transaksi" readonly="readonly" value="<?=$d->id_transaksi?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="tanggal" >Tanggal</label>
                        <input type="date" name="tanggal"  class="form-control" id="tanggal"
                          readonly="readonly" value="<?=$d->tanggal?>">
                      </div>
                    <div class="form-group col-md-6">
                      <label for="divisi" >Divisi</label>
                      <input type="text" name="divisi"  class="form-control" id="divisi"
                        readonly="readonly" value="<?=$d->divisi?>">
										</div>
										</div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="kode_barang">No. Seri / Kode Barang</label>
                      <input type="text" name="kode_barang" readonly="readonly"
                        class="form-control" id="kode_barang" value="<?=$d->kode_barang?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nama_barang">Nama Barang</label>
                      <input type="text" name="nama_barang" class="form-control"
                        id="nama_barang" value="<?=$d->nama_barang?>">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="jumlah">Jumlah</label>
                      <input type="number" name="jumlah" class="form-control" id="jumlah"
                        value="<?=$d->jumlah?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="satuan">Satuan</label>
                      <select name="satuan" class="form-control">
                        <?php foreach($list_satuan as $s){?>
                        <?php if($d->satuan == $s->nama_satuan){?>
                        <option value="<?=$d->satuan?>" selected=""><?=$d->satuan?></option>
                        <?php }else{?>
                        <option value="<?=$s->nama_satuan?>"><?=$s->nama_satuan?></option>
                        <?php } ?>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <?php } ?>
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
        Update Data Barang Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
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
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Update Data Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/proses_databarang_masuk_update')?>" role="form" method="post">

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?= validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <?php foreach($data_barang_update as $d){ ?>
                  <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
                  <input type="text" name="id_transaksi" style="margin-left:37px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->id_transaksi?>">
                </div>
                <div class="form-group">
                  <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal</label>
                  <input type="text" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->tanggal?>">
                </div>
                <div class="form-group" style="margin-bottom:40px;">
                  <label for="divisi" style="margin-left:220px;display:inline;">Divisi</label>
									<input type="text" name="divisi" style="margin-left:80px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->divisi?>">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="kode_barang" style="width:87%;margin-left: 12px;">No. Seri / Kode Barang</label>
                  <input type="text" name="kode_barang" required style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" value="<?=$d->kode_barang?>">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="nama_Barang" style="width:73%;">Nama Barang</label>
                  <input type="text" name="nama_barang" required style="width:90%;margin-right: 67px;" class="form-control" id="nama_Barang" value="<?=$d->nama_barang?>">
              </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="satuan" style="width:73%;">Satuan</label>
                  <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;">
                    <?php foreach($list_satuan as $s){?>
                      <?php if($d->satuan == $s->nama_satuan){?>
                    <option value="<?=$d->satuan?>" selected=""><?=$d->satuan?></option>
                    <?php }else{?>
                    <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                      <?php } ?>
                      <?php } ?>
                  </select>
              </div>
              <div class="form-group" style="display:inline-block;">
                <label for="jumlah" style="width:73%;margin-left:33px;">Jumlah</label>
                <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:67px;" class="form-control" id="jumlah" value="<?=$d->jumlah?>">
            </div>
            <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <button type="submit" style="width:20%;margin-left:689px;" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>&nbsp;&nbsp;&nbsp;
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
  </body>
</html>

