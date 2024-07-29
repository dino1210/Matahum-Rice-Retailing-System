<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matahum Inventory Management - Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding-top: 20px;
        }

        .sidebar .logo img {
            display: block;
            margin: 0 auto;
            width: 150px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            text-align: center;
            margin: 20px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        header h1 {
            margin: 0 0 20px 0;
            font-size: 24px;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-item {
            width: calc(33.333% - 20px);
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 8px;
            box-sizing: border-box;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .product-item:hover {
            background-color: #d0d4d9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .add-product {
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 8px;
            margin-top: 20px;
        }

        .add-product form {
            display: flex;
            flex-direction: column;
        }

        .add-product form label {
            margin: 10px 0 5px;
        }

        .add-product form input,
        .add-product form textarea,
        .add-product form select {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #bdc3c7;
        }

        .add-product form button {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-product form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="Matahum Logo.png" alt="Matahum Logo">
        </div>
        <ul>
            <li><a href="welcome.php">Dashboard</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="suppliers.php">Suppliers</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Products</h1>
        </header>
        <section class="product-list">
            <?php
            function getProducts() {
                $filePath = 'products.json';
                if (!file_exists($filePath)) {
                    file_put_contents($filePath, json_encode([]));
                }
                return json_decode(file_get_contents($filePath), true);
            }

            // Function to remove product from the list
            function removeProduct($productName) {
                $products = getProducts();
                foreach ($products as $index => $product) {
                    if (isset($product['name']) && $product['name'] === $productName) {
                        unset($products[$index]);
                        break;
                    }
                }
                file_put_contents('products.json', json_encode(array_values($products)));
            }

            // Check if a product is disliked and remove it
            if (isset($_POST['dislikeProduct'])) {
                removeProduct($_POST['dislikeProduct']);
            }

            $products = getProducts();
            foreach ($products as $product) {
                echo '<div class="product-item">';
                if (isset($product['name'])) {
                    echo '<h3>' . htmlspecialchars($product['name']) . '</h3>';
                } else {
                    echo '<h3>Product Name Not Available</h3>';
                }
                if (isset($product['description'])) {
                    echo '<p>' . htmlspecialchars($product['description']) . '</p>';
                } else {
                    echo '<p>Description Not Available</p>';
                }
                if (isset($product['sizes'])) {
                    echo '<ul>';
                    foreach ($product['sizes'] as $size) {
                        echo '<li>' . htmlspecialchars($size) . ' Pack</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>Sizes Not Available</p>';
                }
                // Add remove button
                echo '<form action="" method="post">';
                if (isset($product['name'])) {
                    echo '<input type="hidden" name="dislikeProduct" value="' . htmlspecialchars($product['name']) . '">';
                }
                echo '<button type="submit">Remove</button>';
                echo '</form>';
                echo '</div>';
            }
            ?>
        </section>
        <section class="add-product">
            <h2>Add New Product</h2>
            <form action="add_product.php" method="POST">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <label for="availableSizes">Available Sizes (comma-separated):</label>
                <input type="text" id="availableSizes" name="availableSizes" required>
                <button type="submit">Add Product</button>
            </form>
        </section>
    </div>
</body>
</html>
