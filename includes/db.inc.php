<?php
  // project/private/db_credentials.php
  $link=mysqli_connect("localhost","root","","jobscope");
  if(mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " : " . mysqli_connect_errno();
    exit($msg);
  }

?>