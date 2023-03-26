<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <fieldset align='center'>
        <legend>

            <h2>
                Login Here
            </h2>
        </legend>
  
    <?php
    session_start();
    if(isset($_SESSION['success']))
    {
        echo  "<small>{$_SESSION['success']}</small>";
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['msg']))
    {
        echo  "<small> {$_SESSION['msg']}</small>";
        unset($_SESSION['msg']);
        
    }

    ?>
    <form action="../controllers/login-check.php">
        <table align='center'>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>
                Password :
            </td>
            <td>
                <input type="password" name="password" id="">
            </td>
        </tr>
        <tr>
            <td colspan='2' align='center'>
                <input type="submit" name="submit" value='Login' id="">
            </td>
        </tr>


        </table>
        

    </form> 
    <br>  
    New here ? Please <a href="signin.php">Sign In </a> 

    </fieldset>
</body>
</html>