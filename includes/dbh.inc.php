<?php
  $dbhost='localhost';
  $dbuser ='root';
  $dbpassword ='root';
  $dbdatabase= 'project01';
  
  $conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);
  
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " . $mysqli->connect_error);
  }
?>