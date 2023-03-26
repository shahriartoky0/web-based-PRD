<?php
if(isset($_COOKIE['flag']))
{  require_once "../models/db.php";
    require_once "../models/data_model.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <fieldset align='center'>
        <legend>

            <h1>
                Welcome Business Analyst 
            </h1>
        </legend>
   
    <a href="specs.php">Make specifications</a><br><br>
    <?php
    $con = getconnection();
    $sql = "select * from data ORDER BY feature";
    $status = mysqli_query($con,$sql);
    //$result = mysqli_fetch_assoc($status) ;
    //print_r($result);
    while($row = mysqli_fetch_assoc($status)){
        echo "</br></br>";
        ?>
        <b><u> Feature Name </u>:</b>
        <?php

        echo $row['feature'];
        echo "</br>";
        echo "</br>";
       //}
    ?>
    <table border=1px align='center'>
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
                UI Screen
            </th>
      
            <th>
                Tags
            </th>
        </tr>
        <tr>
            <td>
                <?php
                echo $row['phase'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['specification'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['user_story'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['screen_defination'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['acceptance_criteria'];
    
                ?>
            </td>
           
           <!-- 
           adding uiscreens start
            -->
            <td>
                <img height='150px' width='150px' src="../uploads/<?php 
                   echo  $row['ui_screens'];
               

                ?>
                " alt="">
            </td>

           <!-- 
           adding uiscreens end 
            -->
            <td>
                <?php
                echo $row['tags'];
                //echo "</br></br>";
    
    
                ?>
            </td>
        </tr>
    </table>
    <?php
    }
    ?>
    <?php
    echo "</br></br>";
    ?>
    <a href="../controllers/logout.php">Logout</a>
    </fieldset>   
</body>
</html>






    <?php

}
else {
    echo "invalid request";
}

?>