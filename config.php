<?php




try {
    //code...
    $host = "localhost";
    $dbname = "auth-sys";
    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=;dbname=$dbname", "$user", "$password");

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "error is: ". $e->getMessage();
}