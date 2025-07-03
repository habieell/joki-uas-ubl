<?php
$servername = "db"; 
$username = "root";
$password = "root";
$dbname = "uas_cloud"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
