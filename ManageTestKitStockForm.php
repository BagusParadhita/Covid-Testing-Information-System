<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>MANAGE TEST KIT STOCK</title>
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
	
    <form action="ManagerManageTestKitStock.php" method="post">
     	<h3>MANAGE TEST KIT STOCK</h3>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 
		<?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>
		
		<label>Test Kit Name</label>
		<?php if (isset($_GET['tname'])) { ?>
		 	<input type="text" name="tname" placeholder="Test Name" value="<?php echo $_GET['tname']; ?>"><br>
     	<?php }else{ ?>
		 	<input type="text" name="tname" placeholder="Test Name"><br>
		<?php }?>
		
		<label>Available Stock</label>
		<input type="number" name="astock" placeholder="Available Stock"><br>
		
		<?php
		$mysqli = NEW MySQLi('localhost', 'root', '', 'covidtestinginformationsystem');
		$resultSet = $mysqli->query("SELECT centreName FROM testCentre");
		?>
		
		<label>Test Centre Name</label><br>
		<select name="test-centre">
		<?php
		while($rows = $resultSet->fetch_assoc()){
			$centreName = $rows['centreName'];
			echo "<option value='$centreName'>$centreName</option>";
		}
		?>
		</select><br>

     	<button type="submit">Save</button>
		<a href="TestKitData.php">Cancel</a>
    </form>
</body>
</html>