<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
	<fieldset align='center'>
		<legend>
			<h2>Sign In</h2>

		</legend>
	
    <?php
    //giving the error messeges
    session_start();
    if (isset($_SESSION['msg']))
    {
        echo  "<small> {$_SESSION['msg']}</small>";
        unset($_SESSION['msg']);
        
    }
    ?>
    	<form action="../controllers/signin_check.php" method="post">
			<table align='center'>
				<tr>
					<td>

						<label for="username">Username:</label>
					</td>
					<td>
						<input type="text" id="username" name="username">
					</td>
				</tr>
				<tr>
					<td>

						<label for="email">Email:</label>
					</td>
					<td>

						<input type="email" id="email" name="email">
					</td>
				</tr>
				<tr>
					<td>

						<label for="password">Password:</label>
					</td>
					<td>

						<input type="password" id="password" name="password">
					</td>
				</tr>
				<tr>
					<!-- <td>
						<br><br>
					</td> -->
					<td colspan='2' align='center'>

						<br><input type="submit" name="submit" value="Signin">
					</td>
					
				</tr>
				<tr>
					<td colspan='2' align='center'>

						<br> If already signed up then go to <a href="login.php">Login</a> page
					</td>
				</tr>
			</table>
	</form>
	</fieldset>
</body>
</html>
