<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['update'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$sql = "UPDATE testKit SET availableStock = '$_POST[availableStock]' WHERE kitID = '$_GET[update]'";
	if(mysqli_query($conn, sql)){
		header("Location: TestKitData.php");
		exit();
	}else{
		header("Location: UpdateTestKitStockForm.php?error=unknown error occured&$user_data");
		exit();
	}
}else{
	header("Location: TestKitData.php");
	exit();
}