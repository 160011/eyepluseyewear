<?php
$hostname="localhost";
$username="root";
$password="";
$database="dairy-pura";
$conn=mysqli_connect($hostname,$username,$password,$database);

if(!$conn)
{
    header("location:../500.php");
    echo "not success";
}

?>