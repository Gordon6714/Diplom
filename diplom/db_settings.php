<?php

$serverip = "localhost";
$database = "kinoteatr";
$username = "root";
$password = "";

$conn = mysqli_connect($serverip,$username,$password,$database);

if(!$conn){
    die("Ошибка подключения" . mysqli_connect_error());
}

?>
