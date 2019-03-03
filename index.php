<?php
session_start();
$message = $_SESSION['message'] ?? null;
?>
<?php
if(isset($_SESSION['email'],$_SESSION['id'])){
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
    <title>Login Registration</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container ">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Registration Here</h3>
            </div>
            <?php if(isset($message)):?>
                <div class="alert alert-info">
                    <?php echo "$message"; ?>
                </div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <div class="card-body">
            <form action='registration.php' method="POST" >
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username"  placeholder="Enter username">
                  
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email">
                  
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div>
                    <p>Already have accout? <a href="login.php" class="btn btn-danger">login here</a></p>
                </div>
                <button type="submit" class="btn btn-primary">Registration</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>