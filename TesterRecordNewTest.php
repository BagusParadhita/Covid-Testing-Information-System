<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])
	&& isset($_POST['name']) && isset($_POST['re_password'])){

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$kitID = validate($_POST['kitID']);
	$name = validate($_POST['name']);
	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$symptoms = validate($_POST['symptoms']);
	$patientType = validate($_POST['patientType']);
	
	$user_data = 'username='. $username. '&name='. $name;

	if(empty($name)){
        header("Location: RecordNewTestForm.php?error=Name is required&$user_data");
	    exit();
	}else if (empty($username)) {
		header("Location: RecordNewTestForm.php?error=Username is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: RecordNewTestForm.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($re_pass)){
        header("Location: RecordNewTestForm.php?error=Confirm Password is required&$user_data");
	    exit();
	}else if($pass !== $re_pass){
        header("Location: RecordNewTestForm.php?error=Password doesn't match&$user_data");
	    exit();
	}else{
		//hashing the password
		$pass = md5($pass);
		$sql = "SELECT * FROM covidtest WHERE username='$username'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: RecordNewTestForm.php?error=The username is already taken, please try another username&$user_data");
	    	exit();
		}else{
			$sql2 = "INSERT INTO covidtest(kitID, username, password, name, symptoms, patientType, status) VALUES('$kitID','$username', '$pass', '$name', '$symptoms', '$patientType', 'pending')";
			$result2 = mysqli_query($conn, $sql2);
			if($result2){
				header("Location: PatientData.php");
	    		exit();
			}else{
				header("Location: RecordNewTestForm.php?error=unknown error occured&$user_data");
	    		exit();
			}
		}
	}
	
}else{
	header("Location: PatientData.php");
	exit();
}