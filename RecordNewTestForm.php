<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Record New Test</title>
	<link rel="stylesheet" type="text/css" href="dashboardcss/style.css">
</head>
<body>
	<div class="sidebar">
      <h2>Tester</h2>
      <ul class="nav">
        <li>
          <a href="dashboardTester.php">
            <span>Dashboard</span>
          </a>
        </li>
		<li>
          <a href="RecordNewTestForm.php">
            <span>Record New Test</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span>Update Test Result</span>
          </a>
        </li>
        <li>
          <a href="TesterGenerateTestReport.php">
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
	
    <form action="TesterRecordNewTest.php" method="post">
     	<h3>Record New Test</h3>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 
		<?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>
		
		<label>Name</label>
		<?php if (isset($_GET['name'])) { ?>
		 	<input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
     	<?php }else{ ?>
		 	<input type="text" name="name" placeholder="Name"><br>
		<?php }?>
		
		<label>Username</label>
		<?php if (isset($_GET['username'])) { ?>
		 	<input type="text" name="username" placeholder="Username" value="<?php echo $_GET['username']; ?>"><br>
     	<?php }else{ ?>
		 	<input type="text" name="username" placeholder="Username"><br>
		<?php }?>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		 
		<label>Confirm Password</label>
     	<input type="password" name="re_password" placeholder="Confirm Password"><br>

		<label> Symptoms </label>
		<input type="text" name="symptoms" placeholder="Symptoms"><br>

		<label>Patient Type</label><br>
		<select name="patientType">
			<option value= "returnee"  > Returnee </option>
			<option value= "quarantined"  > Quarantined </option>
			<option value= "closecontact"  > Close Contact </option>
			<option value= "infected"  > Infected </option>
			<option value= "suspect"  > Suspect </option>
		</select><br>
		
		<?php
		$mysqli = NEW MySQLi('localhost', 'root', '', 'covidtestinginformationsystem');
		$resultSet = $mysqli->query("SELECT kitID FROM testkit");
		?>
		<label>Kit ID</label><br>
		<select name="kitID">
		<?php
		while($rows = $resultSet->fetch_assoc()){
			$kitID = $rows['kitID'];
			echo "<option value='$kitID'>$kitID</option>";
		}
		?>
		</select><br>

     	<button type="submit">Save</button>
		<a href="PatientData.php">Cancel</a>
    </form>
</body>
</html>