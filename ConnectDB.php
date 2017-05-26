<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "fikom-umi";

$connect = new mysqli($host, $username, $password, $db_name);

if(mysqli_connect_errno()) {
    echo "Koneksi Error!!";
    exit;
}

?>
