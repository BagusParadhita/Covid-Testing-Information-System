<?php
session_start();
if (isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tester Data</title>
    <link rel="stylesheet" href="dashboardcss/style.css" />
	<link rel="stylesheet" href="dataTables.bootstrap4.min.css" />
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
	
	<?php include "db_conn.php";?>
	<div style="overflow-x: auto;">
		<table id="tester">
			<thead>
				<tr>
					<th>Username</th>
					<th>Password</th>
					<th>Name</th>
					<th>Position</th>
					<th>Test Centre ID</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql=$conn->query("SELECT * FROM centreOfficer");
					while($co=$sql->fetch_object()){
				?>
					<tr>
					<td><?php echo $co->username;?></td>
					<td><?php echo $co->password;?></td>
					<td><?php echo $co->name;?></td>
					<td><?php echo $co->position;?></td>
					<td><?php echo $co->centreID;?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
  </body>
	
</html>

<script>
	$(document).ready(function() {
		$('#tester').DataTable();
	} );
</script>
<?php 
}