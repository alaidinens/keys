<?php
$klases_nr =$_POST['klases_nr'];
$laiks =$_POST['laiks'];
$datums =$_POST['datums'];
$skolens =$_POST['skolens'];
$skolotaja =$_POST['skolotaja'];
$klase =$_POST['klase'];
$termins =$_POST['termins'];
?>

if (!empty($klases_nr) || (!empty($laiks) || (!empty($datums) || (!empty($skolens) || (!empty($skolotaja) || (!empty($klase) || (!empty($termins)) {
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "Lolesha161204";
  #dbname = "teachers";
  
  $conn = new mysqli($host, $dbUsernmae, $dbPassword, $dbname);
  
  if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  } else {
      $select = "select"
      $INSERT = "INSERT Into register (klases_nr, laiks, datums, skolens, skolotaja, klase, terimins) values (?, ?, ?, ?, ?, ?, ?)";
  }
} else {
    echo "All fields are required"
    die();
}