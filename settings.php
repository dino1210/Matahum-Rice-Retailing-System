<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Rice Retailing Inventory Management</title>
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

        .settings-form {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .settings-form label {
            display: block;
            margin-bottom: 10px;
        }

        .settings-form select,
        .settings-form input[type="radio"] {
            margin-bottom: 10px;
        }

        .settings-form button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .settings-form button:hover {
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
                <h1>Settings</h1>
                <div class="return-dashboard">
                    <a href="welcome.php">Return to Dashboard</a>
                </div>
            </header>
            <div class="settings-form">
                <h2>Update Settings</h2>
                <form method="POST">
                    <label for="mode">Mode:</label>
                    <select name="mode" id="mode">
                        <option value="default">Default</option>
                        <option value="dark">Dark</option>
                    </select>
                    <br><br>

                    <label for="language">Language:</label>
                    <select name="language" id="language">
                        <option value="en">English</option>
                        <option value="es">Spanish</option>
                        <option value="fr">French</option>
                        <!-- Add more languages as needed -->
                    </select>
                    <br><br>

                    <label for="notifications">Notifications:</label>
                    <input type="radio" name="notifications" value="true"> On
                    <input type="radio" name="notifications" value="false"> Off
                    <br><br>

                    <button type="submit">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Rice Retailing Inventory Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            background-color: <?php echo $currentSettings['mode'] === 'dark' ? '#333' : '#fff'; ?>;
            color: <?php echo $currentSettings['mode'] === 'dark' ? '#fff' : '#000'; ?>;
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

        .settings-form {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .settings-form label {
            display: block;
            margin-bottom: 10px;
        }

        .settings-form select,
        .settings-form input[type="radio"] {
            margin-bottom: 10px;
        }

        .settings-form button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .settings-form button:hover {
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
                <h1>Settings</h1>
                <div class="return-dashboard">
                    <a href="welcome.php">Return to Dashboard</a>
                </div>
            </header>
            <div class="settings-form">
                <h2>Update Settings</h2>
                <form method="POST">
                    <label for="mode">Mode:</label>
                    <select name="mode" id="mode">
                        <option value="default" <?php echo $currentSettings['mode'] === 'default' ? 'selected' : ''; ?>>Default</option>
                        <option value="dark" <?php echo $currentSettings['mode'] === 'dark' ? 'selected' : ''; ?>>Dark</option>
                    </select>
                    <br><br>

                    <label for="language">Language:</label>
                    <select name="language" id="language">
                        <option value="en" <?php echo $currentSettings['language'] === 'en' ? 'selected' : ''; ?>>English</option>
                        <option value="es" <?php echo $currentSettings['language'] === 'es' ? 'selected' : ''; ?>>Spanish</option>
                        <option value="fr" <?php echo $currentSettings['language'] === 'fr' ? 'selected' : ''; ?>>French</option>
                        <!-- Add more languages as needed -->
                    </select>
                    <br><br>

                    <label for="notifications">Notifications:</label>
                    <input type="radio" name="notifications" value="true" <?php echo $currentSettings['notifications'] ? 'checked' : ''; ?>> On
                    <input type="radio" name="notifications" value="false" <?php echo !$currentSettings['notifications'] ? 'checked' : ''; ?>> Off
                    <br><br>

                    <button type="submit">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
