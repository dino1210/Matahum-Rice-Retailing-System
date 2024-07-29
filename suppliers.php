<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers - Rice Retailing Inventory Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .return-dashboard a {
            text-decoration: none;
            color: inherit;
        }

        .return-dashboard:hover {
            background-color: #2980b9;
        }

        .container {
            display: flex;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .suppliers-list {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .suppliers-list h2 {
            margin-top: 0;
        }

        .supplier {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .supplier h3 {
            margin: 0;
        }

        .supplier p {
            margin: 5px 0;
        }

        .add-supplier-form {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .add-supplier-form label {
            display: block;
            margin-bottom: 10px;
        }

        .add-supplier-form input[type="text"],
        .add-supplier-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .add-supplier-form button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-supplier-form button:hover {
            background-color: #2980b9;
        }

        /* Sidebar Styles */
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
                <h1>Suppliers</h1>
                <div class="return-dashboard">
                    <a href="welcome.php">Return to Dashboard</a>
                </div>
            </header>
            <div class="suppliers-list">
                <h2>All Suppliers</h2>
                <div class="supplier">
                    <h3>Supplier A</h3>
                    <p>Contact: John Doe</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Email: john@example.com</p>
                </div>
                <div class="supplier">
                    <h3>Supplier B</h3>
                    <p>Contact: Jane Smith</p>
                    <p>Phone: (987) 654-3210</p>
                    <p>Email: jane@example.com</p>
                </div>
                <!-- Add more supplier entries as needed -->
            </div>

            <div class="add-supplier-form">
                <h2>Add New Supplier</h2>
                <form action="add_supplier.php" method="POST">
                    <label for="supplier_name">Supplier Name:</label>
                    <input type="text" id="supplier_name" name="supplier_name" required>
                    <label for="contact_name">Contact Name:</label>
                    <input type="text" id="contact_name" name="contact_name" required>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                    <button type="submit">Add Supplier</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
