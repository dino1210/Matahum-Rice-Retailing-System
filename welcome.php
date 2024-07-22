<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Matahum Inventory Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #2E7D32;
            color: white;
            padding: 15px;
            text-align: center;
            position: relative;
        }
        .log-out {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        .sidebar {
            width: 200px;
            background-color: #3b3f44;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow: auto;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar .logo img {
            display: block;
            margin: 0 auto;
            width: 150px;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            width: 100%;
            text-align: center;
        }
        .sidebar a:hover {
            background-color: #575a5e;
        }
        .profile {
            text-align: center;
            margin: 15px 0;
        }
        .profile p {
            margin: 5px 0 0 0;
        }
        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
        .card {
            background-color: yellow;
            padding: 15px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            display: inline-block;
            width: 22%;
        }
        .card h3 {
            margin: 0 0 10px 0;
        }
        .chart, .recent-orders, .low-stock-alert {
            background-color: white;
            padding: 15px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .recent-orders table, .low-stock-alert table {
            width: 100%;
            border-collapse: collapse;
        }
        .recent-orders th, .recent-orders td, .low-stock-alert th, .low-stock-alert td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome To Matahum Inventory Management</h1>
        <button class="log-out">Log Out</button>
    </div>

    <div class="sidebar">
        <div class="logo">
            <img src="Matahum Logo.png" alt="Matahum Logo">
        </div>
        <div class="profile">
            <p>Admin</p>
            <div style="background-color: green; height: 10px; width: 10px; border-radius: 50%; display: inline-block;"></div>
        </div>
        <a href="welcome.php">Dashboard</a>
        <a href="products.php">Products</a>
        <a href="suppliers.php">Suppliers</a>
        <a href="reports.php">Report</a>
        <a href="#">Settings</a>
    </div>

    <div class="main-content">
        <div class="card">
            <h3>Total Products</h3>
            <p>250</p>
        </div>
        <div class="card">
            <h3>Total Categories</h3>
            <p>15</p>
        </div>
        <div class="card">
            <h3>Total Suppliers</h3>
            <p>2</p>
        </div>
        <div class="card">
            <h3>Monthly Sales</h3>
            <p>₱ 10,000</p>
        </div>

        <div class="chart">
            <h3>Monthly Sales Data</h3>
            <img src="chart-placeholder.png" alt="Monthly Sales Data" style="width: 100%; height: auto;">
        </div>

        <div class="recent-orders">
            <h3>Recent Orders</h3>
            <table>
                <thead>
                    <tr>
                        <th>Ref No.</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td># 69691</td>
                        <td>01/16/23</td>
                        <td>Jasmine</td>
                        <td>420</td>
                        <td>₱ 1650</td>
                        <td>₱ 100,000</td>
                    </tr>
                    <tr>
                        <td># 36291</td>
                        <td>03/23/24</td>
                        <td>Red Rice</td>
                        <td>69</td>
                        <td>₱ 1320</td>
                        <td>₱ 50,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="low-stock-alert">
            <h3>Low Stock Alert</h3>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basmati Rice</td>
                        <td>6 kg</td>
                    </tr>
                    <tr>
                        <td>Jasmine Rice</td>
                        <td>0 kg</td>
                    </tr>
                    <tr>
                        <td>Arborio Rice</td>
                        <td>4 kg</td>
                    </tr>
                    <tr>
                        <td>Arborio Rice</td>
                        <td>0 kg</td>
                    </tr>
                    <tr>
                        <td>Jasmine Rice</td>
                        <td>0 kg</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
