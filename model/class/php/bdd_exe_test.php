<?php
session_start() ; 
/*
Fichier de configuration appartir du renvoi de requette lorsque le fichier Connexion n'existe pas
*/
header("Access-Control-Allow-Origin: *");
$dbname= $_POST["dbname"];
$username= $_POST["username"];
$password= $_POST["password"];

$_SESSION["alpha"] = "Erreur de mot de passe ou identifiant" ; 
 
/*
  //********************************************
  //*informations envoye a l'aide du formulaire*
  //*si le fichier connexion.php n'existe pas  *
  //******************************************** 
*/ 

$servername = "localhost";
$n="\n";
$debut="<?php".$n;
$fin="?>".$n;

// nom du fichier courant
$nom_file = "connexion.php";
 try {
 
 // debut du test 
                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        
                      }

                      // sql to create table
                      $sql = "CREATE TABLE showCoords (
                      id_showCoords	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      adresse_ip VARCHAR(30) NOT NULL,
                      click VARCHAR(30) NOT NULL,
                      x_position VARCHAR(30) NOT NULL,
                      y_position VARCHAR(50),
                      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                      )";

                      if ($conn->query($sql) === TRUE) {
                        echo "Table showCoords created successfully";
                      
                      } else {
                        echo "Error creating table: " . $conn->error;
                      
                      }

                      $conn->close();


                      // Create connection
                      $conn_2 = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn_2->connect_error) {
                        die("Connection failed: " . $conn_2->connect_error);
                        
                      }

                      // sql to create table
                      $sql_2 = "CREATE TABLE information_user (
                      id_information_user	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      password_information_user VARCHAR(500) NOT NULL,
                      mail_information_user VARCHAR(500) NOT NULL,
                      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                      )";

                      if ($conn_2->query($sql_2) === TRUE) {
                        echo "Table showCoords created successfully";
                      
                      } else {
                        echo "Error creating table: " . $conn_2->error;
                      
                      }

                      $conn_2->close();

                     
 // fin du test 
} 
catch (Exception $e) {
  echo 'Exception reçue : ',  $e->getMessage(), "\n";
   
   
}
 



try {
  
 

  $conn = new PDO("mysql:host=$servername;dbname=".$dbname, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $texte=   $debut.$n.'$dbname="'.$dbname.'";'.$n.'$username="'.$username.'";'.$n.'$password="'.$password.'";'.$n.'$servername="'.$servername.'";'.$n.$n.$fin;

  // création du fichier
  $f = fopen($nom_file, "x+");
  // écriture
  fputs($f, $texte );
  // fermeture
  fclose($f);
 
} catch(PDOException $e) {
  echo "une erreur";
  echo "Connection failed: " . $e->getMessage();
 
  
}
// Si le formulaire est correctement remplie création d'une table plus un fichier de configuration 
// rafrechissement de la page appartir du fiuchier Javascript localisation
// creation du fichier connexion.php localisation  model\class\php
// Model_Vue3\model\class\js
 
$nom = "../../../admin"; // Le nom du répertoire à créer

// Vérifie si le répertoire existe :
if (is_dir($nom)) {
                  echo 'Le répertoire existe déjà!';  
                  }
// Création du nouveau répertoire
else { 
      mkdir($nom);
      $nom_file = $nom."/index.php";
      $texte = "Hello world!";
  
      // création du fichier
      $f = fopen($nom_file, "x+");
      // écriture
      fputs($f, $texte );
      // fermeture
      fclose($f);   
      }

      ?>
 