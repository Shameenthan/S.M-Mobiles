<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Shop</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Import Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    
        /* body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
        }

        .menu-link button:hover {
            background-color: #d35400;
            transform: scale(1.05);
        } */

        /* Section Styles */ 
        section {
            margin: 40px auto;
            max-width: 1200px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            animation: slideUp 1s ease-out;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 2.5rem;
            color: #2980b9;
            text-align: center;
        }

        .product, .deal {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            animation: fadeInUp 1s ease-out;
        }

        .product:hover, .deal:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .product h3, .deal h3 {
            margin-bottom: 10px;
            font-size: 1.6rem;
            color: #2c3e50;
        }

        .product p, .deal p {
            color: #2980b9;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .product button, .deal button, .show-more {
            background-color: #2980b9;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 1.2rem;
            font-weight: 500;
            display: inline-block;
        }

        .product button:hover, .deal button:hover, .show-more:hover {
            background-color: #1f4d7b;
            transform: scale(1.05);
        }

        .show-more {
            margin-top: 10px;
            display: inline-block;
            padding: 12px 24px;
            border-radius: 5px;
            border: 2px solid #2980b9;
            color: #2980b9;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }

        .show-more:hover {
            background-color: #2980b9;
            color: #ffffff;
            transform: scale(1.05);
        }

        .social-icons {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin-top: 20px;
        }

        .social-icons li {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons li a img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: transform 0.3s;
        }

        .social-icons li a img:hover {
            transform: scale(1.2);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { transform: translateY(50px); }
            to { transform: translateY(0); }
        } */
    </style> */
</head>
<body>

    <div class="banner">
        S.M Mobiles
    </div>

    <header>
    <img src="Sammu/Logo.png" class="samee" alt="Your Logo">
        <nav>
            <ul>
                <li><a href="Login.php">Home</a></li>
                <li><a href="Login.php">Products</a></li>
                <li><a href="Login.php">Review</a></li>
                <li><a href="Login.php">Contact-US</a></li>
            </ul>
        </nav>
        <a href="Login.php" class="menu-link">
           <img src="Sammu/account.png" alt="Menu">
        </a>
    </header>

    <section id="featured-products">
        <h2>Featured Products</h2>
        <div class="product">
            <h3>iPhone 13 Pro</h3>
            <p>Starting from $999</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <div class="product">
            <h3>Samsung Galaxy S21 Ultra</h3>
            <p>Starting from $1199</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <div class="product">
            <h3>Redmi</h3>
            <p>Starting from $1179</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <a href="Product.php" class="show-more">Show More</a>
    </section>

    <section id="why-choose-us">
        <h2>Why Choose Us?</h2>
        <ul>
            <li>Wide Selection</li>
            <li>Expert Advice</li>
            <li>Competitive Prices</li>
            <li>Convenience</li>
        </ul>
    </section>

    <section id="top-deals">
        <h2>Top Deals of the Week</h2>
        <div class="deal">
            <h3>Google Pixel 5</h3>
            <p>Save $100! Now $599</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <div class="deal">
            <h3>OnePlus 9</h3>
            <p>Special Offer: Free Accessories Bundle</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <a href="Product.php" class="show-more">Show More</a>
    </section>

    <section id="stay-connected">
        <h2>Stay Connected</h2>
        <center><p>Follow us on social media for the latest updates and promotions:</p></center>
        <ul class="social-icons">
            <li><a href="#"><img src="Sammu/facebook-48.png" alt="Facebook"></a></li>
            <li><a href="#"><img src="Sammu/twitter-logo-48.png" alt="Twitter"></a></li>
            <li><a href="#"><img src="Sammu/instagram-48.png" alt="Instagram"></a></li>
        </ul>
    </section>

    <script>
        function bookNow() {
            window.location.href = "Login.php";
        }
    </script>
    
      <footer>
        <p>&copy; 2024 Phone Shop. All rights reserved.</p>
    </footer>


</body>
</html>
