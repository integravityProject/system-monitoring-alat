<?php

include "../class/user.php";
$data=$user->viewAdmin();
    if(isset($_POST['fdaftar'])){
   
      foreach ($data as $d) {
                       
        if($_POST['fusername']==$d['username'])
             {
                echo $d['username']; 
            echo  "<script>alert('Username Sudah Ada');</script>";
             }
        }
        $obj = new user();   
        $data=$obj->viewAdmin();

        //Upload
        $namafolder="../IMG/user"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png")
            {           
                $gamb = $new . basename($_FILES['ffoto']['name']);
                $gambar=$namafolder.'/'.$gamb;       
                $gamb = 'IMG/user/'.$new . basename($_FILES['ffoto']['name']);
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)) {
                    $target="";
                    $enkrip=md5($_POST['fpass']);
                    if($obj->addAdmin($_POST['fnama'],$gamb,$_POST['fusername'],$enkrip)==true)
                    {
                        ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Admin baru telah ditambahkan !
                            </strong>
                            Isi kembali form untuk membuat admin yang baru
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
                              Admin gagal ditambahkan !
                            </strong>
                            Periksa kembali isi 
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

    include "form-user.php";
?>

