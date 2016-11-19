<?php
//mysql vairables
$dbhost= "dev.cictspace.net";
$dbport = "3306";
$dbuser = "MWATAN8019";
$dbpass = "Obiwan010";
$dbname = "MWATAN8019_CSC322";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
// Test if connection occured.
if(mysqli_connect_errno()) {
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
  );
}
?>
