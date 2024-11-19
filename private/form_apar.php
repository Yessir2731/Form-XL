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
    <title>Form APAR</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<h2>Form Pengecekan APAR</h2>
    <form method="post" action="../database/submit_form.php">
        <!-- APAR Form -->
        <input type="text" name="name" placeholder="Nama Pengecek" required>
        <input type="date" name="date" required>
        <select name="item" required>
            <option value="APAR 1">APAR 1</option>
            <option value="APAR 2">APAR 2</option>
        </select>
        <input type="text" name="quantity" placeholder="Keterangan" required>
        <button type="submit">Submit APAR</button>
    </form>
    
    <h3>APAR History</h3>
    <table>
        <thead>
            <tr><th>Nama Pengecek</th><th>Tanggal</th><th>APAR</th><th>Keterangan</th></tr>
        </thead>
        <tbody>
            <?php foreach ($apar_history as $history) { ?>
                <tr>
                    <td><?= htmlspecialchars($history['name']) ?></td>
                    <td><?= htmlspecialchars($history['date']) ?></td>
                    <td><?= htmlspecialchars($history['item']) ?></td>
                    <td><?= htmlspecialchars($history['quantity']) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
