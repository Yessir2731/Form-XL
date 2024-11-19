<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=form-xl', 'root', '');

    // Check if the user exists
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: ../../index.php'); // Redirect to the form page after login
        exit();
    } else {
        echo "Invalid username or password.";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\style\style.css">
    <title>login page</title>
</head>
<body>
    
    
    <h2>login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    
</body>
</html>