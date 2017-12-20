        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Dosen UPI</h2>                          
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Lihat Dosen</b>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="siskrip">
                                    <thead>
                                        <tr>
                                            <th>Dosen Pembimbing</th>
                                            <th>Sebagai Pembimbing 1</th>
                                            <th>Sebagai Pembimbing 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($agregatDosen as $datasiskrip) : ?>
                                        <tr>
                                            <td><a href="<?php echo base_url();?>Skripsi/searchDosen/<?php echo rawurlencode($datasiskrip['dosen']); ?>" title=""><?php echo $datasiskrip['dosen'] ?></a> </td>
                                            <td><?php echo $datasiskrip['p1'] ?></td>
                                            <td><?php echo $datasiskrip['p2'] ?></td>
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
