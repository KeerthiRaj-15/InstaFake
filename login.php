<?php

$host = "sql206.ezyro.com";
$user = "ezyro_42240614";
$pass = "YOUR_DATABASE_PASSWORD";
$dbname = "ezyro_42240614_users";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password)
        VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Login Successful";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>