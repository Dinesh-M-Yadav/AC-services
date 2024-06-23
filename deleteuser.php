<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="ac";

$id=$_GET["id"];

$con=mysqli_connect($servername,$username,$password,$dbname);


$sql="DELETE FROM register where id='$id'";

if (mysqli_query($con,$sql)) {
    # code...
    header("Location:usermangement.php");
} else {
    # code...
    header("Location:error.html");
}

?>