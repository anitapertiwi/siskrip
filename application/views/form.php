<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISKRIP</title>
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
                        <a href="#"><i class="fa fa-sitemap"></i>BUMI SILIWANGI<span class="fa arrow"></span></a>
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

<!--=============================================================================================================-->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Element Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Form Examples</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Text Input</label>
                                            <input class="form-control" />
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input class="form-control" placeholder="PLease Enter Keyword" />
                                        </div>
                                        <div class="form-group">
                                            <label>Just A Label Control</label>
                                            <p class="form-control-static">info@yourdomain.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example One
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Two
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Three
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes Examples</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> One
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Two
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Three
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Button Examples</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />Radio Example One
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Radio Example Two
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"/>Radio Example Three
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

                                    </form>
                                    <br />
                                      <h3>With radio & checkboxes</h3>
                                    <form>

    <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="checkbox" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                         <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="radio" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                    </form>

                                 
    </div>
                                
                                <div class="col-md-6">
                                    <h3>Disabled Form State Examples</h3>
                                    <form role="form">
                                        <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select </label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" />Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h3>Validation State Examples</h3>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </form>
                                    <h3>Input Group Examples</h3>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <h3>Different Size Input Groups</h3>
                                     <form role="form">
  <div class=" form-group input-group input-group-lg">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>

<div class="form-group input-group">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>

<div class="form-group input-group input-group-sm">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>
                                         
                                     </form>
                                    <h3>Different Size Input Groups</h3>
                                     <form role="form">
                                  <div class="input-group">
      <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" />
    </div>
<br />
                                           <div class="input-group">
     
      <input type="text" class="form-control" />
                                                <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
                                         </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
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
