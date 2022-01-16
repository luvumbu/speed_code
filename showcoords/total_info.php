<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hr_consulting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT DISTINCT(`adresse_ip`) FROM `showcoords` WHERE 1';


 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    /*

    echo "x : " . $row["x_position"]."<br>" ;
    echo "y : " . $row["y_position"]."<br>" ;

    
    */
 
   
   
 
        echo  '<div class="blockks1" > Adresse IP </div>'; 
        echo  '<div class="blockks2" id="'.$row['adresse_ip'].'" >'.$row['adresse_ip'].'</div><br/>'; 
       
        echo '<i class="fa fa-caret-square-o-left" style="font-size:2em" title="précedent"></i>';
        echo '<i class="fa fa-caret-square-o-right" style="font-size:2em" title="play"></i>';
        
        echo '<i class="fa fa-caret-square-o-right" style="font-size:2em" title="suivant"></i>';
        echo '<i class="fa fa-stop-circle" style="font-size:2em" title="Stop"></i>';

       
   
 


  }
} else {
  echo "0 results";
}
$conn->close();
 
?>



<style>
    #blockks{
        display:flex; 
        justify-content:space-around; 
    }
    .blockks2{
        border:1px solid rgba(0,0,0,0.1);
        background-color:rgba(0,0,255,0.1); 
        padding:5px;
        text-align:center;
        transition:1s all; 
    }
    .blockks1{
        border:1px solid rgba(0,0,0,0.3);
        background-color:rgba(0,0,255,0.3); 
        padding:5px;
        text-align:center;
    }
    .blockks2:hover{
        cursor:pointer;
        border:1px solid rgba(0,0,0,0.4);
        background-color:rgba(0,0,255,0.4); 
        transition:1s all; 
    }

    .blockks2:active{
        cursor:pointer;
        border:1px solid rgba(0,0,0,0.6);
        background-color:rgba(0,0,255,0.6); 
        transition:0.1s all; 
    }
    .fa{
       
        font-size:2em;
        margin:15px;
    }
    .fa:hover{
cursor:pointer;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">