<?php
include "db_conn.php";

$testID = $_POST["testID"];
$passwordOld =  $_POST["passwordOld"];

$name = $_POST["name"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

$pass = md5($passwordOld);

$sql = "SELECT * FROM covidTest WHERE testID='$testID' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if (isset($name) || isset($password)) {
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] === $pass && $password == $password2) {
            $hashPw = md5($password);
            $pw = "UPDATE covidTest SET name= '$name', password = '$hashPw' WHERE testID = '$testID'";
            $change = mysqli_query($conn, $pw);
            if(mysqli_affected_rows($conn) > 0 )
            {
                header("Location: viewProfilePatient.php?success=Name and Password Changed");
            }
            else
            {
                header("Location: viewProfilePatient.php?error=Failed to update");
            }
            exit();
        }else{
            header("Location: editProfile.php?error=Password Doesn't Match");
            exit();
        }
    }else{
        header("Location: editProfile.php?error=Incorect Password");
        exit();
    }
}
?>