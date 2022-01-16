
 
var non_ = document.getElementById("non_");
non_.style.position="absolute";
valeur = 0 ;
var showcoords = document.getElementById("showcoords") ; 
var fa_adjust = document.getElementById("fa_adjust") ; 
 var refreshIntervalId = setInterval(fname,50);
 var non_= document.getElementById("non_");


 function fname()
{

    valeur++ ; 




    non_.style.backgroundColor="non_";


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
       

       // document.getElementById( myObj[valeur].adresse_ip).style.backgroundColor="non_";
        setTimeout(function()
        {
        // document.getElementById( myObj[valeur].adresse_ip).style.backgroundColor="blue";
          
          
          },
           
           1000);
        

        non_.style.top = myObj[valeur].y_position;
        non_.style.left = myObj[valeur].x_position;

       
        if(myObj.length-valeur==1){
            console.log("fin du programme")
            clearInterval(refreshIntervalId);
        }
        else{
            console.log("Mouves"); 
        }

       
 
      }
    };
    xmlhttp.open("GET", "showcoords.php", true);
    xmlhttp.send();
  

 } ;
 function showcoords_(_this) {
  
     
    if( showcoords.style.display=="block"){

        showcoords.style.display="none"; 
        _this.className ="fa fa-adjust" ; 
    
        
    }
    else{
        showcoords.style.display="block"; 
          
          _this.className ="fa fa-adjust rotation_1" ;

         
    }
 }




 
 showcoords.style.display="none";