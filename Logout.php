<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["password"]);
header("Location:Index.php");
?>