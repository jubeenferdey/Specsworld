<?php
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
}
mysqli_close($conn);
?>