<?php
require './database/submit_form_pengambilan.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengambilan Item P3K</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="back-button">
        <a href="index.php"><img src="image/weui_back-outlined.png" alt="button-back"></a>
    </div>
    <h2 class="title">Form Pengambilan Item P3K</h2>
    <div class="form-pengecekan">
        <form method="post" action="./database/submit_form_pengambilan.php">
            <input type="text" name="Nama" placeholder="Nama" required>
        <input type="date" name="Tanggal" required>
        <select name="Barang" required>
            <option value="">Pilih Barang</option>
            <option value="Kasa">Kasa Steril</option>
            <option value="Perban (lebar 5 cm)">Perban (lebar 5 cm)</option>
            <option value="Perban (lebar 10 cm)">Perban (lebar 10 cm)</option>
            <option value="Plester (lebar 1,25 cm)">Plester (lebar 1,25 cm)</option>
            <option value="Plester cepat hansaplast">Plester cepat hansaplast</option>
            <option value="Kapas pembalut (50 gram)">Kapas pembalut (50 gram)</option>
            <option value="Kain segitiga">Kain segitiga</option>
            <option value="Peniti">Peniti</option>
            <option value="Sarung tangan sekali pakai">Sarung tangan sekali pakai</option>
            <option value="Masker">Masker</option>
            <option value="Pinset">Pinset</option>
            <option value="Pen Light">Pen Light</option>
            <option value="Gelas untuk cuci mata">Gelas untuk cuci mata</option>
            <option value="Kantong plastik bersih">Kantong plastik bersih</option>
            <option value="Aquades @100 ml">Aquades @100 ml</option>
            <option value="Povidon lodin (60 ml)">Povidon lodin (60 ml)</option>
            <option value="Alkohol 70%">Alkohol 70%</option>
            <!-- Tambahkan opsi sesuai kebutuhan -->
        </select>
        <input type="number" name="Jumlah" placeholder="Jumlah" required>
        <button type="submit">Submit</button>
    </form>
    <h3>History</h3>
    <table id="historyContainer">
        <thead>
            <tr><th>Nama</th><th>Tanggal</th><th>Barang</th><th>Jumlah</th></tr>
        </thead>
        <tbody>
            <?php if ($history): ?>
                <?php foreach ($history as $row): ?>
                    <tr id="historyContent">
                        <td><?php echo htmlspecialchars($row['nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['tanggal']); ?></td>
                        <td><?php echo htmlspecialchars($row['barang']); ?></td>
                        <td><?php echo htmlspecialchars($row['jumlah']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                <tr><td colspan="4">No history available.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
