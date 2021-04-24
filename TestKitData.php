<?php
session_start();
if (isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Kit Data</title>
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
          <a href="ManagerGenerateTestReport.php">
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
		<table id="testKit">
			<thead>
				<tr>
					<th>Kit ID</th>
					<th>Test Kit Name</th>
					<th>Available Stock</th>
					<th>Test Centre ID</th>
					<th>Update Stock</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$data = mysqli_query($conn, "SELECT * FROM testKit");
					while($show = mysqli_fetch_array($data)){
						echo "
						<tr>
							<td>$show[kitID]</td>
							<td>$show[testName]</td>
							<td>$show[availableStock]</td>
							<td>$show[centreID]</td>
							<td>
								<a href='UpdateTestKitStockForm.php?id=$show[kitID]'> Update </a>
							</td>
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
		$('#testKit').DataTable();
	} );
</script>
<?php
}