<?php

  include('include/conn.php');

  if(isset($_POST['efirstname'])){
    $efirstname = $_POST['efirstname'];
    $elastname = $_POST['elastname'];
    $eaddress = $_POST['eaddress'];
    $eid = $_POST['id'];

    $conn->query("update members set firstname='$efirstname', lastname='$elastname', address='$eaddress' where id='$eid' ");

    $response[] = array("firstname"=>$efirstname, "lastname"=>$elastname, "address"=>@$eaddress,"member_id"=>$eid);
    echo json_encode($response);

  }

?>