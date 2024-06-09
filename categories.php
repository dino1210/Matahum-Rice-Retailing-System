<?php
// Function to add rice brand to a category
function addRiceBrand(&$categories, $categoryName, $riceBrand, $weight) {
    foreach ($categories as &$category) {
        if ($category['name'] === $categoryName) {
            if (!isset($category['rice_brands'][$weight])) {
                $category['rice_brands'][$weight] = [];
            }
            array_push($category['rice_brands'][$weight], $riceBrand);
            break;
        }
    }
}

// Sample categories data
$categories = [
    [
        'name' => '5 Kilos',
        'rice_brands' => [
            '5' => ['Brand A', 'Brand B'],
        ]
    ],
    [
        'name' => '10 Kilos',
        'rice_brands' => [
            '10' => ['Brand C', 'Brand D'],
        ]
    ],
    [
        'name' => '25 Kilos',
        'rice_brands' => [
            '25' => ['Brand E', 'Brand F']
        ]
    ]
];

// Check if rice brand is added to a category
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['category']) && isset($_POST['riceBrand']) && isset($_POST['weight'])) {
        addRiceBrand($categories, $_POST['category'], $_POST['riceBrand'], $_POST['weight']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matahum Inventory Management - Categories</title>
    <style>
        /* Styles for sidebar, header, and other common elements */
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

        /* Modern styles for category list */
        .category-list {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .category-item {
            width: 30%; /* Adjust the width as needed */
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 20px;
        }

        .category-item:hover {
            transform: translateY(-5px);
        }

        .rice-brands {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .rice-brands li {
            margin-bottom: 5px;
            color: #333;
        }

        .add-rice-brand-form {
            margin-top: 20px;
        }

        .add-rice-brand-form input[type="text"],
        .add-rice-brand-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-rice-brand-form button {
            padding: 10px 20px;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-rice-brand-form button:hover {
            background-color: #34495e;
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
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Categories</h1>
        </header>
        <section class="category-list">
            <?php
            foreach ($categories as $category) {
                echo '<div class="category-item">';
                echo '<h2>' . htmlspecialchars($category['name']) . '</h2>';
                echo '<ul class="rice-brands">';
                if (isset($category['rice_brands'])) {
                    foreach ($category['rice_brands'] as $weight => $brands) {
                        echo '<h3>' . $weight . ' Kilos</h3>';
                        echo '<ul>';
                        foreach ($brands as $brand) {
                            echo '<li>' . htmlspecialchars($brand) . '</li>';
                        }
                        echo '</ul>';
                    }
                }
                echo '</ul>';
                echo '<div class="add-rice-brand-form">';
                echo '<form action="" method="post">';
                echo '<input type="hidden" name="category" value="' . htmlspecialchars($category['name']) . '">';
                echo 'Rice Brand: <input type="text" name="riceBrand" required>';
                echo 'Weight: <select name="weight" required>';
                echo '<option value="5">5 Kilos</option>';
                echo '<option value="10">10 Kilos</option>';
                echo '<option value="25">25 Kilos</option>';
                echo '</select>';
                echo '<button type="submit">Add Rice Brand</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </section>
    </div>
</body>
</html>
