<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EMAIL SPOOFING | TOXIC-VIRUS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel = "icon" href = "/logo.png" type = "image/x-icon">
</head>
<style>
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {  display:none;}
body{
  background-color: black;
}
slog{
  color: yellowgreen;
  font-size: 20px;
  font-family: 'Syne Tactile', cursive;
}
h1 {
  font-family: 'Ubuntu', sans-serif;
  color: greenyellow;
  text-shadow: red 2px;
  font-size: 40px;
}
h2{
  color: lawngreen;
}
h3{
  color: greenyellow;
  font-size: 40px;
}
hr.x {
  border-top: 2px dashed greenyellow;
}
label{
  color: greenyellow;
}

input[type=text] {
  width: 100%;
  padding: 10px 20px;
  margin: 20px 0;
  font-size: 17px;
  box-sizing: border-box;
  border-color: red;
  border-radius: 20px;
  background-color: #d9d9d9;
  color: black;
}
::placeholder {
  color: black;
  opacity: 60%; 
  font-size: 17px;
}
.button{
  background-color: greenyellow;
  color: black;
  font-size: 20px;
  padding: 10px 50px;
  border: red;
  cursor: pointer;
  border-radius: 50px;
  text-align: center;
}
.button:hover{
  background-color: black;
  color: greenyellow;
  cursor: pointer;
}
</style>
</head>
<body>
  <div align="center">
  <a href="index.html"><h1><b>☣TOXIC-VIRUS☣</h1></a>
  <slog>Make Google Your Best Friend .....!!</slog>
  <br><br>
  </div>
  <h2>~/ Hello World !!</h2>
  <hr class="x">
  <div>
<h3 style="margin-right: 90%"><\<h3>
  </div>
<form action="" method="post">
  <label for="fname">~/ VICTIM EMAIL</label>
  <input type="text" name="email" placeholder="victim@txvirus.com">
  
  <label for="text">~/ ANONYMOUS NAME</label>
  <input type="text" name="name" placeholder="TOXIC-VIRUS">
  
  <label for="text">~/ SENDER EMAIL</label>
  <input type="text" name="sender" placeholder="fakemail@txvirus.com">
  
  <label for="text">~/ SUBJECT</label>
  <input type="text" name="subject" placeholder="EMAIL SUBJECT">
  
  <label for="text">~/ MESSAGE</label><br>
  <input type="text" name="content" placeholder="ENTER YOUR MESSAGE............."><br><br>
  
   <input class="button" type="submit" value="Submit">
</form>
<h3 style="margin-left: 90%">/><h3>
    <hr class="x">
  
  <div align="center">
   
    <a href="https://facebook.com/t0xicvirus"><i class="fa fa-facebook" style="font-size:30px;color: greenyellow"></i></a>
    
    <span> | </span>
    
    <a href="https://t.me/txvirus"><i class="fa fa-telegram" style="font-size:30px;color: greenyellow"></i></a>
    
    <span> | </span>
    
    <a href="https://github.com/AKXVAU"><i class="fa fa-github" style="font-size:30px;color: greenyellow"></i></a>
    
    <span> | </span>
    <a href="contact.php"><i class="fa fa-envelope" style="font-size:30px;color: greenyellow"></i></a>
    
    </div>
 
</body>
</html>

<?php
$email = $_POST['email'];
$content = $_POST['content'];
$name = $_POST['name'];
$sender = $_POST['sender'];
$subject = $_POST['subject'];
$headers = "From: $name "."<".$sender.">\r\n";
mail($email, $subject, $content, $headers );
?>