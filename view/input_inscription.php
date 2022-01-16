<?php
// page1.php

session_start();
 


$_SESSION['input_inscription'] = $_POST["input_inscription"];
 
echo $_SESSION['input_inscription'] ; 
?>