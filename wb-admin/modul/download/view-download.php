<?php
	include "../class/download.php";

	$data=$download->viewdownload();


?>


<?php


if(isset($_GET['id'])){

	foreach ($data as $d ) {
		if($d['id_download']==$_GET['id'])
		{
		unlink('../'.$d['file']);
		unlink('../'.$d['gambar']);
        
    if($download->hapusdownload($_GET['id'])){

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
                        You successfully delete that download.
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
                      The download can't delete, please check the id download!
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
                                           <th>Judul</th>
											<th>Foto</th>
											<th>File</th>
											<th>Aksi</th>	
		                                </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                            $no = 1;
                                            $i=0;
                                            foreach ($data as $d) 
											 {
											 	$i++;
                                        ?>
                                        <tr <?if($i%2==0){echo "class='odd gradeX'";}else{echo "class='even gradeC'";}?>>
                                            <td class="center"><?php echo $i;?></td>
												<td><?=$d['judul']?></td>
												<td><img width="150px" src="../<?=$d['gambar']?>"> </td>
												<td><?=$d['file']?></td>
											
											
                                 <td style="text-align:center"><div class="hidden-sm hidden-xs btn-group">
                      <a href="index.php?page=edit-download&&id=<?php echo $d['id_download'];?>" class="tooltip-success btn btn-xs btn-success" data-rel="tooltip" title="Edit">
                      <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </a>

                    <a  href="#my-modal<?php echo $d['id_download'];?>" class="tooltip-info btn btn-xs btn-info" data-rel="tooltip" title="View" data-toggle="modal">                      
                      <i class="ace-icon fa  fa-search-plus bigger-120"></i>
                    </a>
                    <a href="?page=all-download&&id=<?php echo $d['id_download'];?>" class="btn btn-xs btn-danger" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this download?');">
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
                                    <a  href="#my-modal<?php echo $id_download;?>" class="tooltip-info" data-rel="tooltip" title="View" data-toggle="modal">
                                      <span class="blue">
                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="index.php?page=add-download&&fid=<?php echo $id_download;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                      <span class="green">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="?page=all-download&&id=<?php echo $id_download;?>" class="tooltip-error" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this download?');">
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
  modal view download
-->                  
<div id="my-modal<?php echo $d['id_download'];?>" class="modal fade" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="smaller lighter blue no-margin">Detail download</h3>
                      </div>

                      <div class="modal-body">
                          <?php
                          echo "ID download                   : ".$d['id_download'];
                          echo "<br/>Judul            : ".$d['judul'];
                          echo "<br/>Gambar     : "?> <img width="300px" src="../<?php echo $d['gambar'];?>">
                          <?php
                          echo "<br/>Fille  : ".$d['file'];
                          
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
        
        
        
        	
