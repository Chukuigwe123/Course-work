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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&c</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="https://example.com/path/to/your/different-css-file.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navigation section -->
    <nav class="navbar">
        <div class="nav-center">
            <div class="nav-header">
                <a href="index.phpl" class="nav-logo">
                    <img src="./assets/logo2.jpg" alt="C%c Kitchen">
                </a>
            </div>
            <div class="nav-links">
                <a href="index.php" class="nav-link">Home</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="contact.php" class="nav-link">Contact Us</a>
                <a href="Recipe.php" class="nav-link">Recipes</a>
                <br>
                <br>
                <br>
                
                
                <!-- Additional links -->
                <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                    <a href="admin.php" class="nav-link">Admin Panel</a>
                    
                <?php else: ?>
                    
                <?php endif; ?>
                
            </div>
        </div>
    </nav>
    
    <!-- Optional: Include a separate navigation for logged-in users -->
    <?php if (isset($_SESSION['user_name'])): ?>
        <nav class="navbar justify-content-end align-items-center" style="background-color: #e3f2fd; padding-right: 50px;">
            <div class="text-end">
                Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?>!
                <a href="functions/logout.php">Logout</a>
            </div>
        </nav>
    <?php endif; ?>
    <style>
    .navbar {
    background-color: lightblue; /* Change background color */
    color: black; /* Change text color */
    padding: 10px; /* Add padding */
    border-radius: 5px; /* Add border radius */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Add box shadow */
    display: flex; /* Use flexbox */
    justify-content: flex-start; /* Align items to the start (left) */
    align-items: center; /* Center items vertically */
    </style>
}

</body>
</html>
