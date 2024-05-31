<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rice Variety Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
        }

        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        h1 {
            margin: 0;
        }

        .return-dashboard {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .return-dashboard:hover {
            background-color: #2980b9;
        }
        
        .return-dashboard a {
            text-decoration: none;
            color: inherit;
        }

        .cabinet {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .product {
            background-color: #ecf0f1;
            width: 300px;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product h2 {
            margin-top: 0;
        }

        .product p {
            margin-top: 10px;
        }

        .product ul {
            padding: 0;
            list-style-type: none;
        }

        .product li {
            margin-top: 5px;
        }

        .add-product-form {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 30px 20px;
            width: calc(100% - 40px);
        }

        .add-product-form label {
            display: block;
            margin-bottom: 10px;
        }

        .add-product-form input[type="text"],
        .add-product-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .add-product-form button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-product-form button:hover {
            background-color: #2980b9;
        }

        /* Sidebar Styles */
        .container {
            display: flex;
            width: 100%;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar-header h2 {
            margin: 0;
            font-size: 24px;
        }

        .sidebar-header img {
            width: 120px;
            height: auto;
            margin-bottom: 10px;
        }

        .nav-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu ul li {
            margin-bottom: 10px;
        }

        .nav-menu ul li a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s;
        }

        .nav-menu ul li a:hover {
            background-color: #34495e;
        }

        /* Main Content Styles */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="Matahum Logo.png" alt="Logo">
                <h2>MATAHUM RICE TRADING</h2>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="welcome.php">Dashboard</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="categories.php">Categories</a></li>
                    <li><a href="suppliers.php">Suppliers</a></li>
                    <li><a href="reports.php">Reports</a></li>
                    <li><a href="settings.php">Settings</a></li>
                </ul>
            </nav>
        </aside>
        <div class="main-content">
            <header>
                <h1>Rice Variety Products</h1>
                <div class="return-dashboard">
                    <a href="welcome.php">Return to Dashboard</a>
                </div>
            </header>
            <main class="cabinet">
                <!-- Product cards here -->
                <div class="product">
                    <h2>Basmati Rice</h2>
                    <p>High-quality long-grain rice known for its fragrance and delicate flavor.</p>
                    <ul>
                        <li>5kg Pack</li>
                        <li>10kg Pack</li>
                        <li>25kg Pack</li>
                    </ul>
                </div>
                <div class="product">
                    <h2>Jasmine Rice</h2>
                    <p>Aromatic long-grain rice commonly used in Southeast Asian cuisine.</p>
                    <ul>
                        <li>5kg Pack</li>
                        <li>10kg Pack</li>
                        <li>25kg Pack</li>
                    </ul>
                </div>
                <div class="product">
                    <h2>Arborio Rice</h2>
                    <p>Short-grain rice known for its high starch content, ideal for risotto.</p>
                    <ul>
                        <li>5kg Pack</li>
                        <li>10kg Pack</li>
                        <li>25kg Pack</li>
                    </ul>
                </div>
                <!-- Add more rice products here -->

                <!-- Add new product form here -->
                <div class="add-product-form">
                    <h2>Add New Product</h2>
                    <form action="add_product.php" method="POST">
                        <label for="product_name">Product Name:</label>
                        <input type="text" id="product_name" name="product_name" required>
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" required></textarea>
                        <label for="sizes">Available Sizes:</label>
                        <input type="text" id="sizes" name="sizes" required>
                        <button type="submit">Add Product</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
