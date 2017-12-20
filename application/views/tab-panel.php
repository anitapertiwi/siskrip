<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet" />
         <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
         <!-- /. NAV TOP  -->    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">SISKRIP</a> 
            </div>
 
        </nav>   
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo base_url("assets/img/find_user.png"); ?>" class="user-image img-responsive"/>
                    </li>
                
 <!--MENU-HOME-->   
                    <li>
                        <a class="active-menu"  href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-3x"></i>HOME</a>
                    </li>

                <!--MENU Kampus 1 - Bumsil dan Fakultasnya-->
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>BUMI SILIWANGI<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FIP-->
                                    <a href="#">FIP<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">

                            
                                            <li>
                                                <a  href="<?php echo base_url('table'); ?>"><i class="fa fa-table fa-3x"></i>Kurikulum dan Teknologi Pendidikan</a>
                                            </li>
                                            <li>
                                                <a href="#">Administrasi Pendidikan</a>
                                            </li>
                                            <li>
                                                <a href="#">Psikologi Pendidikan dan Bimbingan</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Luar Sekolah</a>
                                            </li> 
                                            <li>
                                                <a href="#">Pendidikan Khusus</a>
                                            </li>
                                            <li>
                                                <a href="#">Psikologi</a>
                                            </li>
                                            <li>
                                                <a href="#">Perpustakaan dan Informasi</a>
                                            </li>
                                            <li>
                                                <a href="#">Pedagogik</a>
                                            </li>
                                        </ul> 
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FPIPS-->
                                    <a href="#">FPIPS<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Pendidikan Kewarganegaraan</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Sejarah</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Geografi</a>
                                            </li>
                                            <li>
                                                <a href="#">Survey Pemetaan dan Informasi Geografi (SPIG)</a>
                                            </li> 
                                            <li>
                                                <a href="#">Pendidikan IPS</a>
                                            </li>
                                            <li>
                                                <a href="#">Manajemen Resort and Leisure (MRL)</a>
                                            </li>
                                            <li>
                                                <a href="#">Kepariwisataan</a>
                                            </li>
                                            <li>
                                                <a href="#">Mata Kuliah Dasar Umum</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Agama Islam</a>
                                            </li>
                                            <li>
                                                <a href="#">Ilmu Komunikasi</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Sosiologi</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FPBS-->
                                    <a href="#">FPBS<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Pendidikan Bahasa Indonesia</a>
                                            </li>
                                            <li>
                                                <a href="#">Bahasa dan Sastra Indonesia</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Bahasa Daerah</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Bahasa Inggris</a>
                                            </li> 
                                            <li>
                                                <a href="#">Bahasa dan Sastra Inggris</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Bahasa Jerman</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Bahasa Arab</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Bahasa Jepang</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Bahasa Perancis</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Bahasa Korea</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FPMIPA-->
                                    <a href="#">FPMIPA<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Pendidikan Matematika</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Biologi</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Fisika</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Kimia</a>
                                            </li> 
                                            <li>
                                                <a href="#">Pendidikan Ilmu Komputer dan Ilmu Komputer</a>
                                            </li>
                                            <li>
                                                <a href="#">International Program on Science Education (IPSE)</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FPTK-->
                                    <a href="#">FPTK<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Pendidikan Teknik Sipil</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Teknik Arsitektur</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Teknik Elektro</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Teknik Mesin</a>
                                            </li> 
                                            <li>
                                                <a href="#">Pendidikan Kesejahteraan Keluarga</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Teknologi Agroindustri</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FPOK-->
                                    <a href="#">FPOK<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Pendidikan Olahraga</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Kesehatan dan Rekreasi</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Kepelatihan</a>
                                            </li>
                                        </ul>
                                        </li>
                                    </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FPEB-->
                                    <a href="#">FPEB<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Pendidikan Ekonomi dan Koperasi</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Manajemen Bisnis</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Manajemen Perkantoran</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Akuntansi</a>
                                            </li> 
                                            <li>
                                                <a href="#">Akuntansi</a>
                                            </li>
                                            <li>
                                                <a href="#">Manajemen</a>
                                            </li>
                                            <li>
                                                <a href="#">Ilmu Ekonomi dan Keuangan Islam</a>
                                            </li>
                                        </ul>
                                          </li>
                                    </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS FPSD-->
                                    <a href="#">FPSD<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Pendidikan Seni Rupa</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Seni Tari</a>
                                            </li>
                                            <li>
                                                <a href="#">Pendidikan Seni Musik</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS PASCA SARJANA-->
                                    <a href="#">Sekolah Pasca Sarjana<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Magister (S2)</a>
                                            </li>
                                            <li>
                                                <a href="#">Doctor (S3)</a>
                                            </li>
                                        </ul>
                     </li>
                </ul>
<!--=============================================================================================================-->
                <!--MENU Kampus 1 - Bumsil dan Fakultasnya-->
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>KAMPUS DAERAH<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <!--FAKULTAS CIBIRU-->
                                    <a href="#">Cibiru<span class="fa arrow"></span></a>
                                        
                                    <!--FAKULTAS TASIK-->
                                    <a href="#">Tasikmalaya<span class="fa arrow"></span></a>
                                        
                                    <!--FAKULTAS SUMEDANG-->
                                    <a href="#">Sumedang<span class="fa arrow"></span></a>
                                        
                                    <!--FAKULTAS PURWAKARTA-->
                                    <a href="#">Purwakarta<span class="fa arrow"></span></a>
                                        
                                    <!--FAKULTAS SERANG-->
                                    <a href="#">Serang<span class="fa arrow"></span></a>
                    </li>
                </ul>

<!--=============================================================================================================-->

                            
                            </li>
                                <!--<li>
                                    <a  href="<?php echo base_url('tab-panel'); ?>"><i class="fa fa-qrcode fa-3x"></i> Pasca Sarjana</a>
                                </li> 
                                <li>
                                    <a  href="<?php echo base_url('table'); ?>"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                                </li>-->
                                <li>
                                    <a  href="<?php echo base_url('form'); ?>"><i class="fa fa-edit fa-3x"></i>INFORMATION</a>
                                </li>                              
            </div>
        </nav>  

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabs & Panels </h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                                 
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Default Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Primary Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Success Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
            </div>
                   <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Info Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Warning Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Danger Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
            </div>
                    <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Collapsible Accordion Panel Group
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Collapsible Group Item #1</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Collapsible Group Item #3</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Tabs
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Home</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Profile</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">Messages</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Home Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pill Tabs
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#home-pills" data-toggle="tab">Home</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Profile</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Messages</a>
                                </li>
                                <li class="active"><a href="#settings-pills" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="home-pills">
                                    <h4>Home Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Profile Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade active in" id="settings-pills">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="well">
                        <h4>Normal Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="well well-lg">
                        <h4>Large Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="well well-sm">
                        <h4>Small Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
            </div>
                    <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Jumbotron</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>
                        <p>
                            <a class="btn btn-primary btn-lg" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
                    <!-- /. ROW  -->

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url("assets/js/jquery.metisMenu.js"); ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
    
   
</body>
</html>
