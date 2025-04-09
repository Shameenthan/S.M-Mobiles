<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Shop</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

    
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
        }

        
        .banner {
            font-size: 3rem;
            color: #ffffff;
            text-align: center;
            background-color: #333333;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
       
        /* .header {
            background-color: #2c3e50;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header img {
            height: 60px;
            width: auto;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #34495e;
        }

        .menu-link {
            display: flex;
            align-items: center;
        }

        .menu-link button {
            background-color: #e74c3c;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .menu-link button:hover {
            background-color: #c0392b;
        } */

        /* Section styles */
        section {
            margin: 30px auto;
            max-width: 1200px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }

        .product, .deal {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .product:hover, .deal:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product img, .deal img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product h3, .deal h3 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .product p, .deal p {
            color: #3498db;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .product button, .deal button, .show-more {
            background-color: #3498db;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 1rem;
            font-weight: 500;
        }

        .product button:hover, .deal button:hover, .show-more:hover {
            background-color: #2980b9;
        }

        .show-more {
            display: inline-block;
            border: 2px solid #3498db;
            color: #3498db;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s, color 0.3s;
        }

        .show-more:hover {
            background-color: #3498db;
            color: #ffffff;
        }

        .social-icons {
            list-style: none;
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
    </style>
</head>
<body>

    <div class="banner">
        S.M Mobiles
    </div>

    <header>
    <img src="Sammu/Logo.png" class="samee" alt="Your Logo">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="Review.php">Review</a></li>
                <li><a href="Contact.php">Contact-US</a></li>
                <li><a href="Card.php">Card</a></li>
            </ul>
        </nav>
        <a href="Login.php" class="menu-link">
           <img src="Sammu/account.png" alt="Menu">
        </a>
    </header>

    <section id="featured-products">
        <h2>Featured Products</h2>
        <div class="product">
            <img src="Sammu/iPhone 13 Pro.jpeg" alt="Product Image">
            <h3>iPhone 13 Pro</h3>
            <p>Starting from $999</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <div class="product">
            <img src="Sammu/Samsung Galaxy S24 Ultra.jpeg" alt="Product Image">
            <h3>Samsung Galaxy S24 Ultra</h3>
            <p>Starting from $1199</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <div class="product">
            <img src="Sammu/Redmi.jpeg" alt="Product Image">
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
            <img src="Sammu/Google Pixel 5.jpeg" alt="Product Image">
            <h3>Google Pixel 5</h3>
            <p>Save $100! Now $599</p>
            <button class="book-now" onclick='bookNow()'>Book Now</button>
        </div>
        <div class="deal">
            <img src="Sammu/OnePlus 9.jpeg" alt="Product Image">
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
        // booking process
        function bookNow() {
           
            window.location.href = "Product.php";
        }

        // Get all the "Book Now" buttons
        const bookNowButtons = document.querySelectorAll('.book-now');

        // Add event listeners to each "Book Now" button
        bookNowButtons.forEach(button => {
            button.addEventListener('click', bookNow);
        });
    </script>

    <footer>
        <p>&copy; 2024 Phone Shop. All rights reserved.</p>
    </footer>

</body>
</html>
