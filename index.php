<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-XL</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <img src="image/XL_logo_2016.svg.png" alt="logo" class="logo-xl">
    
    <div class="content_auth">
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- User is logged in -->
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
            <a class="content" href="private/auth/logout.php">Logout</a>
        <?php else: ?>
            <!-- User is not logged in -->
            <a class="content" href="private/auth/login.php">Login</a>
        <?php endif; ?>
    </div>

    <div class="title">
        <h1>FORM-XL <img src="image/img.png" alt="group"></h1>
    </div>

    <div class="card-container">
        <div class="card">
            <div class="card-body">  
                <a href="form_pengambilan_p3k.php" class="card-text">
                    <img src="image/hugeicons_first-aid-kit-public.png" alt="icon" class="icon">
                    P3K (public)
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">  
                <a href="private/form_p3k.php" class="card-text">
                    <img src="image/hugeicons_first-aid-kit.png" alt="icon" class="icon-p3k icon">
                    P3K
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">  
                <a href="private/form_apar.php" class="card-text">
                    <img src="image/streamline_fire-extinguisher-sign.png" alt="icon" class="icon">
                    APAR
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">  
                <a href="private/form_wire_closet.php" class="card-text">
                    <img src="image/solar_server-linear.png" alt="icon" class="icon">
                    SERVER
                </a>
            </div>
        </div>
    </div>
</body>
</html>
