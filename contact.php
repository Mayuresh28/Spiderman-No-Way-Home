<?php
if(isset($_POST['submit'])){
 $fullname= $_POST['fullname'];
 $email= $_POST['email']; 
$formmessage= $_POST['formmessage'];
$host = 'localhost';
$user = 'root';
$pass='';
$dbname ='spidyshub';
$conn = mysqli_connect($host, $user, $pass, $dbname);
$sql ="INSERT INTO contact_table( fullname,email,formmessage) values ( '$fullname','$email','$formmessage')";
mysqli_query($conn, $sql);
}
?>





<!DOCTYPE html>
<html >
<head>

    <title>Spidy's_Hub</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="friconix.js"> </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="weblogo.png">
</head>

<body  id="bodycontact">
  <nav class="fixed navbar">
    <div class="logoofsite">    
      <p class="logo">Spidy's_Hub</p>
      <img src="weblogo.png" alt="image not found" class="weblogo">
   </div>

    <button class="btn btn1" ><a href="index.php" class="link1"> About Movie</a></button> 
        <button class="btn btn2" ><a href="cast.php" class="link1">Cast</a></button> 
        <button class="btn btn3"  ><a href="tickets.php" class="link1">Tickets</a></button> 
       <button class="btn btn4" >Contact</button> 
   
 </nav>  
    <div id="empty3" >
      
    </div>
    <div id="empty4">
      </div>
      
      <div id="follow2">
       
      
         
      </div>
      <div id="follow3">
    </div>

  <Div id="contact">
<h3 id="titlecontact"><b>Contact Us :</b></h3> 
</Div> 



<div id="paracontact">
<p>  We are glad for serve you. Your queries are the proof of your attension throughout the content . Please tell us about your queries by contacting through Email.</p>
</div>
<br>
<div id="email">

 Contact No :  9022406917 <br><br>
 Email : <a id="emaillink" href="mailto:spiderman.nowayhome28@gmail.com?subject=Queries About Movie" >spiderman.nowayhome28@gmail.com</a>
 <br><br>
 <a href="https://www.instagram.com/marvel/?utm_medium=copy_link" target="_blank" ><i class="fi-xnsuxl-instagram "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.facebook.com/Marvel" target="_blank"> <i class="fi-xnsuxl-facebook "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/marvel" target="_blank"> <i class="fi-xnsuxl-twitter-solid "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.snapchat.com/add/marvel" target="_blank"> <i class="fi-xwluxl-snapchat-wide "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
</div>
    
<div id="follow">
  <h3 id="titlefollow">Give Your Feedback Here :</h3> 

<br><br><br>
<form action="#" method="POST">
  <label for="formname"></label>
  <input type="text" id="formname" placeholder="Full Name" name="fullname">
  <label for="formemail"></label>
  <input type="email" id="formemail" placeholder="Email" name="email">
<label for="formmessage"></label>
<textarea name="formmessage" id="message" cols="20" rows="3" placeholder="Type Your Message Here"></textarea>
<input type="submit" id="contactsubmit" name="submit">
</form>
   
</div>
 

   
</div>
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br>
<br>


<br><br>

</div>
</html>