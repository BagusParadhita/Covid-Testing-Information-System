<!DOCTYPE html>
<html>
<head>
	<title>LOGIN AS TESTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="TesterSignIn.php" method="post">
     	<h3>LOGIN AS TESTER</h3>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>