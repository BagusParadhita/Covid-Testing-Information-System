<?php
session_start();
include "db_conn.php";

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM covidtest where username = '$username'");
$row = mysqli_fetch_assoc($result);


if (isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Testing History</title>
    <link rel="stylesheet" href="dashboardcss/style.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Patient</h2>
      <ul>
        <li>
          <a href="dashboardPatient.php">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="viewProfilePatient.php">
            <span>View Profile</span>
          </a>
        </li>
        <li>
          <a href="ViewHistory.php">
            <span>View Testing History</span>
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
    <h4 class="text-secondary text-center my-4">My Testing History</h4>
    <?php include "db_conn.php";?>
	<div style="overflow-x: auto;">
		<table id="patient">
			<thead>
				<tr>
					<th>Test ID</th>
					<th>Kit ID</th>
					<th>Username</th>
					<th>Name</th>
					<th>Patient Type</th>
                    <th>Symptoms</th>
					<th>Status</th>
					<th>Test Date</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$data = mysqli_query($conn, "SELECT * FROM covidtest WHERE username = '$username'");
				while($display = mysqli_fetch_array($data)){
					echo "
					<tr>
						<td>$display[testID]</td>
						<td>$display[kitID]</td>
						<td>$display[username]</td>
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