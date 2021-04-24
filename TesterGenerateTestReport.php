<?php
session_start();
if (isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Test Report Data</title>
	<link rel="stylesheet" href="dashboardcss/style.css" />
	<link rel="stylesheet" href="dataTables.bootstrap4.min.css" />
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
	
	<?php include "db_conn.php";?>
	<div style="overflow-x: auto;">
		<table id="patient">
			<thead>
				<tr>
					<th>Test ID</th>
					<th>Kit ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Name</th>
					<th>Patient Type</th>
                    <th>Symptoms</th>
					<th>Status</th>
					<th>Test Date</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$data = mysqli_query($conn, "SELECT * FROM covidtest");
				while($display = mysqli_fetch_array($data)){
					echo "
					<tr>
						<td>$display[testID]</td>
						<td>$display[kitID]</td>
						<td>$display[username]</td>
						<td>$display[password]</td>
						<td>$display[name]</td>
						<td>$display[patientType]</td>
						<td>$display[symptoms]</td>
						<td>$display[status]</td>
						<td>$display[testDate]</td>
					</tr>";
				}
			?>
			</tbody>
		</table>
	</div>
  </body>
	
</html>

<script>
	$(document).ready(function() {
		$('#patient').DataTable();
	} );
</script>
<?php 
}