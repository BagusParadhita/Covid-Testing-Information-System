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
    <title>Patient Dashboard</title>
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
    <div class="row">
      <div class="col-1">
      
      </div>
      <div class="col-11">
          <h4 class="text-secondary text-center my-4">Patient Dashboard</h4>
          <div class="row">
            <div class="container">
              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-address-book  fa-5x text-center m-5  text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">View Profile</h5>
                      <p class="card-text">Menu to view the information of your profile.</p>
                      <a href="viewProfilePatient.php" class="btn btn-secondary">View Profile</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3 mx-auto" style="max-width: 600px;">
                <div class="row no-gutters">
                  <div class="col-md-3">
                    <i class="fa fa-file-text  fa-5x text-center m-5   text-primary" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">View Testing History</h5>
                      <p class="card-text">Menu to view all the patient's tests that have been recorded.</p>
                      <a href="ViewHistory.php" class="btn btn-secondary">View Testing History</a>
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