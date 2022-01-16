<div id="information_envoie"></div>
<id id="test"></id>
<div id="papirus">

    <link rel="stylesheet" href="view/fa-user-circle.css">


    <div id="form_login">
    
    <h1>
         Connexion
    </h1>
 
    <i class="fa fa-search"></i>
 
    <input type="text" placeholder="mail" id="input_mail"> </br/>
    <i class="fa fa-search"></i>
    <input type="text" placeholder="mot de passe"  id="input_password" > </br/>
    <i class="fa fa-send" style="padding-right:5px"></i>
    <input type="submit" id="se_connecter" class="se_connecter" onclick="connexion()" title="connexion"  >

    <h2>
        Inscription
    </h2>
    <i class="fa fa-user-plus" id="fa-user-plus" onclick="header_menu_click(this)" title="inscription"></i>
    </div>
</div>
    
    <style>
        #papirus{
 
        }
    #form_login{
        width:500px;
        margin:auto ; 

        text-align:center ; 
  
    }
    #form_login input{
        width:80% ; 
        margin-bottom:15px; 
        text-align:center ; 
    }
    #se_connecter{
        border:1px solid rgba(0,0,0,0) ; 
     background-color:"red" ;  
 
        margin:auto; 
    }
    .se_connecter {
        background-color:#ad3117 ; 
        color:white; 
    }
    .se_connecter:active {
        background-color:#b74a37 ; 
        color:white; 
    }
    .se_connecter:hover {
        cursor:pointer;
    }
    #fa-user-plus{
        font-size:2em ; 
        border:1px solid black;
        padding:10px; 
        border-radius:100%; 
    }
    #fa-user-plus:hover{
background-color:rgba(0,0,0,0.4); 
transition:0.3s all ; 
color:white  ; 
cursor:pointer ; 
    }
    #fa-user-plus {
 
transition:0.3s all ; 
 
 
    }
</style>