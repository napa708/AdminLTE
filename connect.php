<?php

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "008_napat_salee_21-7-68";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (mysqli_connect_errno()) {
    die("การเชื่อมต่อผิดพลาด: " . mysqli_connect_error());
    exit;
}
