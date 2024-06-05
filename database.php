<?php
echo "connecting to dataBase";
$servername="localhost";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "<br>connected";
}

$sql = "CREATE DATABASE student";
$result = mysqli_query($conn,$sql);

if($result){echo "database connected";}else{
    echo "<br>database not connected ";
}
?>