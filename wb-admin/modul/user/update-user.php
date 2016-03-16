<?php

include "../class/user.php";
$data=$user->viewAdmin();
    
    if(isset($_POST['fdaftar'])){
        
        $obj = new user();  

         //Upload
        $target="";
        $namafolder="IMG/user"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            if(empty($jenis_gambar))
            {
                $enkrip=md5($_POST['fpass']);
                if($obj->editAdmin($_POST['fnama'],$_POST['gbr'],$_POST['fusername'],$enkrip,$_POST['fid'])==true)
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
                        
                        <?php                }
            }
            else
            {

            unlink($_POST['gbr']);   
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png")
            {           
                $gamb = $new . basename($_FILES['ffoto']['name']);
                $gambar=$namafolder.'/'.$gamb;       
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)) {
        
        if($obj->editAdmin($_POST['fnama'],$gambar,$_POST['fusername'],$enkrip,$_POST['fid'])==true)
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
    include "form-user.php";    
?>

