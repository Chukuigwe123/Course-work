<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
    // User is already logged in; redirect based on role
    $redirectPage = ($_SESSION['user_role'] === 'admin') ? 'admin.php' : 'chef.php';
    header("Location: $redirectPage");
    exit;
}

// Placeholder for error message
$error_message = "";

// Example login check (You should replace this with your actual login check logic)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username']; // You should sanitize this
    $password = $_POST['password']; // And this

    // Here you should check the credentials against a database or other storage
    if ($username == 'demo' && $password == 'demo') { // Placeholder credentials
        $_SESSION['user_id'] = $username; // Set session variable or other login token
        header("Location: chef.php"); // Redirect on successful login
        exit;
    } else {
        $error_message = "Invalid username or password."; // Error message on failure
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <style>
        body {
            background-image: url("assets/login3.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
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
            
        }

        .text-center {
            text-align: center;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            color:black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col text-bg-light form-container">
            <form method="post" action="functions/user_login.php">
                <h5 class="text-center">Login to Your Account</h5>
                <br>
                <br>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="btn btn-primary text-center">Submit</button>
                <?php if (isset($_SESSION['login_error'])): ?>
                <p style="color: red;"><?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?></p>
                <?php endif; ?>
            </form>
            <br><br>
            <p class="text-center">New User ? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>

</body>

</html>
