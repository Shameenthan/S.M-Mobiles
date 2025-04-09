<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Banner */
        .banner {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            color: #ffffff;
            text-align: center;
            background-color: #333333;
            padding: 15px;
            box-shadow: 0 5px 10px rgba(0, 1, 1, 0.3);
            position: relative;
        }

        .banner video {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            object-fit: cover;
            z-index: -1;
        }

        .banner h1 {
            margin: 0;
            padding: 20px;
            font-size: 2.5rem;
            background: rgba(0, 0, 0, 0.5);
            display: inline-block;
        }

        /* Header */
        header {
            background-color: #000000;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        }

        header img {
            height: 50px;
            width: auto;
            margin-left: 15px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 15px;
        }

        nav ul li:first-child {
            margin-left: 0;
        }

        nav ul li a {
            font-family: 'Poppins', sans-serif;
            display: block;
            padding: 10px 15px;
            color: #f0f0f0;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #555555;
            color: #ffffff;
        }

        .menu-link {
            cursor: pointer;
            margin-right: 15px;
        }

        .menu-link img {
            width: 40px;
            height: 40px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 15px;
        }

        .booking-list {
            list-style-type: none;
            padding: 0;
        }

        .booking-item {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .booking-details {
            display: flex;
            align-items: center;
        }

        .booking-actions {
            margin-top: 15px;
        }

        .booking-details img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .booking-info h3 {
            margin: 0;
            font-size: 18px;
            color: #333333;
        }

        .booking-info p {
            margin: 4px 0;
            color: #666666;
        }

        .booking-actions button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 13px;
            font-weight: 500;
        }

        .booking-actions button:hover {
            background-color: #0056b3;
        }

        /* Popup Styles */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .popup-content {
            margin-bottom: 15px;
        }

        .popup-close {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 13px;
            font-weight: 500;
        }

        .popup-close:hover {
            background-color: #0056b3;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>

    <div class="banner">
        <video src="Sammu/video.mp4" autoplay muted loop></video>
        <h1>S.M Mobiles</h1>
    </div>

    <header>
        <img src="Sammu/account.jpg" class="samee" alt="Your Logo">
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="Review.php">Review</a></li>
                <li><a href="Contact.php">Contact-US</a></li>
            </ul>
        </nav>
        <a href="Login.php" class="menu-link">
            <img src="Sammu/account.png" alt="Menu">
        </a>
    </header>

    <div class="container">
        <h2>Booking Dashboard</h2>
        <ul class="booking-list">
            <li class="booking-item">
                <div class="booking-details">
                    <img src="sammu/R.png" alt="Rock John">
                    <div class="booking-info">
                        <h3>Rock John</h3>
                        <p>iPhone 13 Pro</p>
                        <p>Booking Date: May 15, 2024</p>
                    </div>
                </div>
                <div class="booking-actions">
                    <button class="view-btn" data-name="Rock John" data-product="iPhone 13 Pro" data-date="May 15, 2024">View</button>
                </div>
            </li>
            <li class="booking-item">
                <div class="booking-details">
                    <img src="sammu/j.png" alt="James Smith">
                    <div class="booking-info">
                        <h3>James Smith</h3>
                        <p>Redmi Note 8</p>
                        <p>Booking Date: June 15, 2024</p>
                    </div>
                </div>
                <div class="booking-actions">
                    <button class="view-btn" data-name="James Smith" data-product="Redmi Note 8" data-date="June 15, 2024">View</button>
                </div>
            </li>
            <li class="booking-item">
                <div class="booking-details">
                    <img src="sammu/a.png" alt="Ananth">
                    <div class="booking-info">
                        <h3>Ananth</h3>
                        <p>Redmi 10</p>
                        <p>Booking Date: July 15, 2024</p>
                    </div>
                </div>
                <div class="booking-actions">
                    <button class="view-btn" data-name="Ananth" data-product="Redmi 10" data-date="July 15, 2024">View</button>
                </div>
            </li>
        </ul>
    </div>

    <div class="popup-overlay"></div>
    <div class="popup">
        <div class="popup-content">
            <h3 id="popup-name"></h3>
            <p id="popup-product"></p>
            <p id="popup-date"></p>
        </div>
        <button class="popup-close">Close</button>
    </div>

    <script>
        document.querySelectorAll('.view-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById('popup-name').innerText = button.getAttribute('data-name');
                document.getElementById('popup-product').innerText = button.getAttribute('data-product');
                document.getElementById('popup-date').innerText = button.getAttribute('data-date');
                document.querySelector('.popup-overlay').style.display = 'block';
                document.querySelector('.popup').style.display = 'block';
            });
        });

        document.querySelector('.popup-close').addEventListener('click', () => {
            document.querySelector('.popup-overlay').style.display = 'none';
            document.querySelector('.popup').style.display = 'none';
        });

        document.querySelector('.popup-overlay').addEventListener('click', () => {
            document.querySelector('.popup-overlay').style.display = 'none';
            document.querySelector('.popup').style.display = 'none';
        });
    </script>
</body>
</html>
