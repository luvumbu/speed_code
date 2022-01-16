var red = document.getElementById("red");
red.style.position="absolute";
valeur = 0 ;
var showcoords = document.getElementById("showcoords") ; 
var fa_adjust = document.getElementById("fa_adjust") ; 
 var refreshIntervalId = setInterval(fname, 30);
 var red= document.getElementById("red");


 function fname()
{

    valeur++ ; 




    red.style.backgroundColor="red";
    red.style.height="2em";
    red.style.width="2em";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
       

        document.getElementById( myObj[valeur].adresse_ip).style.backgroundColor="red";
        setTimeout(function(){
         document.getElementById( myObj[valeur].adresse_ip).style.backgroundColor="blue";
          
          
          },
           
           1000);
        

        red.style.top = myObj[valeur].y_position;
        red.style.left = myObj[valeur].x_position;

       
        if(myObj.length-valeur==1){
            console.log("fin du programme")
            clearInterval(refreshIntervalId);
        }
        else{
            console.log("Mouves"); 
        }
        if(myObj[valeur].click!="false"){
          red.style.backgroundColor="blue";
          red.style.height="6em";
          red.style.width="6em";
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

/* later */
