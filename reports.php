<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Rice Retailing Inventory Management</title>
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
            padding: 20px;
        }

        .reports-section {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .reports-section h2 {
            margin-top: 0;
        }

        .report {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .report h3 {
            margin: 0;
        }

        .report p {
            margin: 5px 0;
        }

        .filter-form {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .filter-form label {
            display: block;
            margin-bottom: 10px;
        }

        .filter-form input[type="date"],
        .filter-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .filter-form button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .filter-form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Reports</h1>
        <div class="return-dashboard">
            <a href="welcome.php">Return to Dashboard</a>
        </div>
    </header>
    <div class="container">
        <div class="filter-form">
            <h2>Filter Reports</h2>
            <form action="filter_reports.php" method="POST">
                <label for="report_type">Report Type:</label>
                <select id="report_type" name="report_type" required>
                    <option value="sales">Sales Report</option>
                    <option value="inventory">Inventory Report</option>
                    <option value="suppliers">Supplier Performance Report</option>
                </select>
                <label for="start_date">Start Date:</label>
                <input type="date" id="start_date" name="start_date" required>
                <label for="end_date">End Date:</label>
                <input type="date" id="end_date" name="end_date" required>
                <button type="submit">Generate Report</button>
            </form>
        </div>

        <div class="reports-section">
            <h2>Sales Report</h2>
            <div class="report">
                <h3>Monthly Sales</h3>
                <p>Total Sales: $10,000</p>
                <p>Number of Transactions: 200</p>
            </div>
            <div class="report">
                <h3>Weekly Sales</h3>
                <p>Total Sales: $2,500</p>
                <p>Number of Transactions: 50</p>
            </div>
            <!-- Add more sales reports as needed -->
        </div>

        <div class="reports-section">
            <h2>Inventory Report</h2>
            <div class="report">
                <h3>Current Stock</h3>
                <p>Basmati Rice: 500kg</p>
                <p>Jasmine Rice: 300kg</p>
                <p>Arborio Rice: 200kg</p>
            </div>
            <div class="report">
                <h3>Low Stock Alert</h3>
                <p>Basmati Rice: 50kg</p>
                <p>Jasmine Rice: 30kg</p>
                <p>Arborio Rice: 20kg</p>
            </div>
            <!-- Add more inventory reports as needed -->
        </div>

        <div class="reports-section">
            <h2>Supplier Performance Report</h2>
            <div class="report">
                <h3>Supplier A</h3>
                <p>On-time Deliveries: 95%</p>
                <p>Quality Rating: 4.8/5</p>
            </div>
            <div class="report">
                <h3>Supplier B</h3>
                <p>On-time Deliveries: 90%</p>
                <p>Quality Rating: 4.5/5</p>
            </div>
            <!-- Add more supplier performance reports as needed -->
        </div>
    </div>
</body>
</html>
