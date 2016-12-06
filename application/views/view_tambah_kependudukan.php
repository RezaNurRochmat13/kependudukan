<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Sistem Informasi Kependudukan </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/'?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'assets/'?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url().'assets/'?>vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'assets/'?>build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'?>build/css/jquery-ui.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SI Kependudukan</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url().'assets/'?>production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('home/dashboard')?>"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('kependudukan/index')?>">Data Kependudukan</a></li>
                      <li><a href="<?php echo site_url('raskin/index')?>">Data Penerima Raskin</a></li>
                      <li><a href="<?php echo site_url('kematian/index')?>">Data Kematian</a></li>
                      <li><a href="<?php echo site_url('catatan/index')?>">Catatan</a></li>
                    </ul>
                  </li>
                   <li><a href="<?php echo site_url('user/index')?>"><i class="fa fa-user"></i> Manajemen User </a>
                </ul>
              </div>
              <div class="menu_section">
                <ul class="nav side-menu">
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url().'assets/'?>production/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'assets/'?>production/images/img.jpg" alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'assets/'?>production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'assets/'?>production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url().'assets/'?>production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Tambah Data Kematian</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Data Kematian </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <form action="<?php echo site_url("kependudukan/tambahData")?>" method="post">
                         <table class="table table-striped">
                           <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Nama Lengkap</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap" value="<?php echo set_value('nama_lengkap')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                            <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Nomor Induk Kependudukan</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="nomor_induk_kependudukan" class="form-control" placeholder="Masukkan nomor induk kependudukan" value="<?php echo set_value('nomor_induk_kependudukan')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                            <tr>
                            <td>
                               <label for="example-text-input" class="col-xs-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-xs-10">
                                          <select class="selectpicker form-control" name="jenis_kelamin" required>
                                            <option>Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                          </select>
                                </div>
                              </td>
                           </tr>
                          <tr>
                            <td>
                              <div class="form-group=row">
                                <label for="example-text-input" class="col-xs-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-xs-10">
                                  <div class="right-inner-addon">
                                      <input type="date" name="tanggal_lahir" id="datepicker" class="form-control" placeholder="Masukkan tanggal lahir" value="<?php echo set_value('tanggal_lahir')?>" required>
                                </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                           <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Tempat Lahir</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir" value="<?php echo set_value('tempat_lahir')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                           <tr>
                            <td>
                               <label for="example-text-input" class="col-xs-2 col-form-label">Agama</label>
                                <div class="col-xs-10">
                                    <select class="selectpicker form-control" name="agama" required>
                                        <option>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                              </td>
                           </tr>
                            <tr>
                            <td>
                               <label for="example-text-input" class="col-xs-2 col-form-label">Jenjang Pendidikan</label>
                                <div class="col-xs-10">
                                    <select class="selectpicker form-control" name="jenjang_pendidikan" required>
                                        <option>Pilih Jenjang</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                              </td>
                           </tr>
                           <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Pekerjaan</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan pekerjaan" value="<?php echo set_value('pekerjaan')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                            <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Nama Kepala Keluarga</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="nama_kepala_keluarga" class="form-control" placeholder="Masukkan nama kepala keluarga" value="<?php echo set_value('nama_kepala_keluarga')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                           <tr>
                            <td>
                               <label for="example-text-input" class="col-xs-2 col-form-label">Status Perkawinan</label>
                                <div class="col-xs-10">
                                    <select class="selectpicker form-control" name="status_perkawinan" required>
                                        <option>Pilih Status Pernikahan</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                </div>
                              </td>
                           </tr>
                            <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Hubungan Antar Keluarga</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="hubungan_dalam_keluarga" class="form-control" placeholder="Masukkan hubungan dalam keluarga" value="<?php echo set_value('hubungan_dalam_keluarga')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                            <tr>
                            <td>
                               <label for="example-text-input" class="col-xs-2 col-form-label">Kewarnegaraan</label>
                                <div class="col-xs-10">
                                    <select class="selectpicker form-control" name="kewarnegaraan" required>
                                        <option>Pilih Kewarnegaraan</option>
                                        <option value="WNI">Warga Negara Indonesia</option>
                                        <option value="WNA">Warga Negara Asing</option>
                                    </select>
                                </div>
                              </td>
                           </tr>
                            <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Nomor Paspor atau Kitap</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="nomor_paspor_kitap" class="form-control" placeholder="Masukkan nomor paspor atau kitap" value="<?php echo set_value('nomor_paspor_kitap')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                            <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Nama Ayah</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan nama ayah" value="<?php echo set_value('nama_ayah')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                            <tr>
                            <td>
                              <div class="form-group-row">
                                  <label for="example-text-input" class="col-xs-2 col-form-label">Nama Ibu</label>
                                  <div class="col-xs-10">
                                    <div class="right-inner-addon">
                                      <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan nama ibu" value="<?php echo set_value('nama_ibu')?>">
                                    </div>
                              </div>
                            </div>
                            </td>
                           </tr>
                           <tr>
                            <td colspan="2">
                              <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                              <button type="reset" class="btn btn-default">Batal</button>
                            </td>
                           </tr>
                         </table>
                       </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Developed By Life Is Coding <a href="https://colorlib.com">All right reserved</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/'?>vendors/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url().'assets/'?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'assets/'?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url().'assets/'?>vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url().'assets/'?>build/js/custom.min.js"></script>
    <script src="<?php echo base_url().'assets/'?>build/js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat:'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      showDropdowns: true
    });
  });
  </script>
  <script>
  $( function() {
    $( "#tanggal" ).datepicker({
      dateFormat:'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      showDropdowns: true
    });
  });
  </script>
  </body>
</html>
