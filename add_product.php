<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $availableSizes = explode(',', $_POST['availableSizes']);

    // Trim sizes to remove any surrounding whitespace
    $availableSizes = array_map('trim', $availableSizes);

    $filePath = 'products.json';
    if (!file_exists($filePath)) {
        file_put_contents($filePath, json_encode([]));
    }

    $products = json_decode(file_get_contents($filePath), true);

    $newProduct = [
        'name' => $productName,
        'description' => $description,
        'sizes' => $availableSizes
    ];

    $products[] = $newProduct;

    file_put_contents($filePath, json_encode($products));
    header("Location: products.php?success=1");
    exit();
} else {
    echo "<p>Invalid request</p>";
}
?>
