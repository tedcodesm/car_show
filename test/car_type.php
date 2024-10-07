<?php
@include('connection.php');

$id= $_GET['id'];

$select= "SELECT * FROM car_type WHERE id='$id'";
$selected = mysqli_query($conn,$select);
$row = mysqli_fetch_array($selected);

if(isset($_POST['update_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $update= "UPDATE car_type SET username='$username', password='$password', email='$email' WHERE id='$id'";
    $result=mysqli_query($conn,$update);

    if($result){
        echo "User updated successfully";
        header("location: user.php");
    }else{
        echo "Error updating user: ". mysqli_error($conn);
    }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container mt-5 col-lg-6">
    
<form  action="" method="post" >
            <div class="mb-3">
                <label for="name" class="form-label">Username</label> <br>
                <input type="text" name="username" class="form-control" id="name" value="<?php echo $row['username']?>" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label> <br>
                <input type="password" name="password" class="form-control" id="email" value="<?php echo $row['password']?>" placeholder="..........">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Email</label> <br>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']?>" placeholder="name@example.com">         
               </div> <br>
               <button type="submit" name="update_user" >update_user</button>
            
        </form>
</div>
    
</body>
</html>