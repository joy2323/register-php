<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] ="You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $_SESSION['username']; ?> Dashboard</title>
</head>
<body>

<div class="header">
    <h2>
        Home Page
    </h2>
</div>
<div class="content">
    <!-- Notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- Logged in user information -->
    <?php if (isset($_SESSION['username'])) : ?>
        <p> Welcome <strong><?php echo $_SESSION['username']; ?> </strong> </p>
        <p> 
            <a href="index.php?logout='1'" style="color: red;">Logout</a>  
        </p>

        <!-- <a href="index.php"></a> -->
    <?php endif ?>
</div>
    
</body>
</html>



