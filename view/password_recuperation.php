<?php
// page1.php

session_start();

include("../model/class/php/connexion.php") ; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

 
$input_inscription = $_SESSION['input_inscription'] ; 

?> 

</body>
</html>

 



<?php
















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
    $password_information_user= $row["password_information_user"];
  }
} else {
  echo "0 results";
}
$conn->close();

















$HTTP_HOST = $_SERVER['HTTP_HOST'] ;

if($HTTP_HOST!="localhost") {
echo "Nous avons envoyer un mail de récuperation a l'adresse " ; 
    $message = "Code de connexion est ".$password_information_user;
 




$to      = $input_inscription;
$subject = 'Mot de passe de recuperation';
$headers = 'From: bokonzi@bokonzi.com' . "\r\n" .
'Reply-To: luvumbu.n@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}
else {
    echo "envoi de mail pas possible en local" ; 
}
// Le message

?>

