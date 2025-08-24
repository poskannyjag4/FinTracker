<?php
session_start();

define('ROOT', dirname(__DIR__));

if(isset($_SESSION['email'])){
    header('Location: ./main/dashboard.php');
}
else{
    header('Location: ./signin/');
}


