<?php

if(isset($_POST['submit']))
  {
    $vards = $_POST['vards'];
    $uzvards = $_POST['uzvards'];
    $num = $_POST['num'];
    $atb = $_POST['atb'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "Lolesha161204";
    $dbname = "teachers_keys";
  
    //create connection
    $con = mysqli_connect($host, $username, $password, $dbname);
    //check connection if it is working or not
    if (!$con){
      die("Connection failed!" . mysqli_connect_error());
    }
    //This below line is a code to Send form entries to database
    $sql = "INSERT INTO contactform_entries (id, name_fld, email_fld, msg_fld) VALUES ('0', '$vards', '$uzvards', '$num', '$atb')";
    //fire query to save entries and check it with if statement
    $rs = mysqli_query($con, $sql);
    if($rs){
      echo "Message has been sent successfully!";
    }else{
      echo "Error, Message didn't send! Something's Wrong."; 
    }
    //connection closed.
    mysqli_close($con);
  }
?>
