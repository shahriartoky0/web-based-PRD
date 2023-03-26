<?php
require_once "db.php";
//adding new user to the database
function addUser($user)
{
    $con= getconnection();
    $sql = "insert into user values('','{$user['username']}','{$user['email']}','{$user['password']}')";
    $status = mysqli_query($con,$sql);
    return $status;
}
function auth($username, $password)
{
    $con= getconnection();
    $sql = "select * from user where username= '{$username}' and password='{$password}'";
    $status = mysqli_query($con,$sql);
    $row= mysqli_num_rows($status);
    if ($row==1)
    {
        return true;
    }
    else 
    {
        return false;
    }

}
//cheking if there is a user already exists or not with email
function check ($user)
{
    $con = getconnection();
    $sql = "select * from user where email= '{$user['email']}'";
    $status = mysqli_query($con,$sql);
    $row = mysqli_num_rows($status);
    if ($row== 1)
    {
        return true;
    }
    else 
    {
        return false;
    }

}
function check_mail($user)
{   $con = getconnection();
    $sql = "select email from user where username= '{$user['name']}' and password = '{$user['password']}'";
    $status = mysqli_query($con,$sql);
    $row= mysqli_fetch_assoc($status);
    return $row['email'];

}

?>