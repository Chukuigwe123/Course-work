<?php
// Start the session
session_start();

// Placeholder for handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $yearStarted = htmlspecialchars($_POST['yearStarted']);
    $bio = htmlspecialchars($_POST['bio']);

    // Here, add your logic to store the data, such as database insertion
    // For now, let's just print the inputs to demonstrate
    echo "<h2>Your Input:</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Telephone: $telephone<br>";
    echo "Year Cooking Started: $yearStarted<br>";
    echo "Bio: $bio<br>";

    // After storing data, you might want to redirect or perform other actions
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            background-image: url("assets/login3.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .custom-container {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 400px; /* Adjust the width as needed */
        }
        .text-center {
            text-align: center;
        }
        .form-control {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col text-bg-light custom-container">
        <form method="post" action="functions/user_signup.php">
            <h5 class="text-center">Create a New Account</h5>
            <br>
            <br>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="First Last" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="telephone" class="form-control" id="telephone" name="telephone" placeholder="phone number">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">about you </label>
                <textarea class="form-control" id="bio" name="bio" rows="4" placeholder="Optional..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary text-center">Submit</button>
        </form>
        <br><br>
        <p class="text-center">Are you an existing chef? <a href="login.php">Log In</a></p>
    </div>
</div>
</body>
</html>
