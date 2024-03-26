<?php 

  $conn = new mysqli('localhost','root','','testweb');
  if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
  }

?>