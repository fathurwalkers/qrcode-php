<?php 

$host = 'localhost';
$name = 'root';
$dbname = 'qrcodetest';
$dbpass = '';

$conn = mysqli_connect($host, $name, $dbpass, $dbname);

if (!$conn) {
    die("Database tidak terconnect!". mysqli_connect_error());
}
