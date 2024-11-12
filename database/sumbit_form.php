<?php
// Database connection parameters
$host = 'localhost'; 
$dbname = 'form-xl'; 
$username = 'root'; 
$password = ''; 

// Establish a database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if form data is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $nama = $_POST['Nama'];
    $tanggal = $_POST['Tanggal'];
    $barang = $_POST['Barang'];
    $jumlah = $_POST['Jumlah'];

    // Prepare an SQL query to insert data
    $sql = "INSERT INTO pengambilan_item_p3k (nama, tanggal, barang, jumlah) VALUES (:nama, :tanggal, :barang, :jumlah)";
    $stmt = $pdo->prepare($sql);

    // Execute the query with data
    $stmt->execute([
        ':nama' => $nama,
        ':tanggal' => $tanggal,
        ':barang' => $barang,
        ':jumlah' => $jumlah
    ]);

    // Redirect or display success message
    echo "Data submitted successfully!";
}


// Retrieve history data from the database
$sql = "SELECT nama, tanggal, barang, jumlah FROM pengambilan_item_p3k ORDER BY tanggal DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$history = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

