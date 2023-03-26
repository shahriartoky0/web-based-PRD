<?php
if(isset($_POST['submit'])) {
    session_start();
    require_once "../models/user_model.php";
    require_once "../models/db.php";
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if($username=='' || $password=='' || $email=='')
    {   
        $_SESSION['msg'] = 'Any Field can not be empty!!' ; 
        header("location:../views/signin.php");

    }
    else 
    {   

        $con= getconnection();
        $user = ['username'=>$username,'email'=>$email,'password'=>$password];
        $check= check($user);
        if(!$check)
        {
        addUser($user);
        $_SESSION['success'] = 'SIGNIN SUCCESSFULL' ;
        header("location:../views/login.php");
        }
        else 
        {
             $_SESSION['msg'] = 'User Already Exists!!' ; 
             header("location:../views/signin.php");

        }
    }

}

?>