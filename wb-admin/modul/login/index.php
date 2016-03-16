<?php
include_once '../includes/config.php';
    $config = new Config();
    $db = $config->getConnection(); 
if(isset($_POST['loginadmin'])){
	include_once '../includes/login.php';
    $login = new Login($db);
    $login->userid = $_POST['fusername2'];
    $login->passid = md5($_POST['fpassword2']);

         if($login->login()){
              echo "<script>location.href='../admin/index.php?page=0&id=$data'</script>";  
          }else{
              echo "<script>alert('Maaf kombinasi Username dan Password yang anda masukkan salah, silahkan coba lagi!')</script>";
             echo "<script>location.href='index.php'</script>";        
          }

           }
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="forms">
	
	  
	  <form action="#" id="login1" method="post">
	      <h1>Login Administrator</h1>
	      <div class="input-field">
	        <label for="username">Username</label>
	        <input type="text" name="fusername2" placeholder="Masukkan Username"  required />
	        <label for="password">Password</label> 
	        <input type="password" name="fpassword2" placeholder="Masukkan Password" required/>
	        <input type="submit" name="loginadmin" value="Login" class="button"/>
	      </div>
	  </form>
	  
</div>


</body>
</html>