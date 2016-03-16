<?php

include "../class/slider.php";

$data=$slider->viewslider();
    if(isset($_POST['fslider'])){
    
        $obj = new slider();   
        $data=$obj->viewslider();

        //Upload
        $namafolder="../IMG/slider"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png")
            {           
                $gamb = $new . basename($_FILES['ffoto']['name']);
                $gambar=$namafolder.'/'.$gamb;     
                $gamb = 'IMG/slider/'.$new . basename($_FILES['ffoto']['name']);  
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)) {
                    $target="";
                    if($obj->addslider($_POST['fjudul'],$gamb,$_POST['fket'])==true)
                    {
                        ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Berhasil menambahkan slider !
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
                              Gagal menambahkan gambar!
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

    include "form-slider.php";
?>

