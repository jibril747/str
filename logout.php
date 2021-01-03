<?php session_start();
unset($_SESSION['username']);
unset($_SESSION['status']);
session_destroy();
header("Location: index.php");
?>