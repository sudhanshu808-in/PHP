<?php 
// varibales in php starts with dollars
$name="harry";
$income=30000000;
echo "Employee : $name Salary : $income <br>";
echo "this person $name is a male <br>";
$friend = array("shubham","rohan","mohan","nigga_boi69");
echo var_dump($friend);

function sum($arr){
    $sum=0;
    foreach($arr as $k){
        $sum += $k;
    }
    return $sum;
}
$arr= [0,1,1,1,1,1];
$s=sum($arr);
echo " <br>the sum of marks is $s";
?>