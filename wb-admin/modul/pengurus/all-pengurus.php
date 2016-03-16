ini all pengurus
<div class="row">
          
          <div class="span12">
            
            <div class="widget">
            
          <div class="widget-header">
            <i class="icon-th-large"></i>
            <h3>Pilih Screening</h3>
          </div> <!-- /widget-header -->
          
          <div class="widget-content" style="padding:5% ">
          <div style="width:100%;height:100%;padding:15 px ;margin-left:2%">
            
            <div class="pricing-plans plans-1">
              
            <div class="plan-container">
              <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th>No</th>
                                            <th width="20%">Foto</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                            $no = 1;
                                            $i=0;
                                            foreach($obj->viewPost() as $value){
                                                extract($value);
                                                $i++;
                                        ?>
                                        <tr <?if($i%2==0){echo "class='odd gradeX'";}else{echo "class='even gradeC'";}?>>
                                            <td class="center"><?php echo $i;?></td>
                                            <td><img  style="width:150px ;height:200px;" src="../<?php echo $gambar?>"   ></td>
                                            <td><?php echo $nim;?></td>
                                            <td><?php echo $nama;?></td>
                                            <td><?php echo $alamat;?></td>
                                            <td>
                                                    
                                              <?/*if((isset($_GET['kon'])==1)&&($_GET['jenis']==2)&&($obj->cekPesertaW($id_peserta))){
                                                ?><a  href="index.php?page=2&&idps=<?echo $id_peserta;?>" class="btn btn-default" ><i class="fa icon-ok fa-fw"></i></a> |
                                              <?}else if((isset($_GET['kon'])==1)&&($_GET['jenis']==3)&&($obj->cekPesertaT($id_peserta))){
                                                ?><a  href="index.php?page=3&&idps=<?echo $id_peserta;?>" class="btn btn-default" ><i class="fa icon-ok fa-fw"></i></a> |<?
                                              }else if((isset($_GET['kon'])==1)&&($_GET['jenis']==4)&&($obj->cekPesertaK($id_peserta))){
                                                ?><a  href="index.php?page=4&&idps=<?echo $id_peserta;?>" class="btn btn-default" ><i class="fa icon-ok fa-fw"></i></a> |<?}*/?>
                                              
                                                  <a href="#myModal<?echo $id_peserta;?>" role="button" class="btn  btn-default" data-toggle="modal"><i class="fa fa-search fa-fw "></i></a>
                                                <a  href="index.php?page=14&idps=<?echo $id_peserta;?>" class="btn btn-default" ><i class="fa icon-edit fa-fw"></i></a>
                                                <a  href="index.php?page=1&hapus=<?echo $id_peserta;?>" onclick="return confirm('Apakah anda ingin menghapus?');" class="btn btn-default" ><i class="fa icon-remove fa-fw"></i></a>
                                                  </div>     
                                            </td>
                                        </tr>
                                        
                                                     <?$tampil=$obj->viewPesertabyId($id_peserta);
                                                        extract($tampil);?>
                                                    <!-- Modal -->
                                                    <div id="myModal<?echo $id_peserta;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 id="myModalLabel">Data Tes Kepribadian</h3>
                                                      </div>
                                                      <div class="modal-body">
                                                          <label class="control-label" for="lastname">ID          : <?echo $id_peserta;?></label>
                                                          <label class="control-label" for="lastname">NIM         : <?echo $nim;?></label>
                                                          <label class="control-label" for="lastname">Nama        : <?echo $nama;?></label>
                                                          <label class="control-label" for="lastname">alamat      : <?echo $alamat;?></label>
                                                          <label class="control-label" for="lastname">No telp     : <?echo $no_telp;?></label>
                                                          <label class="control-label" for="lastname">Email       : <?echo $email;?></label>
                                                          <label class="control-label" for="lastname">Motivasi    : <?echo $motivasi;?></label>
                                                          <label class="control-label" for="lastname">status      : <?echo $status;?></label>
                                                          <a href="index.php?page=14&idtk=<?echo $id_test;?>" class="btn btn-primary">Edit Data Peserta</a>
                                                          <br/>
                                                          <hr/>
                                                           <label class="control-label" for="lastname">Data Wawancara</label>
                                                          <?if(($obj->cekPesertaW($id_peserta))==true){ //kondisi jika dia sudah wawancara
                                                            $data=$obj->viewWawancarabyIdPeserta($id_peserta);
                                                            extract($data);
                                                           $jawab=explode("+", $jawaban);
                                                           $no=1;
                                                           foreach ($jawab as  $value) {
                                                              echo "<label class='control-label' for='lastname'>Jawaban ".$no++."     : ".$value."</label> ";
                                                           }?>
                                                              <label class="control-label" for="lastname">PJ           : <?echo $obj->viewPanitiabyId($id_panitia);?></label>
                                                              <a href="index.php?page=24&idtk=<?echo $id_wawancara;?>" class="btn btn-primary">Edit Data Wawancara</a>   
                                                          <?}else{
                                                              echo "<div style='color:red'>Data kosong!</div>";
                                                          }?>
                                                          <hr/>
                                                          <label class="control-label" for="lastname">Data Tes Kepribadian</label>
                                                          <?if(($obj->cekPesertaT($id_peserta))==true){ 
                                                            $data=$obj->viewTesbyIdPeserta($id_peserta);
                                                            extract($data);
                                                           ?>
                                                          <label class="control-label" for="lastname">Jumlah a    : <?echo $jumlah_a;?></label>
                                                          <label class="control-label" for="lastname">Jumlah b    : <?echo $jumlah_b;?></label>
                                                          <label class="control-label" for="lastname">Jumlah c    : <?echo $jumlah_c;?></label>
                                                          <label class="control-label" for="lastname">Jumlah d    : <?echo $jumlah_d;?></label>
                                                          <label class="control-label" for="lastname">Kesimpulan  : <?echo $hasil;?></label>
                                                          <label class="control-label" for="lastname">PJ          : <?echo $obj->viewPanitiabyId($id_panitia);?></label>
                                                          <a href="index.php?page=34&idtk=<?echo $id_test;?>" class="btn btn-primary">Edit Data Tes Kepribadian</a>
                                                          <?}else{
                                                            echo "<div style='color:red'>Data kosong!</div>";
                                                          }?>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                      </div>
                                                    </div>

                                                  </div>          
                                            </td>
                                        </tr>
                                        

                                        <?}?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
              </div> <!-- /plan-container -->
        
        
          </div> <!-- /pricing-plans -->
        </div>
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->         
        
        </div> <!-- /span12 -->       
          
          
        </div> <!-- /row -->