<?php
require_once 'functions/connection.php';
$conn->close(); 
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&c</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./css/main.css"> <!-- Include necessary meta tags, CSS, and JavaScript -->
</head>
<body>
    <!-- Navigation section -->
    <nav class="navbar">
        <div class="nav-center">
            <div class="nav-header">
                <a href="index.php" class="nav-logo">
                    <img src="./assets/logo2.jpg" alt="C%c Kitchen">
                </a>
                <button class="nav-btn btn">
                    <i class="fas fa-align-justify"></i>
                </button>
            </div>
            <div class="nav-links">
                <a href="index.php" class="nav-link">Home</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="contact.php" class="nav-link">Contact Us</a>
                <a href="Recipe.php" class="nav-link">Recipes</a>
                
                <!-- Search bar --> 
         <!-- Search bar -->
         <form method="post" action="Recipeinput.php">
                <input type="text" name="RecipeName" placeholder ="Search recipes...">
                <input type="submit" name="submit" value="Search" />
                &nbsp;&nbsp;&nbsp;&nbsp;
               
                <!-- End of Search bar -->
                
                <!-- Additional links -->
                <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                    <a href="admin.php" class="nav-link">Admin Panel</a>
                    <a href="index.php" class="nav-link">Index</a>
                <?php endif; ?>
                
            </div>
            <div class="nav-link contact-link">
                <?php if (!isset($_SESSION['user_name'])): ?>
                    <a href="login.php" class="btn">Login</a>
                <?php endif; ?>
                <?php if (isset($_SESSION['user_name'])): ?>
                    <div class="text-end">
                        Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?>!
                        <a href="functions/logout.php">Logout</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</body>
</html>
