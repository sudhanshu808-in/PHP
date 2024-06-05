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
$sql="SELECT * FROM `student_info`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo var_dump($row);
    echo "<br>";
}
?>