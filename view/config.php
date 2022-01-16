  <form  id="form-group" >
  <div class="form-group">
    <label for="dbname">DB NAME</label>
    <input type="text" class="form-control" id="dbname"  placeholder="Enter dbname">  
  </div>
  <div class="form-group">
    <label for="dbname">UserName</label>
    <input type="text" class="form-control" id="username"  placeholder="Enter dbname">  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div> 
  <div type="submit" class="btn btn-primary cursor-pointer" id="submit" onclick="bdd_exe_test()">Submit</div>
</form>
<link rel="stylesheet" href="model/css/config.css">
<p>
  <a href="readme/readme.html">besoin d'aide cliquez ici</a>
</p>
 <script src="model/class/js/config.js"></script>
 <?php 
 if(isset($_SESSION["alpha"])){
  // Indixation utilisateur puis perte de saission 
  session_destroy(); 
 }
 ?>