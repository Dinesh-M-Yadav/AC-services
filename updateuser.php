<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="ac";

$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["uname"];
$uname=$_POST["pass"];

$con=mysqli_connect($servername,$username,$password,$dbname);


$sql= "UPDATE `register` SET `id` = '$id', `name` = '$name', `username` = '$username', `password` = '$pass' WHERE `register`.`id` = $id ";

if (mysqli_query($con,$sql)) {
    # code...
    header("Location:usermangement.php");
} else {
    # code...
    header("Location:error.html");
}

?>