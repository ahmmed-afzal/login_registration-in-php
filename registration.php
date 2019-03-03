<?php
session_start();
require_once'connection.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name     = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query  = "INSERT INTO users(username,email,password) VALUES(:username,:email,:password)";
    $stmt   = $con->prepare($query);
    $result = $stmt ->execute([
        ':username'    => $name,
        ':email'   => $email,
        ':password'=> $password
    ]);
    if($result){
        $_SESSION['message'] = "Data inserted successfully to the database";
        header('location:index.php');
        exit();
    }else{
        $_SESSION['message'] = "Something went wrong!";
        header('location:index.php');
        exit();
    }
}