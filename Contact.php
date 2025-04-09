<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Banner */
    /* .banner {
        font-family: 'Poppins', sans-serif;
        font-size: 3rem;
        color: #ffffff;
        text-align: center;
        background-color: #1e1e1e;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    } */

    /* Header */
    /* header {
        background-color: #ff6f00;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    header img {
        height: 60px;
        width: auto;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav ul li {
        margin-left: 20px;
    }

    nav ul li a {
        font-family: 'Poppins', sans-serif;
        display: block;
        padding: 10px 20px;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
    }

    nav ul li a:hover {
        background-color: #ff8c00;
        transform: scale(1.05);
    }

    .menu-link {
        cursor: pointer;
    }

    .menu-link img {
        width: 48px;
        height: 48px;
    } */

    /* Body */
    body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
        }

    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    h1, h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .contact-details h2 {
        margin-bottom: 15px;
        color: #333;
    }

    .contact-details p {
        margin-bottom: 10px;
    }

    form {
        display: grid;
        gap: 15px;
    }

    label {
        font-weight: bold;
        color: #555;
    }

    input, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    button {
        width: 100%;
        padding: 12px;
        background: linear-gradient(45deg, #ffb10a, #ff07d6);
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.1rem;
        transition: background 0.3s, transform 0.3s;
    }

    button:hover {
        background: linear-gradient(45deg, #ff07d6, #ffb10a);
        transform: scale(1.05);
    }

    #status {
        margin-top: 20px;
        text-align: center;
    }

    /* footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    } */
  </style>
</head>
<body>

    <div class="banner">
        S.M Mobiles Shop
    </div>

    <!-- <div class="banner">
        <video src="Sammu/video.mp4" autoplay muted loop></video>
        <h1>S.M Mobiles</h1>
    </div> -->
    
    <header>
        <img src="Sammu/Logo.png" class="samee" alt="Your Logo">
        <nav>
            <ul>
                <li><a href="S.M-Mobiles user.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="Review.php">Review</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="Card.php">Card</a></li>
            </ul>
        </nav>
        <a href="Login.php" class="menu-link">
           <img src="Sammu/account.png" alt="Menu">
        </a>
    </header>
    
    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-details">
            <h2>Our Contact Details</h2>
            <p>Email: sm@gmail.com</p>
            <p>Phone: +1 123-456-7890</p>
            <p>Address: 123 Main Street, Jaffna, Country</p>
        </div>
        <h2>Send Us a Message</h2>
        <form id="contact-form" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="telephone">phone:</label>
            <input type="tel" id="telephone" name="telephone" placeholder="Your Telephone" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>

            <button type="submit" name="addcontact">Submit</button>
            <button type="reset">Reset</button>
        </form>
        
        <div id="status"></div>
    </div>

    <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "s.m mobile shop"; // Changed database name to remove spaces

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if(isset($_POST['addcontact'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['telephone'];
            $message = $_POST['message'];

            $add = mysqli_query($conn, "INSERT INTO `contact` (`name`, `email`, `telephone`, `message`) VALUES ('$name', '$email', '$phone', '$message')");

            if ($add){
                echo "added";
                exit();
            }
            mysqli_close($conn);
        }
    ?>
    <footer>
        <p>&copy; 2024 S.M Mobiles. All rights reserved.</p>
    </footer>

</body>
</html>