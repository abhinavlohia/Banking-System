<?php
  
  $con = mysqli_connect('localhost', 'root');

  mysqli_select_db($con,'banking system' );
  
  if(!$con)
  {
    die("Connection to this database failed due to " . 
       mysqli_connect_error());
  }


?>