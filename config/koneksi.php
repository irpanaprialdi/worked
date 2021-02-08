<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'worked';


try {
    $conn = new PDO(
        "mysql:host=$db_hostname;dbname=$db_name",
        $db_username,
        $db_password
    );
} catch (PDOException $e) {
    die($e->getMessage());
}
