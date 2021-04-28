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
    <title>My Profile</title>
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
          <h4 class="text-secondary text-center my-4">Profile</h4>
            <div class="container">
            <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } 
            else if (isset($_GET['error'])) 
            {
              ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
              <?php
            }
            ?>
                <div class="card mt-5">
                    <div class="card-header text-center bg-primary text-light"><strong> Profile Information</strong></div>
                    <div class="card-body mx-auto">
                        <div class="row mt-3 ">
                            <div class="well well-sm">
                                <div class="row">
                                    <div class="col-sm-3 col-md-4">
                                    <img src="profile.jpg" alt="" class="img-rounded img-responsive" style="width:100%;">
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h4><?= $row['name']?></h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-id-card-o "></i> Test ID 
                                                    </td>
                                                    <td>
                                                        <small>:  &nbsp; <?=$row['testID'];?> </small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <i class="fa fa-user"></i> Username
                                                    </td>
                                                    <td>
                                                        :  &nbsp; <?=$username?> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <i class="fa fa-phone"></i> Date Join
                                                    </td>
                                                    <td>
                                                        :  &nbsp; <?=$row['testDate'];?> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex">
                                            <a href="ViewHistory.php" class="btn btn-primary my-4 mx-2">Go to Testing History</a>
                                            <a href="editProfile.php" class="btn btn-primary my-4 mx-2">Edit Profile</a>
                                        </div>
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