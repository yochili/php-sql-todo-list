<?php  
session_status() === PHP_SESSION_ACTIVE ?: session_start();
if (!($_SESSION['name'] && $_SESSION['id'])) {
    header('location: login.php');
}
?>