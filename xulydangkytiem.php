<?php
  $servername = "localhost";
  $database = "dktiemchung";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $injectionAddress = $_POST['injection_address'];
  $priority = $_POST['priority'];
  $appointmentDatetime = $_POST['appointment_datetime'];
  $username = $_COOKIE['username'];
  
  $sqlUpdate = "UPDATE user SET injection_address='".$injectionAddress."', priority='".$priority."', appointment_datetime='".$appointmentDatetime."' WHERE username = '".$username."'";

  $resultUpdate = $conn->query($sqlUpdate);

  if ($resultUpdate == TRUE) {
    readfile('dangkytiemthanhcong.php');
  }

  mysqli_close($conn);
?>