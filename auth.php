<?php
session_start();
require_once'connection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email    = $_POST['email'];
    $password = trim($_POST['password']);
    $query  = 'SELECT * FROM users WHERE email=:email';
    $stmt   = $con->prepare($query);
    $stmt->execute([
        ':email' => $email
    ]);
    $user = $stmt->fetch();
    if($user){
        
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header('location:dashboard.php');
            exit();
       
    }else{
        $_SESSION['message'] = "Email is not found in the database!";
        header('location:login.php');
        exit();
    }
}