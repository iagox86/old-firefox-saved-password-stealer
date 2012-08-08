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
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];

			/* Note the XSS vulnerability here, where username isn't sanitized: */
			if($username != 'ron' || $password != 'thisisabadway')
			{
				echo "Error! The username you specified ($username) is invalid";
			}
			else
			{
				echo "Congratulations, you're logged in!";
			}
?>
<?php	} ?>
	</body>
</html>
