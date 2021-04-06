<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: TestCentreManagerLogin.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: TestCentreManagerLogin.php?error=Password is required");
	    exit();
	}else{
		//hashing the password
		$pass = md5($pass);
		
		$sql = "SELECT * FROM user WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	header("Location: dashboardManager.php");
		        exit();
            }else{
				header("Location: TestCentreManagerLogin.php?error=Incorect Username or Password");
		        exit();
			}
		}else{
			header("Location: TestCentreManagerLogin.php?error=Incorect Username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: TestCentreManagerLogin.php");
	exit();
}