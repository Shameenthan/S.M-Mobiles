<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Shop - Reviews</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* Banner with Video Background */
        /* .banner {
            position: relative;
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            height: 300px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        } */

        /* .banner video {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        .banner h1 {
            position: relative;
            z-index: 1;
        } */

        /* Header */
        /* header {
            background-color: #212121;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        header img {
            height: 60px;
            width: auto;
            margin-left: 20px;
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

        nav ul li:first-child {
            margin-left: 0;
        }

        nav ul li a {
            font-family: 'Poppins', sans-serif;
            display: block;
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            transition: background-color 0.2s;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #3e3e3e;
        }

        .menu-link {
            cursor: pointer;
            margin-right: 20px;
        }

        .menu-link img {
            width: 48px;
            height: 48px;
        } */

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .review {
            background-color: #68dffa;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(228, 130, 3, 0.1);
            padding: 20px;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .review-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .review-author {
            font-weight: 600;
            color: #040505;
        }

        .review-rating {
            color: #07dd2b;
            font-weight: 500;
            margin-left: 10px;
        }

        .review-content {
            font-size: 16px;
            line-height: 1.6;
            color: #4606f7;
        }

        .review-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
            color: red;
            font-size: 14px;
        }

        .review-form {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }

        .review-form h3 {
            margin-top: 0;
        }

        .review-form label {
            display: block;
            margin-bottom: 10px;
        }

        .review-form input, .review-form textarea, .review-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .review-form input[type="submit"] {
            background-color: #212121;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        .review-form input[type="submit"]:hover {
            background-color: #333333;
        }

        /* Footer styles */
        /* footer {
            background-color: #212121;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        } */
    </style>
</head>
<body>
    <div class="banner">
        S.M Mobiles
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
                <li><a href="#">Review</a></li>
                <li><a href="Contact.php">Contact-US</a></li>
                <li><a href="Card.php">Card</a></li>
            </ul>
        </nav>
        <a href="Login.php" class="menu-link">
            <img src="Sammu/account.png" alt="Menu">
        </a>
    </header>

    <div class="container">
        <h2>Customer Reviews</h2>
        <div class="review">
            <div class="review-header">
                <img src="Sammu/R.png" alt="User Avatar">
                <span class="review-author">Rock john</span>
                <span class="review-rating">★★★★☆</span>
            </div>
            <p class="review-content">65W SuperCharge Adapter: for fast charging,Fast data transfer and charging,good qualityProtects,your phone while being environmentally friendly.,dual SIM card </p>
            <div class="review-footer">100 days ago</div>
        </div>

        <div class="review">
            <div class="review-header">
                <img src="Sammu/j.png" alt="User Avatar">
                <span class="review-author">James cameron</span>
                <span class="review-rating">★★★★★</span>
            </div>
            <p class="review-content">Praesent at risus sit amet mauris bibendum commodo. Donec eu finibus mauris. Sed efficitur dolor nec eros tincidunt, at faucibus velit efficitur.</p>
            <div class="review-footer">50 days ago</div>
        </div>

        <div class="review">
            <div class="review-header">
                <img src="Sammu/a.png" alt="User Avatar">
                <span class="review-author">Ananth</span>
                <span class="review-rating">★★★★★</span>
            </div>
            <p class="review-content">Sed efficitur dolor nec eros tincidunt, at faucibus velit efficitur.</p>
            <div class="review-footer">1 year ago</div>
        </div>

        <div class="review">
            <div class="review-header">
                <img src="Sammu/p.png" alt="User Avatar">
                <span class="review-author">paul cameron</span>
                <span class="review-rating">★★★★★</span>
            </div>
            <p class="review-content">high speed. Sed efficitur dolor nec eros tincidunt, at faucibus velit efficitur.</p>
            <div class="review-footer">2 month ago</div>
        </div>

        <div class="review">
            <div class="review-header">
                <img src="Sammu/j.png" alt="User Avatar">
                <span class="review-author">Jane Smith</span>
                <span class="review-rating">★★★★★</span>
            </div>
            <p class="review-content">To free temped glass, more expensive, at faucibus velit efficitur.</p>
            <div class="review-footer">5 years ago</div>
        </div>

        <div class="review">
            <div class="review-header">
                <img src="Sammu/j.png" alt="User Avatar">
                <span class="review-author">Jane stepan</span>
                <span class="review-rating">★★★★★</span>
            </div>
            <p class="review-content">To attach in Premium glass,5G connectivity,user friendly,manny application include,best performance work</p>
            <div class="review-footer">4 month ago</div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Phone Shop. All rights reserved.</p>
    </footer>
</body>
</html>