        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Jumlah Skripsi Perfakultas</h2>                          
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Lihat Data</b>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="siskrip">
                                    <thead>
                                        <tr>
                                            <th>Fakultas</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($agregatFakultas as $datasiskrip) : ?>
                                        <?php var_dump($datasiskrip)?>
                                        <tr>
                                            <td><?php echo $datasiskrip->fakultas ?></td>
                                            <td><?php echo $datasiskrip->num ?></td>
                                        </tr>    
                                        <?php endforeach; ?>                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                <!-- /. ROW  -->
                <!-- /. ROW  -->
        </div>
