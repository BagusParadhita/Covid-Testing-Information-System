<?php 
session_start();

if (isset($_SESSION['userID']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
</body>
</html>

<?php 
}else{
     header("Location: Index.php");
     exit();
}
 ?>