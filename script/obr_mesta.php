<?php

session_start();

$conn = mysqli_connect($_SESSION['serverip'],$_SESSION['username'],$_SESSION['password'],$_SESSION['database']);

if(!$conn){
    die("Ошибка подключения" . mysqli_connect_error());
}
echo "Подключено!";




?>