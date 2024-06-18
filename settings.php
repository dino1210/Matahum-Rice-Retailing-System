<?php
session_start();

// Initialize settings if not set
if (!isset($_SESSION['settings'])) {
    $_SESSION['settings'] = [
        'mode' => 'default',  // options: 'default', 'dark'
        'language' => 'en',   // options: 'en', 'es', 'fr', etc.
        'notifications' => true // options: true, false
    ];
}

// Function to update settings
function updateSettings($key, $value) {
    $_SESSION['settings'][$key] = $value;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mode'])) {
        updateSettings('mode', $_POST['mode']);
    }
    if (isset($_POST['language'])) {
        updateSettings('language', $_POST['language']);
    }
    if (isset($_POST['notifications'])) {
        updateSettings('notifications', $_POST['notifications'] === 'true' ? true : false);
    }
}

// Get current settings
$currentSettings = $_SESSION['settings'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        body {
            background-color: <?php echo $currentSettings['mode'] === 'dark' ? '#333' : '#fff'; ?>;
            color: <?php echo $currentSettings['mode'] === 'dark' ? '#fff' : '#000'; ?>;
        }
    </style>
</head>
<body>
    <h1>Settings</h1>
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
</body>
</html>
