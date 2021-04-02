<?php
session_start();
if (isset($_POST['uname']) && isset($_POST['password'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Patient</h2>
      <ul class="nav">
        <li>
          <a href="#">
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
          <a href="logout.php">
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