<?php
	session_start(); // memulai session
	unset($_SESSION['username']); // menghapus session
	header("location: login.php"); // kembali ke login.php
 ?>