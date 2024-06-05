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
$name="skkkkkk";
$marks=69;
$sql="CREATE TABLE student(
    Name VARCHAR(10),
    RollNo NUMBER
    );"; 
$result = mysqli_query($conn,$sql);
$sql="INSERT INTO student_info(Name,RollNo) VALUES ('$name','$marks')";
mysqli_query($conn,$sql);
if($result){echo "database connected";}else{
    echo "<br>database not connected ";
}

?>