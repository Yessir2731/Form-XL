<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form APAR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form APAR</h2>
    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" required>
        <label for="date">Tanggal:</label>
        <input type="date" id="date" required>
        <label for="item">APAR yang dicek:</label>
        <select id="item">
            <option value="APAR 1">APAR 1</option>
            <option value="APAR 2">APAR 2</option>
        </select>
        <label for="quantity">Keterangan:</label>
        <input type="text" id="quantity" required>
        <button type="submit">Submit</button>
    </form>
    <h3>History</h3>
    <table id="historyContainer">
        <thead>
            <tr><th>Nama Pengecek</th><th>Tanggal</th><th>APAR</th><th>Keterangan</th></tr>
        </thead>
        <tbody></tbody>
    </table>
</body>
</html>