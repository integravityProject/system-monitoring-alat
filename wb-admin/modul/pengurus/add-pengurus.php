<?php

include "../class/pengurus.php";

$data=$pengurus->viewpengurus();
    if(isset($_POST['fpengurus'])){
    
        $obj = new pengurus();   
        $data=$obj->viewpengurus();

        //Upload
        $namafolder="../IMG/pengurus"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png")
            {           
                $gamb = $new . basename($_FILES['ffoto']['name']);
                $nama = 'IMG/pengurus/'.$gamb;
                $gambar=$namafolder.'/'.$gamb;       
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)) {
                    if($pengurus->addpengurus($_POST['fnama'],$_POST['fnim'],$nama,$_POST['fjab'],$_POST['fang'])==true)
                    {
                       ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Berhasil menambahkan pengurus !
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
                              Gagal menambahkan pengurus !
                            </strong>
                          </p>
                        </div>
                        
                        <?php
                    }
                    
                }
            }
        }
?>
    
<?php
    $type="add";

    include "form-pengurus.php";
?>

