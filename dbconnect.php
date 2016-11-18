<?php
$DBhost = "dev.cictspace.net";
$DBport = "3306";
$DBuser = "MWATAN8019";
$DBpass = "Obiwan010";
$DBname = "MWATAN8019_CSC322";

$DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname, $DBport);

if ($DBcon->connect_errno) {
  die("ERROR : -> ".$DBcon->connect_error);
}
?>
