<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengecekan Kotak P3K</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Pengecekan Kotak P3K</h2>
    <form method="post">
        <input type="text" name="Nama Pengecek" placeholder="Nama Pengecek" required>
        <input type="date" name="Tanggal" required>
        <select name="Kotak P3K" required>
            <option value="">Kotak P3K yang Diperiksa</option>
            <option value="Kotak P3K 1">P3K Lantai 1</option>
            <option value="Kotak P3K 2">P3K Lantai 2</option>
            <option value="Kotak P3K 2">P3K Lantai 3</option>
        </select>
        <input type="number" name="Kasa steril terbungkus" placeholder="Jumlah Kasa steril">
        <input type="number" name="Perban (5 cm)" placeholder="Jumlah Perban (5 cm)">
        <input type="number" name="Perban (10 cm)" placeholder="Jumlah Perban (10 cm)">
        <input type="number" name="Plester (lebar 1,25 cm)" placeholder="Jumlah Plester (lebar 1,25 cm)">
        <input type="number" name="Plester cepat hansaplast" placeholder="Jumlah Plester cepat hansaplast">
        <input type="number" name="Kapas pembalut (50 gram)" placeholder="Jumlah Kapas pembalut (50 gram)">
        <input type="number" name="Kain segitiga" placeholder="Jumlah Kain segitiga">
        <input type="number" name="Peniti" placeholder="Jumlah Peniti">
        <input type="number" name="Sarung tangan sekali pakai" placeholder="Jumlah Sarung tangan sekali pakai">
        <input type="number" name="Masker" placeholder="Jumlah Masker">
        <input type="number" name="Pinset" placeholder="Jumlah Pinset">
        <input type="number" name="Pen Light" placeholder="Jumlah Pen Light">
        <input type="number" name="Gelas untuk cuci mata" placeholder="Jumlah Gelas untuk cuci mata">
        <input type="number" name="Kantong plastik bersih" placeholder="Jumlah Kantong plastik bersih">
        <input type="number" name="Aquades @100 ml" placeholder="Jumlah Aquades @100 ml">
        <input type="number" name="Povidon lodin (60 ml)" placeholder="Jumlah Povidon lodin (60 ml)">
        <input type="number" name="Alkohol 70%" placeholder="Jumlah Alkohol 70%">
        <input type="number" name="Buku Panduan P3K" placeholder="Jumlah Buku Panduan P3K">
        <input type="number" name="Lembar Catatan" placeholder="Jumlah Lembar Catatan">
        <input type="number" name="Daftar isi kotak" placeholder="Jumlah Daftar isi kotak">
        <!-- Tambahkan input sesuai kebutuhan -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>
