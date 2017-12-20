<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal Judul Skripsi</title>

	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url("assets/js/morris/morris-0.4.3.min.css"); ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" />

     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>


<body>
    <div id="wrapper">
   <!--WRAPPER ATAS
        
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                
            <div style="color: white; padding: 2px 100px 20px 20px; float: left;
                font-size: 16px;"><img src="<?php echo base_url("assets/img/upi.png"); ?>" class="user-image2 img-responsive"/>
                 PORTAL JUDUL SKRIPSI &nbsp;</div>
        
        </nav>   
-->
           

    <!--MAIN MENU-->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url("assets/img/find_user.png"); ?>" class="user-image img-responsive"/>
				</li>

<!--=============================================================================================================-->


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
                                                <a  href="<?php echo base_url('Skripsi/index/FIP/Kurikulum dan Teknologi Pendidikan'); ?>">Kurikulum dan Teknologi Pendidikan</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FIP/Administrasi Pendidikan'); ?>">Administrasi Pendidikan</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FIP/Psikologi Pendidikan dan Bimbingan'); ?>">Psikologi Pendidikan dan Bimbingan</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FIP/Pendidikan Luar Sekolah'); ?>">Pendidikan Luar Sekolah</a>
                                            </li> 
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FIP/Pendidikan Khusus'); ?>">Pendidikan Khusus</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FIP/Psikologi'); ?>">Psikologi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FIP/Perpustakaan dan Informasi'); ?>">Perpustakaan dan Informasi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FIP/Pedagogik'); ?>">Pedagogik</a>
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
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Pendidikan Kewarganegaraan'); ?>">Pendidikan Kewarganegaraan</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Pendidikan Sejarah'); ?>">Pendidikan Sejarah</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Pendidikan Sejarah'); ?>">Pendidikan Geografi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Survey Pemetaan dan Ilmu Geografi'); ?>">Survey Pemetaan dan Informasi Geografi (SPIG)</a>
                                            </li> 
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Pendidikan IPS'); ?>">Pendidikan IPS</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Manajemen Resort and Leisure'); ?>">Manajemen Resort and Leisure (MRL)</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Manajemen Industri Katering'); ?>">Manajemen Industri Katering (MIK)</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Manajeman Pemasaran Pariwisata'); ?>">Manajemen Pemasaran Pariwisata</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Pendidikan Agama Islam'); ?>">Pendidikan Agama Islam</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Ilmu Komunikasi'); ?>">Ilmu Komunikasi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPIPS/Pendidikan Sosiologi'); ?>">Pendidikan Sosiologi</a>
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
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Indonesia'); ?>">Pendidikan Bahasa Indonesia</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Bahasa dan Sastra Indonesia'); ?>">Bahasa dan Sastra Indonesia</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Daerah'); ?>">Pendidikan Bahasa Daerah</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Inggris'); ?>">Pendidikan Bahasa Inggris</a>
                                            </li> 
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Bahasa dan Sastra Inggris'); ?>">Bahasa dan Sastra Inggris</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Jerman'); ?>">Pendidikan Bahasa Jerman</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Arab'); ?>">Pendidikan Bahasa Arab</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Jepang'); ?>">Pendidikan Bahasa Jepang</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Perancis'); ?>">Pendidikan Bahasa Perancis</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPBS/Pendidikan Bahasa Korea'); ?>">Pendidikan Bahasa Korea</a>
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
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Pendidikan Matematika'); ?>">Pendidikan Matematika</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Matematika'); ?>">Matematika</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Pendidikan Biologi'); ?>">Pendidikan Biologi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Biologi'); ?>">Biologi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Pendidikan Fisika'); ?>">Pendidikan Fisika</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Fisika'); ?>">Fisika</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Pendidikan Kimia'); ?>">Pendidikan Kimia</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Kimia'); ?>">Kimia</a>
                                            </li>  
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Pendidikan Ilmu Komputer'); ?>">Pendidikan Ilmu Komputer</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/Ilmu Komputer'); ?>">Ilmu Komputer</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPMIPA/International Program on Science Education'); ?>">International Program on Science Education (IPSE)</a>
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
                                                <a href="<?php echo base_url('Skripsi/index/FPTK/Pendidikan Teknik Sipil'); ?>">Pendidikan Teknik Sipil</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPTK/Pendidikan Teknik Arsitektur'); ?>">Pendidikan Teknik Arsitektur</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPTK/Pendidikan Teknik Elektro'); ?>">Pendidikan Teknik Elektro</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPTK/Pendidikan Teknik Mesin'); ?>">Pendidikan Teknik Mesin</a>
                                            </li> 
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPTK/Pendidikan Kesejahteraan Keluarga'); ?>">Pendidikan Kesejahteraan Keluarga</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPTK/Pendidikan Teknologi Agroindustri'); ?>">Pendidikan Teknologi Agroindustri</a>
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
                                                <a href="<?php echo base_url('Skripsi/index/FPEB/Pendidikan Ekonomi dan Koperasi'); ?>">Pendidikan Ekonomi dan Koperasi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPEB/Pendidikan Manajemen Bisnis'); ?>">Pendidikan Manajemen Bisnis</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPEB/Pendidikan Manajemen Perkantoran'); ?>">Pendidikan Manajemen Perkantoran</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPEB/Pendidikan Akuntansi'); ?>">Pendidikan Akuntansi</a>
                                            </li> 
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPEB/Akuntansi'); ?>">Akuntansi</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPEB/Manajemen'); ?>">Manajemen</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPEB/Ilmu Ekonomi dan Keuangan Islam'); ?>">Ilmu Ekonomi dan Keuangan Islam</a>
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
                                                <a href="<?php echo base_url('Skripsi/index/FPSD/Pendidikan Seni Rupa'); ?>">Pendidikan Seni Rupa</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPSD/Pendidikan Seni Tari'); ?>">Pendidikan Seni Tari</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('Skripsi/index/FPSD/Pendidikan Seni Musik'); ?>">Pendidikan Seni Musik</a>
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
                    </li>
                        <li>      
                            <a class="active-menu" href="<?php echo base_url(); ?>skripsi/information"><i class="fa fa-sitemap"></i>INFORMATION</a>
                        
                        </li>                              
            </div>
        </nav>

       