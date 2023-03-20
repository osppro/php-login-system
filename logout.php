<?php 

include 'config/config.php';

unset($_SESSION['id']);
session_destroy();
header("Location: ./");

 ?>