<?php
session_start();
if (isset($_SESSION['id']) === false) {
    header('Location: index.php');
}
