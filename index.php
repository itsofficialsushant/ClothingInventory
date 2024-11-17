<?php

$conn = mysqli_connect("localhost", "root", "", "familyweardb");

if (!$conn){
    echo"no connection";
}

if (isset($_POST["submit"]))
{
    $category = $_POST["product_name"];

    $query1 = "INSERT INTO `categories`(`category_name`) VALUES ('$_POST[product_name]')";
    $query2 = "INSERT INTO `product_types`(`product_type_name`) VALUES ('$_POST[product_type]')";
    $query3 = "INSERT INTO `products`(`price`,`sales_price`,`wholesale_price`,`colors`,`sizes`,`patterns`,`waist_sizes`,`lengths`,`attributes`) VALUES ('$_POST[price]','$_POST[sales_price]','$_POST[price]','$_POST[price]','$_POST[price]','$_POST[price]','$_POST[price]','$_POST[price]')";
    $query4 = "INSERT INTO `sales`(`category_name`) VALUES ('$category')";
    if (mysqli_query($conn, $query1))
    {
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FamilyWear ~ Add Product</title>
    <style>
        /* General reset for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 2rem;
        }

        /* Container to center the form */
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Form header */
        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        /* Form labels */
        label {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #555;
        }

        /* Form inputs and select fields */
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0 1.5rem 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            color: #333;
        }

        /* Styling for the submit button */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            font-size: 1.2rem;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Styling for alert messages */
        .alert {
            padding: 1rem;
            background-color: #f44336;
            color: white;
            margin-bottom: 1.5rem;
            border-radius: 4px;
            font-size: 1rem;
            display: none; /* Hidden by default, will show on form error */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            label, input[type="text"], input[type="number"], select {
                font-size: 1rem;
            }

            input[type="submit"] {
                padding: 1rem;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
            <label for="product_name" >Product Name:</label>
            <input type="text" id="product_name" name="product_name" required><br><br>
        
            <label for="product_type">Product Type:</label>
            <select id="product_type" name="product_type" required>
                <option value="1">Polo Shirt</option>
                <option value="2">T-Shirt</option>
                <option value="3">Jeans</option>
                <!-- More options based on categories -->
            </select><br><br>
        
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required><br><br>
        
            <label for="wholesale_price">Wholesale Price:</label>
            <input type="number" id="wholesale_price" name="wholesale_price" step="0.01" required><br><br>
        
            <label for="colors">Available Colors:</label>
            <input type="text" id="colors" name="colors"><br><br>
        
            <label for="sizes">Available Sizes:</label>
            <input type="text" id="sizes" name="sizes"><br><br>
        
            <label for="patterns">Available Patterns (if any):</label>
            <input type="text" id="patterns" name="patterns"><br><br>
        
            <label for="waist_sizes">Waist Sizes (for jeans):</label>
            <input type="text" id="waist_sizes" name="waist_sizes"><br><br>
        
            <label for="lengths">Lengths (for jeans):</label>
            <input type="text" id="lengths" name="lengths"><br><br>
        
            <label for="sales_price">Sales Price (if applicable):</label>
            <input type="number" id="sales_price" name="sales_price" step="0.01"><br><br>
        
            <input type="submit" value="Add Product" name="submit">
        </form>
    <script>
        // Add validation for the form before submission
        document.getElementById("product-form").addEventListener("submit", function(event) {
            let productName = document.getElementById("product_name").value;
            let price = document.getElementById("price").value;
            let wholesalePrice = document.getElementById("wholesale_price").value;

            // Simple validation: Check if required fields are filled
            if (!productName || !price || !wholesalePrice) {
                alert("Please fill in all required fields!");
                event.preventDefault(); // Prevent form submission if validation fails
            } else {
                alert("Product added successfully!");
            }
        });

    </script>
</body>
</html>