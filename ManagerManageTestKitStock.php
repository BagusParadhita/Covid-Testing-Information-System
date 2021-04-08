<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['tname']) && isset($_POST['astock']) && isset($_POST['test-centre'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$tname = validate($_POST['tname']);
	$astock = validate($_POST['astock']);
	$tcentre = validate($_POST['test-centre']);
	
	$user_data = 'tname='. $tname;

	if(empty($tname)){
        header("Location: ManageTestKitStockForm.php?error=Test Kit Name is required&$user_data");
	    exit();
	}else if ($astock < 1) {
		header("Location: ManageTestKitStockForm.php?error=Stock can't be empty&$user_data");
	    exit();
	}else{
		$sql = "SELECT * FROM testKit WHERE testName='$tname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) <= 0) {
			$sql2 = "INSERT INTO testKit(testName, availableStock, centreID) VALUES('$tname', '$astock', '$tcentre')";
			$result2 = mysqli_query($conn, $sql2);
			if($result2){
				header("Location: TestKitData.php");
	    		exit();
			}else{
				header("Location: ManageTestKitStockForm.php?error=unknown error occured&$user_data");
	    		exit();
			}
		}
	}
	
}else{
	header("Location: TestKitData.php");
	exit();
}