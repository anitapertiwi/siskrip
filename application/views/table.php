        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Skripsi UPI</h2>                          
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Lihat Skripsi</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="siskrip">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Penulis</th>
                                            <th>Judul</th>
                                            <th>Jurusan</th>
                                            <th>Fakultas</th>
                                            <th>Dosen Pembimbing</th>
                                            <th>Dosen Pembimbing</th>
                                            <th>Abstrak</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($siskrip as $datasiskrip) : ?>
                                        <tr>
                                            <td><?php echo"$datasiskrip->nim" ?></td>
                                            <td><?php echo"$datasiskrip->penulis" ?></td>
                                            <td><?php echo"$datasiskrip->judul" ?></td>
                                            <td><?php echo"$datasiskrip->jurusan" ?></td>
                                            <td><?php echo"$datasiskrip->fakultas" ?></td>
                                            <td><?php echo"$datasiskrip->dosen_pembimbing1" ?></td>
                                            <td><?php echo"$datasiskrip->dosen_pembimbing2" ?></td>
                                            <td><?php echo"$datasiskrip->abstrak" ?></td>
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
