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
    <link rel="stylesheet" href="dashboardcss/style.css"/>
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
          <h4 class="text-secondary text-center my-4">Edit Profile</h4>
            <div class="container">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
                <div class="card mt-5 text-center">
                    <div class="card-body ">
                        <h3 class="text-dark">Edit your information :</h3>
                        <form action="UpdateProfile.php" method="post" >
                            <div class="form-group ">
                                <input type="hidden" name="testID" value="<?=$row['testID'];?>">
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="passwordOld" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password2" placeholder="Confirm Password">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
  </body>
</html>
<?php
}