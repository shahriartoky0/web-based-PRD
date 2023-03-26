<?php
if(isset($_COOKIE['flag']))
{   session_start();
    $msg='';
    $feat='';
   if(isset($_SESSION['feature']))
   {
    $feat=$_SESSION['feature'];
   }
    setcookie('flag',true,time()+300,'/')   ; 
    if(isset($_GET['msg'])){
        if($_GET['msg']== 'success')
        {
            $msg= "Specifications for $feat is uploaded successfully ";
           
        }

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>specs</title>
</head>
<body>
    <form action="../controllers/spec-handle.php" enctype="multipart/form-data" method="POST">
        <table align="center">
        <tr>
                <td>
                    Feature Name: 
                </td>
                <td>
                    <input type="text" name="feature" id="">
                </td>
            </tr>
        </table><br><br>
        <?php
                
                if (isset($_SESSION['msg']))
                {
                    echo  "<small> {$_SESSION['msg']}</small>";
                    unset($_SESSION['msg']);
                    
                }
        ?>
        <table align="center" border=1px>
            
        <tr>
            <th>
                Phase
            </th>
       
            <th>
                Specification
            </th>
        
            <th>
                Screen Defination 
            </th>
        
            <th>
                User Story 
            </th>
       
            <th>
                Acceptence Criteria
            </th>
       
            <th>
                UI Screens 
            </th>
      
            <th>
                Tags
            </th>
        </tr>
        <tr>
            <td>
                <textarea type="text" name="phase" ></textarea>
            </td>
            <td>
                <textarea type="text" name="specification" ></textarea>
            </td>
            <td>
                <textarea type="text" name="screen_defination" ></textarea>
            </td>
            <td>
                <textarea type="text" name="user_story" ></textarea>
            </td>
            <td>
                <textarea type="text" name="acceptance_criteria" ></textarea>
            </td>
            <td>
                <input type="file" name="ui_screens" ></input>
            </td>
            </td>
            <td>
                <textarea type="text" name="tags" ></textarea>
            </td>
        </tr>



        </table>
        <p align="center">

            <input type="submit" name="submit" id="">
        </p>

    </form>
    <h3><?php echo  $msg;
    ?></h3>
<p align='center'>

    <br><br><br>
    <a href="../views/dashboard.php">Back</a>
    <br><br>
    <a href="../controllers/logout.php">Logout</a>
</p>
    
</body>
</html>





<?php

}
else {
    echo "invalid request";
}

?>
