<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s.m mobile shop";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$result = mysqli_query($conn, "SELECT * FROM product");

$products = [];
if ($result->num_rows > 0) {
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
    <title>Phone Shop</title>
    <link rel="stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: black;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.product {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
}

.product:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.product img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 10px;
}

.product-title {
    font-size: 18px;
    margin-bottom: 10px;
    color: #212121;
}

.product-price {
    font-size: 16px;
    color: #007bff;
    margin-bottom: 15px;
}

.product-description {
    font-size: 14px;
    color: #555555;
    margin-bottom: 15px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.book-count {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #ffffff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    font-weight: 500;
    border: none;
    cursor: pointer;
}

.book-count:hover {
    background-color: #0056b3;
}

@media screen and (max-width: 768px) {
    .container {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }

    .product-title {
        font-size: 16px;
    }

    .product-price {
        font-size: 14px;
    }

    .product-description {
        font-size: 12px;
    }

    .book-count {
        padding: 8px 16px;
        font-size: 14px;
    }
}

    </style>
</head>
<body>
    <div class="banner">
        S.M Mobiles Shop
    </div>
    <header>
        <img src="Sammu/Logo.png" class="samee" alt="Your Logo">
        <nav>
            <ul>
                <li><a href="S.M-Mobiles user.php">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="Review.php">Review</a></li>
                <li><a href="Contact.php">Contact-US</a></li>
                <li><a href="Card.php">Card</a></li>
                
            </ul>
        </nav>
        <a href="Login.php" class="menu-link">
            <img src="Sammu/account.png" alt="Menu">
        </a>
    </header>
    

    <div class="container" id="product-container">
        

                <?php
                $con=mysqli_connect("localhost","root","","s.m mobile shop","3306");
                if(!$con){
                    die("cannot connect to the database");
                }

                $sql="SELECT * FROM `product`";
                $result=mysqli_query($con,$sql);

                if (mysqli_num_rows($result) > 0){
                    while($row= mysqli_fetch_assoc($result)){
                        echo"
                        <div class='product'>
                            <img src='{$row['Image']}' alt='{$row['Name']}'>
                            <div class='product-details'>
                                <h2 class='product-title'>{$row['Name']}</h2>
                                <p class='product-price'>{$row['Price']}</p>
                                <p class='product-description'>{$row['Discription']}</p>
                            </div>
                            <form method = 'post' enctype = 'multipart/form-data'>
                                <input type = 'hidden' name = 'productid' value = '".$row["ID"]."'>
                                <input type = 'hidden' name = 'productname' value = '".$row["Name"]."'>
                                <input type = 'hidden' name = 'productprice' value = '".$row["Price"]."'>
                                <input type = 'hidden' name = 'productimage' value = '".$row["Image"]."'>
                                <button class = 'book-count' name = 'book'>Book</button>
                            </form>
                        </div>
                   ";
                    }
                }else{
                    echo"<p>No products available.</p>";
                }
                mysqli_close($con);

                ?>
                <?php
                  if(isset($_POST['book'])){
                    $Id=$_POST['productid'];
                    $Name=$_POST['productname'];
                    $Price=$_POST['productprice'];
                    $image=$_POST['productimage'];

                    $con=mysqli_connect("localhost","root","","s.m mobile shop","3306");

                    if(!$con){
                        die("sorry, we are facing a technical issues:".mysqli_connect_error());
                    }

                    $sql = "INSERT INTO `booking` (`PId`, `Name`, `Price`, `Image`) values ('$Id', '$Name', '$Price', '$image')";
                    if(mysqli_query($con,$sql)){
                        echo"<script>alert('product $Name added to card');</script>";
                    }else{
                        echo"<script>alert('failded to add product to card');</script>";
                    }

                    mysqli_close($con);

                    // header('location: product.php'); 
                    exit();
                  }
                ?>
    </div>

    <footer>
        <p>&copy; 2024 Phone Shop. All rights reserved.</p>
    </footer>
</body>
</html>