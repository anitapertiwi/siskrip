 <!-- /. NAV SIDE  -->
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                
            <div style="color: white; float: right;
                font-size: 16px;"><img src="<?php echo base_url("assets/img/head.png"); ?>" class="user-image2 img-responsive"/>
                  
             </div>
        </nav> 

        <div id="page-wrapper" >
           <!-- <div id="page-inner">
                 
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
                 <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
                </div>
                </div>
                </div>
                    

                <div class="col-md-3 col-sm-6 col-xs-6">           
                 <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                <div class="text-box" >
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
                </div>
                </div>
                    
                <div class="col-md-3 col-sm-6 col-xs-6">           
                 <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
                </div>
                </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
             </div>
            </div>-->

<!--=============================================================================================================-->
               
                <hr /> 
        
        
<!-- /. ROW  -->
             <div class="col-md-1"> </div>
            <div class="row">
                <?php echo form_open('Skripsi/search') ?>
                <div class="col-md-3 col-sm-6 col-xs-6"> 
                    <input type="search" class="form-control" placeholder="Judul" name="judul">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6"> 
                    <input type="search" class="form-control" placeholder="Jurusan" name="jurusan">
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6"> 
                    <input type="search" class="form-control" placeholder="Pembimbing" name="dosen">
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6"> 
                    <input type="submit" value="Cari" class="btn btn-primary">
                </div>
                <?php echo form_close(); ?>
            </div>
                <br><br>
                                
                

<!--=============================================================================================================-->
            <div class="panel panel-back noti-box">                  
                    <p class="main-text">Koleksi Terkini</p>
                    <div id="columnchart_values" style="width: 100px; height: 400px;"></div>
            </div>
<!---=============================================================================================================->
         

