<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>UPDATE TEST KIT STOCK</title>
	<link rel="stylesheet" type="text/css" href="dashboardcss/style.css">
</head>
<body>
	<div class="sidebar">
      <h2>Test Centre Manager</h2>
      <ul class="nav">
        <li>
          <a href="dashboardManager.php">
            <span>Dashboard</span>
          </a>
        </li>
		<li>
          <a href="RegisterTestCentreForm.php">
            <span>Register Test Centre</span>
          </a>
        </li>
        <li>
          <a href="RecordTesterForm.php">
            <span>Record Tester</span>
          </a>
        </li>
        <li>
          <a href="ManageTestKitStockForm.php">
            <span>Manage Test Kit Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span>Generate Test Report</span>
          </a>
        </li>
        <li>
          <a href="Logout.php">
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
	
	<div class="main">
      <b>COVID TESTING INFORMATION SYSTEM</b>
    </div>
	
	<?php
	include "db_conn.php";
	
	$sql = mysqli_query($conn, "SELECT * FROM testKit WHERE kitID='$_GET[id]'");
	$data = mysqli_fetch_array($sql);
	?>
	
    <form action="" method="post">
     	<h3>UPDATE TEST KIT STOCK</h3>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 
		<?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>
		
		<label>Test Kit ID</label>
		<input type="text" name="kitID" placeholder="Test Kit ID" value="<?php echo $data['kitID']; ?>"><br>
		
		<label>Available Stock</label>
		<input type="number" name="availableStock" placeholder="Available Stock" value="<?php echo $data['availableStock']; ?>"><br>

     	<button type="submit" name="update">Update</button>
		<a href="TestKitData.php">Cancel</a>
    </form>
	
	<?php
	include "db_conn.php";
	if (isset($_POST['update'])) {
		mysqli_query($conn, "UPDATE testKit SET availableStock = '$_POST[availableStock]' WHERE kitID = '$_GET[id]'");
		header("Location: TestKitData.php");
		exit();
	}
	?>
</body>
</html>