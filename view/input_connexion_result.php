<?php 

session_start() ; 

$serve=   $_SESSION['server'];

if($serve=="on"){
    ?>


<meta http-equiv="refresh" content="3">
<?php 
  echo "connexion reussi " ; 
}
else {
  echo "echec de la connexion" ; 
}
?>