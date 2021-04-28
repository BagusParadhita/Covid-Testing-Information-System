<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Update Test Result Form</title>
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
          <a href="UpdateTestResult.php">
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
	
	<?php
	include "db_conn.php";
	
	$sql = mysqli_query($conn, "SELECT * FROM covidtest WHERE testID='$_GET[id]'");
	$data = mysqli_fetch_array($sql);
	?>
	
  <div class = "formtest">
    <form action="" method="post">
     	<h3>Update Test Result</h3>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 
		<?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>

    <label>Test ID</label>
		<input type="text" name="testID" placeholder="TestID" value="<?php echo $data['testID']; ?>"><br>

    <label>Test Result</label><br>
		<select name="result">
		<option value ="<?php echo $data['result']; ?>"></option>
			<option value= "Positive"  > Positive </option>
			<option value= "Negative"  > Negative </option>
		</select><br>

     	<button type="submit" name="update">Update</button>
		<a href="UpdateTestResult.php">Cancel</a>
    </form>
  </div>
	
	<?php
	include "db_conn.php";
	if (isset($_POST['update'])) {
		mysqli_query($conn, "UPDATE covidtest SET result = '$_POST[result]', status = 'Complete' WHERE testID = '$_GET[id]'");
		header("Location: UpdateTestResult.php");
		exit();
	}
	?>
</body>
</html>