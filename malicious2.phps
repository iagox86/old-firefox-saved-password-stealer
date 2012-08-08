<html>
	<head>
		<title>Login Page</title>
	</head>

	<body>

<?php	if(!isset($_REQUEST['username'])) 
		{ ?>
			You shouldn't be here!
<?php	} 
		else
		{ 
			$username = htmlentities($_REQUEST['username']);
			$password = htmlentities($_REQUEST['password']);

			if($username != '')
				echo "Congratulations, I just stole your account: $username / $password";
			else
				echo "I was unable to steal your account.. did you <a href='login.php'>log in</a> and save your password?";
?>
<?php	} ?>
	</body>
</html>
