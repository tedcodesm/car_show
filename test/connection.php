<?php
$conn = mysqli_connect('localhost','root','1234','car');

if($conn){
    echo "";
}
else {
    echo "Failed to connect";
}
?>