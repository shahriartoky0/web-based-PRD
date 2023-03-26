<?php
if(isset($_REQUEST['submit']))
{   session_start();
    //including the php files 
    require_once "../models/user_model.php";
    require_once "../models/db.php";

$username= trim($_REQUEST['name']);
$password= trim($_REQUEST['password']);

if ($username=='' || $password== '')
{
    $_SESSION['msg'] = 'Any Field can not be empty!!' ; 
    header("location:../views/login.php");

}
else{
/* if (trim($username) == 'Khalid' && trim($password)== "1234")
{
    setcookie('flag',true,time()+300,'/')   ; 
    header("location:dashboard.php");
} */

$status=auth($username,$password);
if ($status)
{   //no use 
    $user=['name'=>$username, 'password' => $password];
    $_SESSION['email_id']= check_mail($user);
    //no use 
    setcookie('flag',true,time()+600,'/')   ; 
    header("location:../views/dashboard.php");
}
else {
    echo "Wrong username";
    
}



}
}
else 
{
    echo "invalid user";
}
?>