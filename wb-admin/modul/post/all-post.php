<?php
include_once("../class/posting.php");
$target="";


if(isset($_POST['save'])){
if($_POST['fstatus']=='on'){
    $status=1;  
}else{
  $status=0;
}

$target2 = NULL;
                $uploadOk = 1;
                if(isset($_FILES['ffoto']) && is_uploaded_file($_FILES['ffoto']['tmp_name'])) //cek jika telah upload file 
                {
                    $msg = $_FILES['ffoto'];
                    $filename  = basename($_FILES['ffoto']['name']);
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                    $source = $_FILES['ffoto']['tmp_name'];                    
                    if($_FILES['ffoto']['size'] > 5000000) //ukuran max file
                    {
                        $uploadOk = 0;
                    }
                    else if($extension != "jpg" && $extension != "png" && $extension != "jpeg") //format file yang diperbolehkan
                    {
                        $uploadOk = 0;
                    }
                    else if($uploadOk == 0)
                    {
                        echo "<br>File, tidak dapat diupload!";
                    }
                    else
                    {
                        do //membuat nama file baru dari file upload
                        {
                            $new = rand(00000,99999);
                            $newfilename=$new.".".$extension;
                            $dir = "../IMG/post";
                            if(!file_exists($dir))
                            {
                                mkdir($dir, 0777, true); //0777 default recursion, true flag
                            }
                            $target = $dir."/".$newfilename;
                        }while(file_exists($target)); 
                        move_uploaded_file($source, $target);
                    }
                    $target2=substr($target, 3);
            }

    if($objposting->addPosting($_POST['fjudul'],$_POST['fkonten'],$target2,$_POST['fkategori'],$_POST['ftanggal'],$status)){?>
        <div class="alert alert-block alert-success">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>
                      <p>
                        <strong>
                          <i class="ace-icon fa fa-check"></i>
                          Well done!
                        </strong>
                        You successfully Added that posting.
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
                      The Posting can't Save Database!
                      <br />
                    </div>

        <?php
    }
}
if(isset($_POST['edit'])){
if(isset($_POST['fstatus'])){
 if($_POST['fstatus']=="on") {
        $status=1;  
    }else{
      $status=0;
    }
}
   $target2 = $_POST['foto_lama']; 
  if(!$_FILES['ffoto']){
      $target2 = $_POST['foto_lama']; 
  }else{
             $uploadOk = 1;
                if(isset($_FILES['ffoto']) && is_uploaded_file($_FILES['ffoto']['tmp_name'])) //cek jika telah upload file 
                {
                    $msg = $_FILES['ffoto'];
                    $filename  = basename($_FILES['ffoto']['name']);
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                    $source = $_FILES['ffoto']['tmp_name'];                    
                    if($_FILES['ffoto']['size'] > 5000000) //ukuran max file
                    {
                        $uploadOk = 0;
                    }
                    else if($extension != "jpg" && $extension != "png" && $extension != "jpeg") //format file yang diperbolehkan
                    {
                        $uploadOk = 0;
                    }
                    else if($uploadOk == 0)
                    {
                        echo "<br>File, tidak dapat diupload!";
                    }
                    else
                    {
                        do //membuat nama file baru dari file upload
                        {
                            $new = rand(00000,99999);
                            $newfilename=$new.".".$extension;
                            $dir = "../IMG/post";
                            if(!file_exists($dir))
                            {
                                mkdir($dir, 0777, true); //0777 default recursion, true flag
                            }
                            $target = $dir."/".$newfilename;
                        }while(file_exists($target)); 
                        move_uploaded_file($source, $target);
                    }
                    $target2=substr($target, 3);
            }
  }
    if($objposting->editPosting($_POST['fjudul'],$_POST['fkonten'],$target2,$_POST['fkategori'],$_POST['ftanggal'],$status,$_POST['fid'])){?>
        <div class="alert alert-block alert-success">
                      <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                      </button>
                      <p>
                        <strong>
                          <i class="ace-icon fa fa-check"></i>
                          Well done!
                        </strong>
                        You successfully Updated Post.
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
                      The can't Update Database Post!
                      <br />
                    </div>

        <?php
    }
  
}
if(isset($_GET['id'])){
    if($objposting->hapusposting($_GET['id'])){
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
                        You successfully delete post.
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
                      The Post can't delete, please check the id category!
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
                                            <th width="5%">No</th>
                                            <th width="15%">Title</th>
                                            <th width="35%">Content</th>
                                            <th width="10%">Category</th>
                                            <th width="15%">Time</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                            $no = 1;
                                            $i=0;
                                            foreach($objposting->viewPosting() as $value){
                                                extract($value);
                                                $i++;
                                        ?>
                                        <tr <?if($i%2==0){echo "class='odd gradeX'";}else{echo "class='even gradeC'";}?>>
                                            <td class="center"><?php echo $i;?></td>
                                              <td><?php echo $judul;?></td>
                                              <td><?php echo substr($isi,1,100)."...";?></td>
                                              <td><?php echo $objposting->viewKategoribyId($id_kategori);?></td>
                                              <td><?php echo $waktu;?></td>
                                              <td><?php echo $objposting->cekStatus($status);?></td>
                                 <td style="text-align:center"><div class="hidden-sm hidden-xs btn-group">
                      <a href="index.php?page=add-post&&fid=<?php echo $id_posting;?>" class="tooltip-success btn btn-xs btn-success" data-rel="tooltip" title="Edit">
                      <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </a>

                    <a  href="#my-modal<?php echo $id_posting;?>" class="tooltip-info btn btn-xs btn-info" data-rel="tooltip" title="View" data-toggle="modal">                      
                      <i class="ace-icon fa  fa-search-plus bigger-120"></i>
                    </a>
                    <a href="?page=all-post&&id=<?php echo $id_posting;?>" class="btn btn-xs btn-danger" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this category?');">
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
                                    <a  href="#my-modal<?php echo $id_posting;?>" class="tooltip-info" data-rel="tooltip" title="View" data-toggle="modal">
                                      <span class="blue">
                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="index.php?page=add-post&&fid=<?php echo $id_posting;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                      <span class="green">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                      </span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="?page=all-post&&id=<?php echo $id_posting;?>" class="tooltip-error" data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure delete this category?');">
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
<div id="my-modal<?php echo $id_posting;?>" class="modal fade" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="smaller lighter blue no-margin">Detail Category</h3>
                      </div>

                      <div class="modal-body">
                          <?php
                          echo "<img style='width:70%;' src='../".$file."'/>";
                          echo "<br/>ID Posting        : ".$id_posting;
                          echo "<br/>Title             : ".$judul;
                          echo "<br/>Content           : ".$isi;
                          echo "<br/>Last Modified     : ".$waktu;
                          echo "<br/>Last Modified     : ".$objposting->cekStatus($status);
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
        
        
        
        