<?php

$conn = mysqli_connect("localhost","root","", "testdb") or die("connection failed");

$value = $_POST['value'];
$result = $_POST["result"];


echo $value;


echo json_encode([$value, $result]);
//$sql = "insert into calculator(val, result) values('{$value}', {$result} ";
$sql ="INSERT INTO `calculator`(`val`, `result`) VALUES ('$value',$result)";

if(mysqli_query($conn, $sql)){
    echo 1;
}else
{
    echo 0;
} 

?>