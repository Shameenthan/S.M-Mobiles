<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s.m mobile shop"; // Ensure database name is correct

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$result = $conn->query("SELECT * FROM product");

$products = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="header footer.css">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 150px;
            border-radius: 8px;
        }

        .product-details {
            max-width: 70%;
        }

        .product-title {
            font-size: 20px;
            margin: 0;
        }

        .product-price {
            font-size: 18px;
            color: #007bff;
        }

        .product-description {
            font-size: 16px;
            color: #555;
        }

        .btn-book {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: inline-block;
        }

        .btn-book:hover {
            background-color: #0056b3;
        }

        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header img {
            width: 100px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <img src="Sammu/Logo.png" class="samee" alt="Your Logo">
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="Review.php">Review</a></li>
                <li><a href="Contact.php">Contact-US</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Our Products</h1>
        <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="<?= htmlspecialchars($product['Image']) ?>" alt="<?= htmlspecialchars($product['Name']) ?>">
                <div class="product-details">
                    <h2 class="product-title"><?= htmlspecialchars($product['Name']) ?></h2>
                    <p class="product-price">$<?= htmlspecialchars($product['Price']) ?></p>
                    <p class="product-description"><?= htmlspecialchars($product['Discription']) ?></p>
                    <a href="booking.php?product_id=<?= htmlspecialchars($product['ID']) ?>" class="btn-book">Book Now</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>&copy; 2024 Phone Shop. All rights reserved.</p>
    </footer>
</body>
</html>
