<!DOCTYPE html>
<html>
<head>
	<title>LOGIN AS TEST CENTRE MANAGER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="TestCentreManagerSignIn.php" method="post">
     	<h3>LOGIN AS TEST CENTRE MANAGER</h3>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
		<a href="Register.php" class="ca">Create an account</a>
     </form>
</body>
</html>