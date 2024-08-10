<?php
if(isset($_POST['submit'])){
 $fullname= $_POST['applyname'];
 $mobile= $_POST['mobileno']; 
$password= $_POST['password'];
$host = 'localhost';
$user = 'root';
$pass='';
$dbname ='spidyshub';
$conn = mysqli_connect($host, $user, $pass, $dbname);
$sql ="INSERT INTO merchandise( fullname,mobile,pass ) values ( '$fullname','$mobile','$password')";
mysqli_query($conn, $sql);
}
?>






<!DOCTYPE html>
<html >
<head>
 
    <title>Spidy's_Hub</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="weblogo.png">
</head>
<body>
    <nav class="fixed navbar">
        <div class="logoofsite">    
            <p class="logo">Spidy's_Hub</p>
            <img src="weblogo.png" alt="image not found" class="weblogo">
         </div>
            <button  class="btn btn1" ><a href="index.php"  class="link1">About Movie</a></button>
            <button  class="btn btn2" ><a href="cast.php"  class="link1">Cast</a> </button>
            <button  class="btn btn3" >Tickets</button>
           <button class="btn btn4" ><a href="contact.php" class="link1">Contact</a></button>
   
     </nav> 
     <div id="emptytickets">
         
     </div>
     <div id="emptytickets2">
         
     </div>
     <div id="apply">
         <h3 id="merchandise">Apply for Merchandise </h3>
         <h5 id="register">Register Here</h5>
         <br><br><br>
         <form action="#" method="post">
             <input type="text" name="applyname" id="applyname" placeholder="Full Name"><br>
             <input type="text" name="mobileno" id="mobileno" placeholder="Contact No."><br>
            
            
             <input type="password" name="password" id="password"  placeholder="Set a Password"><br>
             <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Your Password"><br><br>
             <button id="rbtn" type="submit" name="submit">Register</button>

             

         </form>

     </div>
    <div id="radiobtn">
     <h2 id="searchtheatre"> Search For Theatre</h2>
<br><br>

<input type="radio" name="lang" id="hindi"  class="radioinput">
<label for="hindi" class="radiolabel" id="hindilabel">Hindi</label>
<input type="radio" name="lang" id="english"  class="radioinput">
<label for="english" class="radiolabel"  id="englishlabel">English</label>

    <br><br>
    <input type="radio" name="version" id="twod"  class="radioinput2">
    <label for="twod" class="radiolabel2" id="twodlabel">2D</label>
    <input type="radio" name="version" id="threed"  class="radioinput2">
    <label for="threed" class="radiolabel2"  id="threedlabel">3D</label>
    <input type="radio" name="version" id="fourdimax"  class="radioinput2">
    <label for="fourdimax" class="radiolabel2"  id="fourdimaxdlabel" >4D Imax</label>
    <br>
    <form action="search-thetres.php" method="POST">
    <input type="text" id="pincode" placeholder="City" name="city">
    
<br>
<input type="submit" name="submit" id="search" value="Search">
</form>
    </div>
</body>
</html>