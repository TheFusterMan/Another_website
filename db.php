<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "127.0.0.1";
$username = "root";
$password = "msitop";
$dbName = "first";

$link = mysqli_connect($servername, $username, $password, $dbName);

if (!$link) {
    die('Ошибка подключения:' . mysqli_connect_error());
}
?>