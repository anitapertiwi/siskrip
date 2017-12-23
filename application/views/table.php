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
                                            <th>Dosen Pembimbing 1</th>
                                            <th>Dosen Pembimbing 2</th>
                                            <th>Abstrak</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($siskrip as $datasiskrip) : ?>
                                        <tr>
                                            <td><?php echo"$datasiskrip->nim" ?></td>
                                            <!-- <td><?php echo"$datasiskrip->tahun_wisuda" ?></td> -->                                            
                                            <td><a href="#MyModal" data-nim="<?php echo $datasiskrip->nim?>" data-tahun="<?php echo $datasiskrip->tahun_wisuda?>" data-penulis="<?php echo $datasiskrip->penulis?>" data-email="<?php echo $datasiskrip->email?>" data-judul="<?php echo $datasiskrip->judul?>" data-toggle="modal" data-jurusan="<?php echo $datasiskrip->jurusan?>" data-fakultas="<?php echo $datasiskrip->fakultas?>" data-dosbing="<?php echo $datasiskrip->dosen_pembimbing1?>" data-dospem="<?php echo $datasiskrip->dosen_pembimbing2?>" data-abstrak="<?php echo $datasiskrip->abstrak?>" data-target="#MyModal" data-whatever="@getbootstrap"><?php echo"$datasiskrip->penulis" ?></a></td>
                                            <!-- <td><?php echo"$datasiskrip->email" ?></td> -->
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
         <div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Detail Penulis</h4>
              </div>
              <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="siskrip">
                        <thead>
                             <tr>
                                <td>NIM</td>
                                <td id="labelNIM" data-nim="<?php echo $datasiskrip->nim?>"></td>
                            </tr>
                            <tr>
                                <td>Tahun Lulus</td>
                                <td  id="labelTahun" data-tahun="<?php echo $datasiskrip->tahun_wisuda?>"></td>
                            <tr>
                            <tr>
                                <td>Penulis</td>
                                <td id="labelPenulis" data-penulis="<?php echo $datasiskrip->penulis?>"></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td id="labelEmail" data-email="<?php echo $datasiskrip->email?>"></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td id="labelJudul" data-judul="<?php echo $datasiskrip->judul?>"></td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td id="labelJurusan" data-jurusan="<?php echo $datasiskrip->jurusan?>"></td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td id="labelFakultas" data-fakultas="<?php echo $datasiskrip->fakultas?>"></td>
                            </tr>
                            <tr>
                                <td>Dosen Pembimbing 1</td>
                                <td id="labelDosbing" data-dosbing="<?php echo $datasiskrip->dosen_pembimbing1?>"></td>
                            </tr>
                            <tr>
                                <td>Dosen Pembimbing 2</td>
                                <td id="labelDospem" data-dospem="<?php echo $datasiskrip->dosen_pembimbing2?>"></td>
                            </tr>
                            <tr>
                                <td>Abstrak</td>
                                <td id="labelAbstrak" data-abstrak="<?php echo $datasiskrip->abstrak?>"></td>
                            </tr>
                        </thead>
                    <table>
                                   <!--  </thead> -->
 <!--                <form>
                  <div class="form-group">
                    <label class="control-label" id="nim">NIM</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label" id="penulis">Penulis</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label" id="email">E-mail</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label" id="jurusan">Jurusan</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label" id="fakultas">Fakultas</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label" id="judul">Judul</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Dosen Pembimbing 1</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Dosen Pembimbing 2</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Tahun Lulus</label>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Abstrak</label>
                  </div>
                </form>
  -->             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>