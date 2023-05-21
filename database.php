<?php
$hoshame = "localhost";
$dbname = "darurrahmah";
$username = "root";
$password = "";

$conn = new mysqli($hoshame, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "error connection";
  }
  
?>
