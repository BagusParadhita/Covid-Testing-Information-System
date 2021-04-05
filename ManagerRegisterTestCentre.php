<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['cname'])){

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$cname = validate($_POST['cname']);
	
	$user_data = 'cname='. $cname;

	if(empty($cname)){
        header("Location: RegisterTestCentreForm.php?error=Centre Name is required&$user_data");
	    exit();
	}else{
		$sql = "SELECT * FROM testCentre WHERE centreName='$cname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: RegisterTestCentreForm.php?error=The centre name is already taken, please try another centre name&$user_data");
	    	exit();
		}else{
			$sql2 = "INSERT INTO testCentre(centreName) VALUES($_SESSION['userID'] = $row['userID'], '$cname')";
			$result2 = mysqli_query($conn, $sql2);
			/*$sql3 = "SELECT userID FROM user INNER JOIN testCentre ON userID = centreOfficerID";
			$result3 = mysqli_query($conn, $sql3);*/
			if($result2){
				header("Location: TestCentreData.php");
	    		exit();
			}else{
				header("Location: RegisterTestCentreForm.php?error=unknown error occured&$user_data");
	    		exit();
			}
		}
	}
	
}else{
	header("Location: TestCentreData.php");
	exit();
}