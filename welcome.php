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
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar-header img {
            width: 120px;
            height: auto;
            margin-bottom: 10px;
        }

        .sidebar-header h2 {
            margin: 0;
            font-size: 24px;
        }

        .nav-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%;
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
            flex-basis: calc(33.333% - 20px);
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

        /* Chart Styles */
        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
            margin-bottom: 20px;
        }

        /* Recent Activity Styles */
        .activity-log {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .activity-log h2 {
            margin-top: 0;
        }

        .activity-log ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .activity-log ul li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .activity-log ul li:last-child {
            border-bottom: none;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <p>10</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Monthly Sales</h3>
                        <p>$12,000</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>Low Stock Alerts</h3>
                        <ul>
                            <li>Basmati Rice - 10kg</li>
                            <li>Jasmine Rice - 5kg</li>
                            <li>Arborio Rice - 8kg</li>
                        </ul>
                    </div>
                    <div class="dashboard-card">
                        <h3>Recent Orders</h3>
                        <ul>
                            <li>Order #1024 - 5kg Basmati Rice</li>
                            <li>Order #1023 - 10kg Jasmine Rice</li>
                            <li>Order #1022 - 25kg Arborio Rice</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="dashboard-section chart-container">
                <h2>Sales Chart</h2>
                <canvas id="salesChart"></canvas>
            </section>
            <section class="dashboard-section activity-log">
                <h2>Recent Activity</h2>
                <ul>
                    <li>New supplier added: Supplier A</li>
                    <li>Product stock updated: Jasmine Rice - 100kg</li>
                    <li>New order placed: Order #1025</li>
                    <li>Report generated: Monthly Sales Report</li>
                </ul>
            </section>
        </main>
    </div>
    <script>
        // Sample data for the chart
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales ($)',
                data: [3000, 2000, 5000, 7000, 4000, 8000],
                backgroundColor: 'rgba(52, 152, 219, 0.2)',
                borderColor: 'rgba(52, 152, 219, 1)',
                borderWidth: 1
            }]
        };

        // Config for the chart
        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Monthly Sales Data'
                    }
                }
            },
        };

        // Render the chart
        window.onload = function() {
            const ctx = document.getElementById('salesChart').getContext('2d');
            new Chart(ctx, config);
        };
    </script>
</body>
</html>
