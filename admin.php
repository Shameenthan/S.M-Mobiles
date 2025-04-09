<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Import Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
            animation: fadeIn 1s ease-out;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
        }

        header img.samee {
            height: 50px;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .menu-link img {
            height: 30px;
        }

        .banner {
            background-color: #555;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 24px;
        }

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

        .product, .deal, .review, .contact {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            animation: fadeInUp 1s ease-out;
        }

        .product:hover, .deal:hover, .review:hover, .contact:hover {
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

        button, .show-more {
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

        button:hover, .show-more:hover {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #817676;
            color: white;
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
        }
    </style>
</head>
<body>

    <div class="banner">
        Admin Dashboard
    </div>

    <header>
        <img src="Sammu/Logo.png" class="samee" alt="Your Logo">
        <nav>
            <ul>
                <li><a href="#display-products">Products</a></li>
                <li><a href="#display-user">Users</a></li>
                <li><a href="#display-contacts">Contacts</a></li>
            </ul>
        </nav>
        <a href="Login.php" class="menu-link">
           <img src="Sammu/account.png" alt="Menu">
        </a>
    </header>

    <section id="add-product">
        <h2>Add Product</h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="form-group">
        <label for="product-name">Product Name:</label>
        <input type="text" id="product-name" name="product_name" required><br><br>
        </div>

        <div class="form-group">
        <label for="product-price">Price:</label>
        <input type="number" id="product-price" name="product_price" required><br><br>
        </div>

        <div class="form-group">
        <label for="product-description">Description:</label><br>
        <textarea id="product-description" name="product_description" rows="4" cols="50" required></textarea><br><br>
            </div>

           
         <div class="form-group">
            <label for="product-image">Product Image:</label>
            <input type="file" id="product-image" name="product-image"><br><br>
            </div>


            <button type="submit" name="smtb">Add Product</button>
        </form>
        <?php
          if(isset($_POST["smtb"])){
             $name = $_POST["product_name"];
             $price = $_POST["product_price"];
             $description = $_POST["product_description"];

             $image = "Sammu/" . basename($_FILES["product-image"]["name"]);

             if(move_uploaded_file($_FILES["product-image"]["tmp_name"], $image)) {
                $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
                if(!$con) {
                    die("Cannot upload the file, Please choose another file");
                }
                
                $sql = "INSERT INTO `product` (`Name`, `Price`, `Image`, `Discription`) 
                        VALUES ( '$name', '$price', '$image', '$description')";
                
                if(mysqli_query($con, $sql)) {
                    echo "<script>alert('Product uploaded Successfully');</script>";
                    //header('Admin.php');
                   // echo "<script>window.location.reload();</script>";  //Reload the page to see the new product
                } else {
                    echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                }
            }
          } 
        ?>
    </section>

    <section id="display-products">
    <h2>Display Products</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
        if(!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM product";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Price"] . "</td>";
                echo "<td>" . $row["Discription"] . "</td>";
                echo "<td>
                        <form method='GET' action='' onsubmit='return confirm(\"Are you sure you want to delete this product?\");'>
                            <input type='hidden' name='delete_id' value='" . $row["ID"] . "'>
                            <button type='submit' class='remove-button'>Delete</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No products available.</td></tr>";
        }

        mysqli_close($con); 

        if(isset($_GET["delete_id"])){
            $deleteid = $_GET["delete_id"];
            $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
            if(!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "DELETE FROM product WHERE `ID` = $deleteid";
            
            if(mysqli_query($con, $sql)) {
                // echo "<script>alert('Product deleted successfully');</script>";
                // echo "<script>window.location.reload();</script>"; // Reload the page to reflect the deletion
            } else {
                echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
            }
    
            mysqli_close($con);
        }
        ?>
        </tbody>
    </table>
</section>


<section id="display-user">
    <h2>Display Users</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
            if(!$con){
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM user";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>
                            <form method='GET' action='' onsubmit='return confirm(\"Are you sure you want to remove this user?\");'>
                                <input type='hidden' name='user_remove_id' value='" . $row["email"] . "'>
                                <button type='submit' class='remove-button'>Remove</button>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>User details are not available.</td></tr>";
            }

            if(isset($_GET["user_remove_id"])) {
                $UserId = $_GET["user_remove_id"];
                $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
                if(!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "DELETE FROM user WHERE email = '$UserId'";
                
                if(mysqli_query($con, $sql)) {
                    //echo "<script>alert('Successfully removed the user');</script>";
                    //echo "<script>window.location.reload();</script>"; // Reload the page to reflect the deletion
                } else {
                    echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                }
        
                mysqli_close($con);
            }
        ?>
        </tbody>
    </table>
</section>


    <section id="display-contacts">
    <h2>Display Contacts</h2>
    <table>
        <thead>
            <tr>
                <th>Contact Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $con = mysqli_connect("localhost","root","","s.m mobile shop","3306");
            if(!$con){
                die("connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM contact";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<tr>";
                    echo"<td>" . $row["name"] . "</td>";
                    echo"<td>" . $row["email"] . "</td>";
                    echo"<td>" . $row["message"] . "</td>";
                    echo "<td>
                            <form method='GET' action='' onsubmit='return confirm(\"Are you sure you want to remove this contact detail?\");'>
                                <input type='hidden' name='contact_remove_id' value='" . $row["email"] . "'>
                                <button type='submit' class='remove-button'>Remove</button>
                            </form>
                          </td>";
                    echo"</tr>";
                }
            } else {
                echo"<tr><td colspan='4'>Contact details are not available.</td></tr>";
            }

            if(isset($_GET["contact_remove_id"])) {
                $contactId = $_GET["contact_remove_id"];
                $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
                if(!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "DELETE FROM contact WHERE email = '$contactId'";
                
                if(mysqli_query($con, $sql)) {
                    //echo "<script>alert('Successfully removed the contact details');</script>";
                    //echo "<script>window.location.reload();</script>"; // Reload the page to reflect the deletion
                } else {
                    echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                }
        
                mysqli_close($con);
            }
        ?>
        </tbody>
    </table>
</section>


    <footer>
        <p>&copy; 2024 Phone Shop Admin Dashboard. All rights reserved.</p>
    </footer>

</body>
</html>
