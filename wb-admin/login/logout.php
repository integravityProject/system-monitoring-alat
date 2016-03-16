<?php
include("../../class/login.php");
$objlogin->logout();
$objlogin->redirect('index.php');
?>