<?php
session_start();
unset($_SESSION['User']);
header('location:Login.php');
?>