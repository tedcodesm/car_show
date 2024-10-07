<?php
@include('connection.php');

$select="SELECT * FROM car_type";
$result=mysqli_query($conn,$select);

if(isset ($_GET['action'])){
$action=$_GET['action'];

if($action= 'delete'){
    $id=$_GET['id'];
    $delete="DELETE FROM car_type WHERE id='$id'";
    $deleted = mysqli_query($conn,$delete);

    if($deleted){
        header("location: user.php");
    }else{
        echo "Error deleting user: ". mysqli_error($conn);
    
}
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
<body>
<style>
        table {
            width: 50%;
        }

        th {
            background-color: #f6f8f6;
            color: rgb(8, 8, 8);
            padding: 10px;
            text-align: left;
            border: 2px solid black;
        }

        td {
            padding: 10px;
            text-align: left;
            border: 2px solid black;


        }
    </style>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        <?php 
            while ($row=mysqli_fetch_array($result)) {
            ?>
        <tr>
           
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['email']?></td>
            <td><a class="btn btn-primary" href="?action=delete&&id=<?php echo $row['id']?>">Delete</a></td>
            <td><a class="btn btn-warning" href="car_type.php?id=<?php echo $row['id']?>">Update</a></td>


        </tr>

            <?php
             }
            
            ?>
    </table>
</body>
</html>