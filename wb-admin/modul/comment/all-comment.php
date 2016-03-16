<?php
include_once("../class/komentar.php");
if(isset($_POST['save-edit'])){
    if($objkomentar->editKomentar($_POST['fkomentar'],$_POST['id_komentar'])){
        ?>
        <div class="alert alert-block alert-success">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>
                      <p>
                        <strong>
                          <i class="ace-icon fa fa-check"></i>
                          Well done!
                        </strong>
                        You successfully Edit Comment.
                      </p>
                    </div>

        <?php
    }else{
        ?>
        <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>

                      <strong>
                        <i class="ace-icon fa fa-times"></i>
                        Oh snap!
                      </strong>
                      The Category can't Save Database!
                      <br />
                    </div>

        <?php
    }
}
if(isset($_POST['edit'])){
  echo $_POST['fketerangan'],$_POST['id_berita'];
    if($objkomentar->replyKomentar($_POST['fketerangan'],$_POST['id_berita'])){
        ?>
        <div class="alert alert-block alert-success">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>
                      <p>
                        <strong>
                          <i class="ace-icon fa fa-check"></i>
                          Well done!
                        </strong>
                        You successfully Reply that category.
                      </p>
                    </div>

        <?php
    }else{
        ?>
        <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>

                      <strong>
                        <i class="ace-icon fa fa-times"></i>
                        Oh snap!
                      </strong>
                      The Category can't Update Database!
                      <br />
                    </div>

        <?php
    }
}
if(isset($_GET['id'])){
    if($objkomentar->hapusKomentar($_GET['id'])){
        ?>
        <div class="alert alert-block alert-success">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>
                      <p>
                        <strong>
                          <i class="ace-icon fa fa-check"></i>
                          Well done!
                        </strong>
                        You successfully delete Comment.
                      </p>
                    </div>

        <?php
    }else{
        ?>
        <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>

                      <strong>
                        <i class="ace-icon fa fa-times"></i>
                        Oh snap!
                      </strong>
                      The Category can't delete, please check the id category!
                      <br />
                    </div>

        <?php
    }
}
?>
            
              <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Komentar</th>
                                            <th>Asal Posting</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                            $no = 1;
                                            $i=0;
                                            foreach($objkomentar->viewKomentarUser() as $value){
                                                extract($value);
                                                extract($objkomentar->viewBeritabyId($id_berita));
                                                $i++;
                                        ?>
                                        <tr <?if($i%2==0){echo "class='odd gradeX'";}else{echo "class='even gradeC'";}?>>
                                            <td class="center"><?php echo $i;?></td>
                                            <td><?php echo $nama;?></td>
                                            <td><?php echo $komentar;?></td>
                                            <td><?php echo $judul;?></td>
                     <td style="text-align:center"><div class="hidden-sm hidden-xs btn-group">
                      <a href="index.php?page=add-comment&&fid=<?php echo $id_komentar;?>" class="tooltip-success btn btn-xs btn-success" data-rel="tooltip" title="Reply">
                      <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </a>

                    <a  href="#my-modal<?php echo $id_komentar;?>" class="tooltip-info btn btn-xs btn-info" data-rel="tooltip" title="View" data-toggle="modal">                      
                      <i class="ace-icon fa  fa-search-plus bigger-120"></i>
                    </a>
                    <a href="?page=all-comment&&id=<?php echo $id_komentar;?>" class="btn btn-xs btn-danger" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this category?');">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                    </a>

                            </div>

                            <div class="hidden-md hidden-lg">
                              <div class="inline pos-rel">
                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                  <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                  <li>
                                    <a  href="#my-modal<?php echo $id_komentar;?>" class="tooltip-info" data-rel="tooltip" title="View" data-toggle="modal">
                                      <span class="blue">
                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="index.php?page=add-comment&&fid=<?php echo $id_komentar;?>" class="tooltip-success" data-rel="tooltip" title="Reply">
                                      <span class="green">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="?page=all-comment&&id=<?php echo $id_komentar;?>" class="tooltip-error" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this category?');">
                                      <span class="red">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div></td>
                                        </tr>
<!--
  modal view category
-->                  
<div id="my-modal<?php echo $id_komentar;?>" class="modal fade" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="smaller lighter blue no-margin">Detail Comments</h3>
                      </div>

                      <div class="modal-body">
                        <div class="row">
                          <div class="col-xs-12 col-sm-5">
                            <div class="space"></div>
                            <?php
                          echo "<img style='width:70%;' src='../".$file."'/>";
                          echo "<br/>Title             : ".$judul;
                          echo "<br/>Last Modified     : ".$waktu;
                            ?>
                          </div>

                          <div class="col-xs-12 col-sm-7">
                          <?php
                          foreach ($objkomentar->viewKomentarbyIdBerita($id_posting) as $value) {
                          extract($value);
                          if($status==3){$style= "right";
                          }else{$style="left";}
                          echo "<div style='text-align:".$style.";'><br/>".$nama;
                          echo "(".$email.")";
                          echo "<br/>Comment    : ".$komentar;
                          ?>
                          <br/>
                            <a href="?page=edit-comment&&id=<?php echo $id_komentar;?>" class="tooltip-info" data-rel="tooltip" title="Edit">
                                      <span class="green">
                                        Edit
                                      </span>
                                    </a>|
                            <a href="?page=all-comment&&id=<?php echo $id_komentar;?>" class="tooltip-error" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this category?');">
                                      <span class="red">
                                        hapus
                                      </span>
                                    </a>
                          <?php
                          echo "</div>";
                        }
                          ?>

                        </div>
                      </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Close
                        </button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>                      
                                        
                                        <?}?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
        
        
        
        