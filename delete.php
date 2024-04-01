<?php

  include('include/conn.php');

  if(isset($_POST['id'])){
    $did = $_POST['id'];

    $conn->query("delete from members where id='$did'");
  }

?>