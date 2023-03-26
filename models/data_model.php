<?php
require_once "db.php";

function addData ($user)
{
    $con= getconnection();
    $sql = "insert into data values ('','{$user['feature']}','{$user['phase']}','{$user['specification']}','{$user['screen_defination']}','{$user['user_story']}','{$user['acceptance_criteria']}','{$user['ui_screens']}','{$user['tags']}')";
    $status = mysqli_query($con, $sql);
    return $status;

}

?>