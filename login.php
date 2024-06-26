<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['loggedin'] = true;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="info-section">
            <div class="info-content">
                <h1>Matahum</h1>
                <h2>Rice Trading</h2>
            </div>
        </div>
        <div class="login-section">
            <div class="login-form">
                <h2>Login</h2>
                <?php if (isset($error)): ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php endif; ?>
                <form action="login.php" method="post">
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="forgot-password">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit">Login</button>
                    <div class="signup-link">
                        Not a member? <a href="#">Signup</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<style>
body {
  font-family: Arial, sans-serif;
  background-color: #007bff;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.container {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  display: flex;
  width: 800px; /* Adjusted width to accommodate both sections */
}

.info-section {
  background-color: #007bff;
  border-radius: 8px 0 0 8px;
  width: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.info-content {
  color: #fff;
  text-align: left;
  margin-left: 2rem;
}

.info-content h1 {
  margin: 0;
  font-size: 3rem;
  border-left: 4px solid #fff;
  padding-left: 1rem;
}

.info-content h2 {
  margin: 0;
  font-size: 2rem;
  border-left: 4px solid #fff;
  padding-left: 1rem;
  margin-top: 0.5rem;
}

.login-section {
  background-color: #fff;
  padding: 2rem;
  border-radius: 0 8px 8px 0;
  width: 50%;
}

.login-form {
  width: 100%;
}

.login-form h2 {
  margin-bottom: 1rem;
  text-align: center;
}

.input-group {
  margin-bottom: 1rem;
}

.input-group label {
  display: block;
  margin-bottom: 0.5rem;
}

.input-group input {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.forgot-password {
  text-align: right;
  margin-bottom: 1rem;
}

.forgot-password a {
  text-decoration: none;
  color: #007bff;
}

button {
  width: 100%;
  padding: 0.75rem;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: #fff;
  font-size: 1rem;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

.signup-link {
  text-align: center;
  margin-top: 1rem;
}

.signup-link a {
  text-decoration: none;
  color: #007bff;
}

</style>