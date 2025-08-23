<?php
session_start();

if(isset($_SESSION['email'])){
    header('Location: ./main/dashboard.php');
}
else{
    header('Location: ./signin/');
}


