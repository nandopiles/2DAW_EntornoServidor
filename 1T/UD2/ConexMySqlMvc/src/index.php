<?php

require("../config.php");

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;unix_socket=$socket_path", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
