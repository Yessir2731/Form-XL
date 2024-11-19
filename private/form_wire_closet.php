<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ./auth/login.php'); // Redirect to login if not logged in
    exit();
}

require '../database/submit_form.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengecekan Wire Closet</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h2>Form Pengecekan Wire Closet</h2>
    <form method="post" action="../database/submit_form.php">
        <input type="text" name="Nama" placeholder="Nama" required>
        <input type="date" name="Tanggal" required>
        <input type="text" name="Activity" placeholder="Activity" required>
        <button type="submit">Submit</button>
    </form>
    <h3>Pengecekan Wire Closet History</h3>
<table>
    <thead>
        <tr><th>Nama</th><th>Tanggal</th><th>Activity</th></tr>
    </thead>
    <tbody>
        <?php foreach ($wire_history as $history) { ?>
            <tr>
                <td><?= htmlspecialchars($history['nama']) ?></td>
                <td><?= htmlspecialchars($history['tanggal']) ?></td>
                <td><?= htmlspecialchars($history['activity']) ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>
