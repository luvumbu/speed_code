<?php
// page1.php

session_start();
include("../model/class/php/connexion.php") ; 


$_SESSION['input_mail'] = $_POST["input_mail"];
$_SESSION['input_password'] = $_POST["input_password"];

echo $servername ; 
echo $_SESSION['input_password']  ; 
echo $_SESSION['input_mail']  ; 

$input_mail = $_POST["input_mail"];
$input_password = $_POST["input_password"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `information_user` WHERE `password_information_user`="'.$input_password.'" AND `mail_information_user` ="'.$input_mail.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "data trouve"; 

    $_SESSION['server'] ="on"; 
  }
} else {
    $_SESSION['server'] ="off"; 
}
$conn->close();

?>