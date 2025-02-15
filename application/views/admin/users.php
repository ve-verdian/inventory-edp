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
              <h1>Data Users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Users</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-table" aria-hidden="true"></i> Tabel Data Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
                </div>
                <?php } ?>

                <a href="<?=base_url('admin/form_user')?>" style="margin-bottom:10px;" type="button"
                  class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah
                  User Baru</a>
                <table id="example1" class="table table-responsive table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="15%">
                        <center>Username
                      </th>
                      <th width="15%">
                        <center>Email
                      </th>
                      <th width="10%">
                        <center>Role
                      </th>
                      <th width="12%">
                        <center>Last Login
                      </th>
                      <th width="5%">
                        <center>Update
											</th>
											<th width="5%">
                        <center>Hapus
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php if(is_array($list_users)){ ?>
                      <?php foreach($list_users as $dd): ?>
                      <td width="15%"><?=$dd->username?></td>
                      <td width="25%"><?=$dd->email?></td>
                      <?php if($dd->role == 1){ ?>
                      <td width="10%">
                        <center>User Admin
                      </td>
                      <?php }else{?>
                      <td width="10%">
                        <center>User Biasa
                      </td>
                      <?php }?>
                      <td width="12%">
                        <center><?=$dd->last_login?>
                      </td>
                      <td width="8%">
                        <center>
                          <a type="button" class="btn btn-success" href="<?=base_url('admin/update_user/'.$dd->id)?>"
                            name="btn_update" style="margin:auto;"><i class="fas fa-edit" aria-hidden="true"></i></a>
											</td>
											<td>		
												<center><a type="button" class="btn btn-danger btn-delete"
                            href="<?=base_url('admin/proses_delete_user/'.$dd->id)?>" name="btn_delete"
                            style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                    <?php }else { ?>
                    <td colspan="7" align="center"><strong>Data Kosong</strong></td>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>

    <?php $this->load->view("admin/_layouts/footer.php") ?>
    <script>
    jQuery(document).ready(function($) {
      $('.btn-delete').on('click', function() {
        var getLink = $(this).attr('href');
        swal({
          title: 'Delete Data',
          text: 'Yakin Ingin Menghapus Data ?',
          html: true,
          confirmButtonColor: '#d9534f',
          showCancelButton: true,
        }, function() {
          window.location.href = getLink
        });
        return false;
      });
    });

    $(function() {
      $('#example1').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': false,
        'info': true,
        'autoWidth': false

      })
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    });
    </script>
    </body>

<html>
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
        Tabel Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('admin/users')?>" class="active">Users</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <a href="<?=base_url('admin/form_user')?>" style="margin-bottom:10px;" type="button" class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Last Login</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php if(is_array($list_users)){ ?>
                  <?php foreach($list_users as $dd): ?>
                    <td><?=$dd->username?></td>
                    <td><?=$dd->email?></td>
                    <?php if($dd->role == 1){ ?>
                    <td>User Admin</td>
                    <?php }else{?>
                    <td>User Biasa</td>
                    <?php }?>
                    <td><?=$dd->last_login?></td>
                    <td><a type="button" class="btn btn-info"  href="<?=base_url('admin/update_user/'.$dd->id)?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a type="button" class="btn btn-danger btn-delete"  href="<?=base_url('admin/proses_delete_user/'.$dd->id)?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
              <?php endforeach;?>
              <?php }else { ?>
                    <td colspan="7" align="center"><strong>Data Kosong</strong></td>
              <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	<?php $this->load->view("admin/_layouts/footer.php") ?>
<!-- page script -->
<script>
jQuery(document).ready(function($){
      $('.btn-delete').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Delete Data',
                  text: 'Yakin Ingin Menghapus Data ?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });
  });

  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false

    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
</script>
</body>
</html>
