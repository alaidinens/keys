<?php

$skol_vards =$_POST['skol_vards'];
$skol_uzvards =$_POST['skol_uzvards'];
$klases_nr =$_POST['klases_nr'];
$skolotaja =$_POST['skolotaja'];


if (!empty($skol_vards || (!empty($skol_uzvards) || (!empty($klases_nr) || (!empty($skolotaja)) {
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "Lolesha161204";
  #dbname = "teachers";
  
  $conn = new mysqli($host, $dbUsernmae, $dbPassword, $dbname);
  
  if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  } else {
      $select = "select"
      $INSERT = "INSERT Into register (skol_vards, skol_uzvards, klases_nr, skolotaja) values (?, ?, ?, ?)";
  }
} else {
    echo "All fields are required"
    die();
}

?>