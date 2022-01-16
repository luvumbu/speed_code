<?php
include("../model/class/php/connexion.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `showCoords` WHERE 1';


echo'[';
     
echo '{}';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    /*

    echo "x : " . $row["x_position"]."<br>" ;
    echo "y : " . $row["y_position"]."<br>" ;

    
    */

    echo ','; 
    echo '{'; 
    echo '"id_showCoords":"'.$row['id_showCoords'].'"'; 
    echo ','; 

    echo '"adresse_ip":"'.$row['adresse_ip'].'"'; 
    echo ','; 
    echo '"click":"'.$row['click'].'"'; 
    echo ','; 

    echo '"x_position":"'.$row['x_position'].'"'; 
    echo ','; 

    echo '"y_position":"'.$row['y_position'].'"'; 
    echo ','; 

    echo '"reg_date":"'.$row['reg_date'].'"'; 
    
    echo '}'; 
    ?>


 

<?php 


  }
} else {
  echo "0 results";
}
$conn->close();

 echo  ']';





 
?>



















