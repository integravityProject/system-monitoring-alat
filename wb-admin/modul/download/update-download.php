<?php

include "../class/download.php";
$data=$download->viewdownload();
    
    if(isset($_POST['fdownload'])){
        
        $obj = new download();  

         //Upload
        $target="";
        $namafolder="../IMG/download"; //tempat menyimpan file
        $new = rand(00000,99999);
            $jenis_gambar=$_FILES['ffoto']['type'];
            $tipe = $_FILES['ffile']['type'];
                
            if(empty($jenis_gambar)&&empty($tipe))
            {
                if($obj->editdownload($_POST['fjudul'],$_POST['gbr'],$_POST['ffile'],$_POST['fid'])==true)
                {
                    
                    ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Download berhasil diedit !
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
                              Download gagal diedit !
                            </strong>
                          </p>
                        </div>
                        
                        <?php  
                }
            }

            else if(empty($jenis_gambar))
            {
                unlink('../'.$_POST['fil']) ; 
                
                //upload file
                
                $nama = $_FILES['ffile']['name'];
                $file_ext   = strtolower(end(explode('.', $nama)));
                 
                $size = $_FILES['ffile']['size'];
                $nama= $new.basename($nama);
                $dir  = '../file/'.$nama;
                $nama= 'file/'.basename($nama);
                
                $tgl=date("Y-m-d");
                //end file
                
                if (move_uploaded_file($_FILES['ffile']['tmp_name'], $dir)) {
        
                        
                        if($obj->editdownload($_POST['fjudul'],$_POST['gbr'],$_POST['ffile'],$_POST['fid'])==true)
                        {
                            
                    ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Download berhasil diedit !
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
                              Download gagal diedit !
                            </strong>
                          </p>
                        </div>
                        
                        <?php  
                            }
                        
                        
                            }
            }

            else if(empty($tipe))
            {
                unlink('../'.$_POST['gbr']); 
                
                            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png"||isset($_POST['upload']))
                        {           

                            $gamb = $new . basename($_FILES['ffoto']['name']);
                            $gambar=$namafolder.'/'.$gamb;       
                            $gamb = 'IMG/download/'.$new . basename($_FILES['ffoto']['name']);
             if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)) {
                    
                    if($obj->editdownload($_POST['fjudul'],$gamb,$_POST['file'],$_POST['fid'])==true)
                    {
                        
                    ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                             Download berhasil diedit !
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
                             Download gagal diedit !
                            </strong>
                          </p>
                        </div>
                        
                        <?php  
                    }
                    }
                    }


            }

            else
            {

            unlink('../'.$_POST['gbr']); 
            unlink('../'.$_POST['fil']) ; 
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/png"||isset($_POST['upload']))
            {           

                 //upload file
                
                $nama = $_FILES['ffile']['name'];
                $file_ext   = strtolower(end(explode('.', $nama)));
                 
                $size = $_FILES['ffile']['size'];
                $nama= $new.basename($nama);
                $dir  = '../file/'.$nama;
                $nama= 'file/'.basename($nama);
                
                $tgl=date("Y-m-d");
                //end file


                $gamb = $new . basename($_FILES['ffoto']['name']);
                $gambar=$namafolder.'/'.$gamb;       
                $gamb = 'IMG/download/'.$new . basename($_FILES['ffoto']['name']);
                if (move_uploaded_file($_FILES['ffoto']['tmp_name'], $gambar)||move_uploaded_file($_FILES['ffile']['tmp_name'], $dir)) {
        
        if($obj->editdownload($_POST['fjudul'],$gamb,$_POST['ffile'],$_POST['fid'])==true)
        {
           
                    ?>
                            <div class="alert alert-block alert-success">
                          <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                          </button>
                          <p>
                            <strong>
                              <i class="ace-icon fa fa-check"></i>
                              Download berhasil diedit !
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
                              Download diedit !
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
    include "form-download.php";    
?>

