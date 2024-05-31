<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rice Retailing Inventory Management Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            display: flex;
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

        .main-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .main-header h1 {
            margin: 0;
            font-size: 36px;
            color: #333;
        }

        .dashboard-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .dashboard-section h2 {
            margin-top: 0;
        }

        .dashboard-cards {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .dashboard-card {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            flex-basis: calc(50% - 20px);
            transition: transform 0.3s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .dashboard-card h3 {
            margin-top: 0;
            font-size: 18px;
            color: #333;
        }

        .dashboard-card p {
            margin: 10px 0 0;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .dashboard-card ul {
            margin-top: 20px;
            padding: 0;
            list-style-type: none;
        }

        .dashboard-card li {
            padding: 5px 0;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Inventory</h2>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="welcome.php">Dashboard</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="suppliers.php">Suppliers</a></li>
                    <li><a href="reports.php">Reports</a></li>
                    <li><a href="settings.php">Settings</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="main-header">
                <h1>Welcome to Rice Retailing Inventory Management</h1>
            </header>
            <section class="dashboard-section">
                <h2>Overview</h2>
                <div class="dashboard-cards">
                    <div class="dashboard-card">
                        <h3>Total Products</h3>
                        <p>250</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Total Categories</h3>
                        <p>15</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Total Suppliers</h3>
                        <p>
