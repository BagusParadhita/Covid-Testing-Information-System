<?php
session_start();
if (isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Centre Manager Dashboard</title>
    <link rel="stylesheet" href="dashboardcss/style.css" />
	<link rel="stylesheet" href="dataTables.bootstrap4.min.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Test Centre Manager</h2>
      <ul>
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

    <div class="row">
      <div class="col-1">
      
      </div>
      <div class="col-11">
          <h4 class="text-secondary text-center my-4">Manager Dashboard</h4>
          <div class="row">
            <div class="container">
              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-hospital-o   fa-5x text-center m-5  text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">Register Test Centre</h5>
                      <p class="card-text">Menu to record new test centre. </p>
                      <a href="RegisterTestCentreForm.php" class="btn btn-secondary">Register Test Centre</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-user fa-5x text-center m-5   text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">Record Tester</h5>
                      <p class="card-text">Menu to record new tester.</p>
                      <a href="RecordTesterForm.php" class="btn btn-secondary">Record Tester</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-medkit fa-5x text-center m-5 text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">Manage Test Kit</h5>
                      <p class="card-text">Menu to manage the test kit.</p>
                      <a href="ManageTestKitStockForm.php" class="btn btn-secondary">Manage Test Kit</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-file-text  fa-5x text-center m-5 text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">Generate Test Report</h5>
                      <p class="card-text">Menu to view all the test that have been recorded.</p>
                      <a href="ManagerGenerateTestReport.php" class="btn btn-secondary">Generate Test Report</a>
                    </div>
                  </div>
                </div>
              </div>

             
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
<?php 
}