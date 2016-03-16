<?php

include "../class/subsistem.php";

$data=$subsistem->viewsubsistem();
    if(isset($_POST['fsubsistem'])){
    
        $obj = new subsistem();   
        $data=$obj->viewsubsistem();

        //Upload
        $namafolder="../IMG/subsistem"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png")
            {           
                $gamb = $new . basename($_FILES['ffoto']['name']);
                $gambar=$namafolder.'/'.$gamb;     
                $gamb = 'IMG/subsistem/'.$new . basename($_FILES['ffoto']['name']);  
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)) {
                    $target="";
                    if($obj->addsubsistem($_POST['fjudul'],$gamb,$_POST['fket'])==true)
                    {
                        ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Berhasil menambahkan subsistem !
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
    include "form-subsistem.php";
?>

