<?php
@include('connection.php');
session_start();

$select="SELECT * FROM car_type";
$result=mysqli_query($conn,$select);


if(isset($_POST['user_details'])){
  $email=$_POST['email'];
  $password=md5($_POST['password']);



$select="SELECT * FROM car_type WHERE email='$email' && password='$password'";
$result=mysqli_query($conn,$select);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result)>0){
  $_SESSION['email'] = $row['email'];
  $_SESSION['password'] = $row['password'];
  header("location: test1.php");
}
else{
  'invalid credentials';
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    
    <div class=" container mt-5 col-lg-6">
    <form style="box-shadow: 2px 0px 4px black ;padding:2rem ; border-radius:10px;background-color:aliceblue;" action="" method="post">
      
      
      <label  for="email" >Email</label>
      <input name="email" type="email" class="form-control" required>
      <label  for="password" >Password</label>
      <input name="password"  type="password" class="form-control " required>  <br>
      <input class="btn btn-primary" name="user_details"  type="submit" value="login">
    </form>
    </div>
  </body>
</html>
