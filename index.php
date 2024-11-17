<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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