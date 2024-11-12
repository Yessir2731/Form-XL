<?php
require '../database/submit_form.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengecekan</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h2>Form Pengecekan Kotak P3K</h2>
    <form method="post">
        <!-- P3K Form -->
        <input type="text" name="nama_pengecek" placeholder="Nama Pengecek" required>
        <input type="date" name="tanggal" required>
        <select name="kotak_p3k" required>
            <option value="">Kotak P3K yang Diperiksa</option>
            <option value="Kotak P3K 1">P3K Lantai 1</option>
            <option value="Kotak P3K 2">P3K Lantai 2</option>
            <option value="Kotak P3K 3">P3K Lantai 3</option>
        </select>
        <input type="number" name="kasa_steril" placeholder="Jumlah Kasa Steril">
        <input type="number" name="perban_5cm" placeholder="Jumlah Perban (5 cm)">
        <input type="number" name="perban_10cm" placeholder="Jumlah Perban (10 cm)">
        <input type="number" name="plester_1_25cm" placeholder="Jumlah Plester (lebar 1.25 cm)">
        <input type="number" name="plester_cepat" placeholder="Jumlah Plester Cepat (Hansaplast)">
        <input type="number" name="kapas_pembalut" placeholder="Jumlah Kapas Pembalut">
        <input type="number" name="kain_segitiga" placeholder="Jumlah Kain Segitiga">
        <input type="number" name="peniti" placeholder="Jumlah Peniti">
        <input type="number" name="sarung_tangan" placeholder="Jumlah Sarung Tangan">
        <input type="number" name="masker" placeholder="Jumlah Masker">
        <input type="number" name="pinset" placeholder="Jumlah Pinset">
        <input type="number" name="pen_light" placeholder="Jumlah Pen Light">
        <input type="number" name="gelas_cuci_mata" placeholder="Jumlah Gelas Cuci Mata">
        <input type="number" name="kantong_plastik" placeholder="Jumlah Kantong Plastik">
        <input type="number" name="aquades_100ml" placeholder="Jumlah Aquades (100ml)">
        <input type="number" name="povidon_iodin" placeholder="Jumlah Povidon Iodin">
        <input type="number" name="alkohol_70" placeholder="Jumlah Alkohol 70%">
        <input type="number" name="buku_panduan" placeholder="Jumlah Buku Panduan">
        <input type="number" name="lembar_catatan" placeholder="Jumlah Lembar Catatan">
        <input type="number" name="daftar_isi_kotak" placeholder="Jumlah Daftar Isi Kotak">
        <button type="submit">Submit P3K</button>
    </form>

    
    <h3>P3K History</h3>
    <table>
        <thead>
            <tr><th>Nama Pengecek</th><th>Tanggal</th><th>Kotak P3K</th><th>Items</th></tr>
        </thead>
        <tbody>
            <?php foreach ($p3k_history as $history) { ?>
                <tr>
                    <td><?= htmlspecialchars($history['nama_pengecek']) ?></td>
                    <td><?= htmlspecialchars($history['tanggal']) ?></td>
                    <td><?= htmlspecialchars($history['kotak_p3k']) ?></td>
                    <td>Other P3K items...</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>