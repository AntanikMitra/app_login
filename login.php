<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Login</title>
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="css/login.css"  media="screen,projection"/>
</head>

<body>

<form method="post" action="validate.php">
<div class="input-field col s6">
	<label for="username">Username:</label>
	<input name="username" />
</div>
<div class="input-field col s6">
	<label for="password">Password:</label>
	<input name="password" type="password" />
</div>
<input type="submit" value="Login" />
</form>

</body>

</html>
