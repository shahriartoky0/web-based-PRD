<?php
$localhost = '127.0.0.1';
$username= 'root';
$password = '';
$dbname = 'lab';

function getconnection ()
{
       global $localhost;
       global  $username;
       global $password ;
       global $dbname ;
       return mysqli_connect($localhost,$username,$password,$dbname);
}

?>