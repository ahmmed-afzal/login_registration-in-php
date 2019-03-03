<?php 
session_start();
$email = $_SESSION['email'] ?? null;
$id = $_SESSION['id'] ?? null;
?>
<?php
if(!isset($_SESSION['email'],$_SESSION['id'])){
    $_SESSION['message'] = "You have to login first";
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login_registration</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <div class="alert alert-info">
        you are logged in as, <?php echo $email; ?>
    </div>
    <a href="logout.php?logout=<?php echo $id; ?>" class="btn btn-warning">Logout</a>
   </div> 
</body>
</html>