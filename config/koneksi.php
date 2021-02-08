<?php
$db_hostname = 'localhost';
$db_username = 'id16111390_root';
$db_password = '{C[yS[f<EdF!a5bo';
$db_name = 'id16111390_worked';


try {
    $conn = new PDO(
        "mysql:host=$db_hostname;dbname=$db_name",
        $db_username,
        $db_password
    );
} catch (PDOException $e) {
    die($e->getMessage());
}
