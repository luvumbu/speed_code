<?php
// page1.php

session_start();
 
 
 
$input_inscription =  $_SESSION['input_inscription']  ; 
include("../model/class/php/connexion.php") ; 
 





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `information_user` WHERE `mail_information_user`="'.$input_inscription.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    ?>


<div class="alert alert-danger" role="alert"  style="text-align:center">
 Adresse mail déjà existante clicquer ici ppour renvoyer un mot de passe  <a href="view/password_recuperation.php">ici</a>
</div>

<?php 
  }
} else {
?>
<div class="alert alert-success" role="alert" style="text-align:center">
                Inscription reussi 
</div>





<?php 


$password_information_user_sha1 = sha1(sha1(rand(5, 9999))) ; 



$HTTP_HOST = $_SERVER['HTTP_HOST'] ;
 


if($HTTP_HOST!="localhost") {
echo "Nous avons envoyer un mail de récuperation a l'adresse " ; 
    $message = "Code de connexion est :   ".$password_information_user_sha1;
 




$to      = $input_inscription;
$subject = 'Mot de passe de recuperation';
$headers = 'From: contact@bokonzi.com' . "\r\n" .
'Reply-To: luvumbu.n@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);














}
else {
    echo "envoi de mail pas possible en local" ; 
}











// Create connection
$conn_insert = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn_insert) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO information_user(mail_information_user,password_information_user)
VALUES ('$input_inscription','$password_information_user_sha1')";

if (mysqli_query($conn_insert, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn_insert);
}

mysqli_close($conn_insert);







}
$conn->close();
?>