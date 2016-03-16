<?php
	include "../class/pengurus.php";

	$data=$pengurus->viewpengurus();


?>

<?php


if(isset($_GET['id'])){

  foreach ($data as $d ) {
    if($d['id_pengurus']==$_GET['id'])
    {
    unlink('../'.$d['foto']);
        
    if($pengurus->hapuspengurus($_GET['id'])){
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
                        You successfully delete that pengurus.
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
                      The pengurus can't delete, please check the id pengurus!
                      <br />
                    </div>

        <?php
    }
  }
}
}
?>
            
              <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr >
                                        	<th>No</th>
                                           <th>Nama</th>
											<th>NIM</th>
											<th>Foto</th>
											<th>Jabatan</th>
											<th>Aksi</th>	
		                                </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                            $no = 1;
                                            $i=0;
                                            foreach ($data as $d) 

											 {
                        if(isset($Get['id']))
                        {
                          if($_GET['id']==$d['id_pengurus']){
                                                unlink('../'.$d['foto']);
                                              }
                        }

											 	$i++;
                                        ?>
                                        <tr <?if($i%2==0){echo "class='odd gradeX'";}else{echo "class='even gradeC'";}?>>
                                            <td class="center"><?php echo $i;?></td>
											<td><?=$d['nama']?></td>
											<td><?=$d['nim']?></td>
											<td><img width="150px" src="../<?=$d['foto']?>"> </td>
											<td><?=$d['jabatan']?></td>
											
											
                                 <td style="text-align:center"><div class="hidden-sm hidden-xs btn-group">
                      <a href="index.php?page=edit-pengurus&&id=<?php echo $d['id_pengurus'];?>" class="tooltip-success btn btn-xs btn-success" data-rel="tooltip" title="Edit">
                      <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </a>

                    <a  href="#my-modal<?php echo $d['id_pengurus'];?>" class="tooltip-info btn btn-xs btn-info" data-rel="tooltip" title="View" data-toggle="modal">                      
                      <i class="ace-icon fa  fa-search-plus bigger-120"></i>
                    </a>
                    <a href="?page=all-pengurus&&id=<?php echo $d['id_pengurus'];?>" class="btn btn-xs btn-danger" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this pengurus?');">
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
                                    <a  href="#my-modal<?php echo $id_pengurus;?>" class="tooltip-info" data-rel="tooltip" title="View" data-toggle="modal">
                                      <span class="blue">
                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="index.php?page=add-pengurus&&fid=<?php echo $id_pengurus;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                      <span class="green">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="?page=all-pengurus&&id=<?php echo $id_pengurus;?>" class="tooltip-error" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this pengurus?');">
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
  modal view pengurus
-->                  
<div id="my-modal<?php echo $d['id_pengurus'];?>" class="modal fade" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="smaller lighter blue no-margin">Detail pengurus</h3>
                      </div>

                      <div class="modal-body">
                          <?php
                          echo "ID pengurus                   : ".$d['id_pengurus'];
                          echo "<br/>Nama            : ".$d['nama'];
                          echo "<br/>Nim            : ".$d['nim'];
                          echo "<br/>Foto     : "?> <img width="300px" src="../<?php echo $d['foto'];?>">
                          <?php
                          echo "<br/>Jabatan   : ".$d['jabatan'];
                          
                          ?>
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
        
        
        
        	
