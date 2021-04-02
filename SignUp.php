<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
	&& isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	
	$user_data = 'uname='. $uname. '&name='. $name;

	if(empty($name)){
        header("Location: Register.php?error=Name is required&$user_data");
	    exit();
	}else if (empty($uname)) {
		header("Location: Register.php?error=Username is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: Register.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($re_pass)){
        header("Location: Register.php?error=Confirm Password is required&$user_data");
	    exit();
	}else if($pass !== $re_pass){
        header("Location: Register.php?error=Password doesn't match&$user_data");
	    exit();
	}else{
		//hashing the password
		$pass = md5($pass);
		$sql = "SELECT * FROM user WHERE username='$uname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: Register.php?error=The username is already taken, please try another username&$user_data");
	    	exit();
		}else{
			$sql2 = "INSERT INTO user(username, password, name) VALUES('$uname', '$pass', '$name')";
			$result2 = mysqli_query($conn, $sql2);
			if($result2){
				header("Location: Register.php?success=Your account has been created successfully&$user_data");
	    		exit();
			}else{
				header("Location: Register.php?error=unknown error occured&$user_data");
	    		exit();
			}
		}
	}
	
}else{
	header("Location: Register.php");
	exit();
}