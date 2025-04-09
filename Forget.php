<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <style>
        /* Banner and header styles */

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background-image: url('sammu/bg1.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            padding: 40px;
        }

        .reset-form {
            text-align: center;
            width: 100%;
        }

        .reset-form h2 {
            font-size: 28px;
            font-weight: 600;
            color: #212121;
            margin-bottom: 30px;
        }

        .reset-form p {
            font-size: 16px;
            color: #555555;
            margin-bottom: 30px;
        }

        .reset-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .reset-form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
            font-weight: 500;
        }

        .reset-form button:hover {
            background-color: #0056b3;
        }

        .reset-form a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            transition: color 0.3s;
        }

        .reset-form a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>


    <div class="container">
        <div class="reset-form">
            <h2>Reset Password</h2>
            <p>Enter your email address, and we'll send you instructions to reset your password.</p>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <button type="submit" id="resetButton">Reset Password</button>
            <a href="Login.php">Back to Login</a>
        </div>
    </div>

    <script>
        document.getElementById('resetButton').addEventListener('click', function() {
            var email = document.getElementById('email').value;
            if (email) {
               
                alert('Instructions to reset your password have been sent to your email.');
            } else {
                alert('Please enter your email address.');
            }
        });
    </script>

</body>
</html>