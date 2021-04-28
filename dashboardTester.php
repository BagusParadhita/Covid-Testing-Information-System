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
    <title>Tester Dashboard</title>
    <link rel="stylesheet" href="dashboardcss/style.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Tester</h2>
      <ul>
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

    <div class="bgds">
    </div>
    
    <div class="row">
      <div class="col-1">
      
      </div>
      <div class="col-11">
          <h4 class="text-secondary text-center my-4">Tester Dashboard</h4>
          <div class="row">
            <div class="container">
              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-address-book  fa-5x text-center m-5  text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">Record New Test</h5>
                      <p class="card-text">Menu to record test from patient that have and have not taken a test.</p>
                      <a href="RecordNewTestForm.php" class="btn btn-secondary">Record New Test</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-pencil-square fa-5x text-center m-5   text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">Update Test Result</h5>
                      <p class="card-text">Menu to update the test result.</p>
                      <a href="UpdateTestResult.php" class="btn btn-secondary">Update Test Result</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-file-text   fa-5x text-center m-5 text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">Generate Test Report</h5>
                      <p class="card-text">Menu to view all the test that have been recorded.</p>
                      <a href="TesterGenerateTestReport.php" class="btn btn-secondary">Generate Test Report</a>
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