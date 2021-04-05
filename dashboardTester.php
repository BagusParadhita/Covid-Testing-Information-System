<?php
session_start();
if (isset($_SESSION['centreOfficerID']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tester Dashboard</title>
    <link rel="stylesheet" href="dashboardcss/style.css" />
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
          <a href="#">
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
  </body>
</html>
<?php
}