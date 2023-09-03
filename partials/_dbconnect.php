<?php 

$servername = "localhost";
$username = "root";
$password = "";
$connection = mysqli_connect($servername,$username,$password,"fpo");
if (!$connection) {
    echo"connection lost";
}

 ?>