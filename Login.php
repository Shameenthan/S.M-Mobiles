<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Signup Page</title>
<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        background-image: url('sammu/bg1.jpg');
        background-size: cover; 
        background-position: center; 
    }

    .container {
        display: flex;
        width: 90%;
        max-width: 900px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        overflow: hidden;
        margin: 20px;
    }

    .left-panel {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("sammu/phones.jpg");
        background-size: cover;
        background-position: center;
    }

    .right-panel {
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-container {
        text-align: center;
    }

    .form-container form {
        max-width: 300px;
        margin: 0 auto;
    }

    .form-container p {
        font-size: 24px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .form-container input {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .form-container button {
        width: 48%;
        padding: 12px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .form-container button:hover {
        background-color: #218838;
    }

    .links-container {
        margin-top: 20px;
    }

    .links-container a {
        color: #007bff;
        font-size: 14px;
        display: inline-block;
    }

    .links-container a:hover {
        text-decoration: underline;
    }

    .logo {
        margin-bottom: 30px;
    }

    .toggle-password {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
    }

    .input-container {
        position: relative;
    }
</style>
</head>
<body>

<?php
// Initialize the session and connect to the database
session_start();
$con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle the signup form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
    $Name = $_POST['signupName'];
    $Email = $_POST['signupEmail'];
    $password = $_POST['signupPassword'];

    $sql = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$Name', '$Email', '$password')";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Signup successful! Please login.');</script>";
    } else {
        echo "<script>alert('Signup failed. Please try again.');</script>";
    }
}

// Handle the login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    if($email == 'Admin@gmail.com' && $password == 'Admin1123'){
        header('location:admin.php');
        exit();
    }

    $sql = "SELECT * FROM `user` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {

        // Successful login
        $_SESSION['user'] = $email;
        header('Location: S.M-Mobiles user.php');
        exit();
    } else {
        echo "<script>alert('Incorrect username or password. Please try again.');</script>";
    }
}
?>

<div class="container">
    <div class="left-panel"></div>
    <div class="right-panel">
        
        <!-- Signin Form -->
        <div class="form-container" id="loginFormContainer">
            <div class="logo">
                <img src="Sammu/logo.jpg" width="100" height="150">
            </div>
            <form method="POST">
                <p>Welcome Back!</p>
                <div class="input-container">
                    <input type="email" name="loginEmail" placeholder="Email" required>
                </div>
                <div class="input-container">
                    <input type="password" name="loginPassword" placeholder="Password" required id="loginPassword">
                    <span class="toggle-password" onclick="togglePasswordVisibility('loginPassword')">&#128065;</span>
                </div>
                <div class="btn-container">
                    <button type="submit" name="login">Signin</button>  
                    <button type="button" id="switchToSignup">Signup</button>
                </div>
               
            </form>
        </div>

        <!-- Signup Form -->
        <div class="form-container" id="signupFormContainer" style="display: none;">
            <div class="logo">
                <img src="Sammu/logo.jpg" width="100" height="150">
            </div>
            <form method="POST">
                <p>Create an Account</p>
                <input type="text" name="signupName" placeholder="Name" required>
                <input type="email" name="signupEmail" placeholder="Email" required>
                <div class="input-container">
                    <input type="password" name="signupPassword" placeholder="Password" required id="signupPassword">
                    <span class="toggle-password" onclick="togglePasswordVisibility('signupPassword')">&#128065;</span>
                </div>
                <button type="submit" name="signup">Signup</button>
                <div class="links-container">
                    <a href="#" id="switchToLogin">Already have an account? Login here</a>
                </div>
            </form>
        </div> 
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('switchToSignup').addEventListener('click', function() {
            document.getElementById('loginFormContainer').style.display = 'none';
            document.getElementById('signupFormContainer').style.display = 'block';
        });

        document.getElementById('switchToLogin').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('signupFormContainer').style.display = 'none';
            document.getElementById('loginFormContainer').style.display = 'block';
        });
    });

    function togglePasswordVisibility(id) {
        var input = document.getElementById(id);
        if (input.type === "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
    }
</script>

</body>
</html>
