<?php
session_start();
if (isset($_SESSION['userID']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Centre Data</title>
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
          <a href="RecordTesterForm.php">
            <span>Record Tester</span>
          </a>
        </li>
        <li>
          <a href="RegisterTestCentreForm.php">
            <span>Register Test Centre</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span>Manage Kit Stock</span>
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
		<table id="testCentre">
			<thead>
				<tr>
					<th>Centre ID</th>
					<th>Centre Officer ID</th>
					<th>Centre Name</th>
				</tr>
			</thead>
			<tbody>
				<?php
					//$sql=$conn->query("SELECT userID FROM user INNER JOIN testCentre ON userID = centreOfficerID");
					$sql=$conn->query("SELECT * FROM testCentre");
					while($co=$sql->fetch_object()){
				?>
					<tr>
					<td><?php echo $co->centreID;?></td>
					<td><?php echo $co->centreOfficerID;?></td>
					<td><?php echo $co->centreName;?></td>
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
		$('#testCentre').DataTable();
	} );
</script>
<?php 
}