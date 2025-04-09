
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart Product Details</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
        }

        td img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .del-btn {
            background-color: #ff4d4d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .del-btn:hover {
            background-color: #d90000;
        }

        .del-btn:active {
            background-color: #b30000;
        }
    </style>
</head>
<body>
<div class="container">
       <h3>Add to cart product details</h3>
       <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
                    if (!$con) {
                        die("Sorry, we are facing a technical issue: " . mysqli_connect_error());
                    }


                    $sql = "SELECT * FROM `booking`";
                    $result = mysqli_query($con, $sql);
                    $totalPrice = 0;

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td><img src='{$row['Image']}' alt='{$row['Name']}'></td>
                                <td>{$row['Name']}</td>
                                <td>{$row['Price']}</td>
                                <td>
                                    <form method='POST'>
                                        <input type='hidden' name='det_id' value='{$row['id']}'>
                                        <button class='del-btn' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        ";
                    }

                    if (isset($_POST['det_id'])) {
                        $delete_id = $_POST['det_id'];
                        $con = mysqli_connect("localhost", "root", "", "s.m mobile shop", "3306");
                        if (!$con) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "DELETE FROM `booking` WHERE id = $delete_id";

                        if (mysqli_query($con, $sql)) {
                            echo"<script>alert('Product deleted successfully')</script>"; 
                            exit();
                        } else {
                            echo "<script>alert('Oops, something went wrong. Please try again.');</script>";
                        }

                        mysqli_close($con);
                        exit();
                    }
                ?>
            </tbody>
       </table>
    </div>
</body>
</html>