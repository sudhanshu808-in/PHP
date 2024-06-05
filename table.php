<?php
echo "connecting to dataBase";
$servername="localhost";
$username="root";
$password="";
$database="student";
$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "<br>connected";
}
$sql="CREATE TABLE student_info (
    Nname VARCHAR(10),
    RollNo NUMBER
    );"
$result = mysqli_query($conn,$sql);

if($result){echo "database connected";}else{
    echo "<br>database not connected ";
}

?>