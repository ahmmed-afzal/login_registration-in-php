<?php 
session_start();

if($_GET['logout']){
    unset($_SESSION['email'],$_SESSION['id']);
    header('location:login.php');
    exit();
}
