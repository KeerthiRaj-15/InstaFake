<?php

$servername = "sqlXXX.epizy.com";
$username = "epiz_12345678";
$password = "YourPassword123";
$dbname = "epiz_12345678_users";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

if($conn->connect_error){
    die("Connection Failed");
}

?>