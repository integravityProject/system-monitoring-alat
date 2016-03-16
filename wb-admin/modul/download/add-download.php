<?php

include "../class/download.php";

$data=$download->viewdownload();
    if(isset($_POST['fdownload'])){
    
        $obj = new download();   
        $data=$obj->viewdownload();

        //Upload
        $namafolder="../IMG/download"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png"||isset($_POST['upload']))
            {           
              /*
                //upload file
                $tipe = $_FILES['ffile']['type'];
                
                $nama = $_FILES['ffile']['name'];
                $file_ext   = strtolower(end(explode('.', $nama)));
                 
                $size = $_FILES['ffile']['size'];
                $nama= $new.basename($nama);
                $dir  = '../file/'.$nama;
                $nama= 'file/'.basename($nama);
                
                $tgl=date("Y-m-d");
                //end file
                */

                $gamb = $new . basename($_FILES['ffoto']['name']);
                
                $gambar=$namafolder.'/'.$gamb;       
                $gamb = 'IMG/download/'.$gamb;
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)||move_uploaded_file($_FILES['ffile']['tmp_name'], $dir)) {
                    $target="";
                    if($obj->adddownload($_POST['fjudul'],$gamb,$_POST['ffile'])==true)
                    {
                       ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Berhasil menambahkan download!
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
                              Gagal menambahkan download !
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

    include "form-download.php";
?>

