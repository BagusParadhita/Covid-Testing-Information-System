<?php
session_start();
if (isset($_SESSION['uname']) && isset($_SESSION['password'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="dashboardcss/style.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Patient</h2>
      <ul class="nav">
        <li>
          <a href="dashboardPatient.php">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span>View Profile</span>
          </a>
        </li>
        <li>
          <a href="#">
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
  </body>
</html>
<?php
}