<?php
setcookie('flag',true,time()-1,'/'); 
header("location:../views/login.php");
?>