<?php

include "../class/subsistem.php";
$data=$subsistem->viewsubsistem();
    
    if(isset($_POST['fsubsistem'])){
        
        $obj = new subsistem();  

         //Upload
        $target="";
        $namafolder="../IMG/subsistem"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            if(empty($jenis_gambar))
            {
                if($obj->editsubsistem($_POST['fjudul'],$_POST['gbr'],$_POST['fket'],$_POST['fid'])==true)
                {
                    ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              subsistem berhasil diedit !
                            </strong>
                          </p>
                        </div>
                        
                        <?php         
                }else{
                    ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              subsistem Gagal diedit !
                            </strong>
                          </p>
                        </div>
                        
                        <?php
                }
            }
            else
            {

            unlink('../'.$_POST['gbr']);   
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png")
            {           
                $gamb = $new . basename($_FILES['ffoto']['name']);
                $gambar=$namafolder.'/'.$gamb;
                $gamb = 'IMG/subsistem/'.$new . basename($_FILES['ffoto']['name']);       
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)) {
        
        if($obj->editsubsistem($_POST['fjudul'],$gamb,$_POST['fket'],$_POST['fid'])==true)
        {
            ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Admin berhasil diedit !
                            </strong>
                          </p>
                        </div>
                        
                        <?php         
                
        }else{
            ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Admin Gagal diedit !
                            </strong>
                          </p>
                        </div>
                        
                        <?php
        }
        }
        }
        }

}
    

?>

<?php
    $type="edit";
    include "form-subsistem.php";    
?>

