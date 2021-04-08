<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Update Test Record</title>
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
	
	$sql = mysqli_query($conn, "SELECT * FROM covidtest WHERE testID='$_GET[id]'");
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

    <label>Test ID</label>
		<input type="text" name="testID" placeholder="TestID" value="<?php echo $data['testID']; ?>"><br>

		<label>Symptoms</label>
		<input type="text" name="symptoms" placeholder="Symptoms" value="<?php echo $data['symptoms']; ?>"><br>
		
    <label>Patient Type</label><br>
		<select name="patientType">
      <option value ="<?php echo $data['patientType']; ?>"></option>
			<option value= "returnee"  > Returnee </option>
			<option value= "quarantined"  > Quarantined </option>
			<option value= "closecontact"  > Close Contact </option>
			<option value= "infected"  > Infected </option>
			<option value= "suspect"  > Suspect </option>
		</select><br>

     	<button type="submit" name="update">Update</button>
		<a href="PatientData.php">Cancel</a>
    </form>
	
	<?php
	include "db_conn.php";
	if (isset($_POST['update'])) {
		mysqli_query($conn, "UPDATE covidtest SET symptoms = '$_POST[symptoms]', patientType = '$_POST[patientType]' WHERE testID = '$_GET[id]'");
		header("Location: PatientData.php");
		exit();
	}
	?>
</body>
</html>