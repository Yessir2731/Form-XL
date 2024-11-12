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

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the data is from the P3K form
    if (isset($_POST['nama_pengecek']) && isset($_POST['tanggal']) && isset($_POST['kotak_p3k'])) {
        // P3K form submission
        $nama_pengecek = $_POST['nama_pengecek'];
        $tanggal = $_POST['tanggal'];
        $kotak_p3k = $_POST['kotak_p3k'];
        $kasa_steril = $_POST['kasa_steril'] ?? 0;
        $perban_5cm = $_POST['perban_5cm'] ?? 0;
        $perban_10cm = $_POST['perban_10cm'] ?? 0;
        $plester_1_25cm = $_POST['plester_1_25cm'] ?? 0;
        $plester_cepat = $_POST['plester_cepat'] ?? 0;
        $kapas_pembalut = $_POST['kapas_pembalut'] ?? 0;
        $kain_segitiga = $_POST['kain_segitiga'] ?? 0;
        $peniti = $_POST['peniti'] ?? 0;
        $sarung_tangan = $_POST['sarung_tangan'] ?? 0;
        $masker = $_POST['masker'] ?? 0;
        $pinset = $_POST['pinset'] ?? 0;
        $pen_light = $_POST['pen_light'] ?? 0;
        $gelas_cuci_mata = $_POST['gelas_cuci_mata'] ?? 0;
        $kantong_plastik = $_POST['kantong_plastik'] ?? 0;
        $aquades_100ml = $_POST['aquades_100ml'] ?? 0;
        $povidon_iodin = $_POST['povidon_iodin'] ?? 0;
        $alkohol_70 = $_POST['alkohol_70'] ?? 0;
        $buku_panduan = $_POST['buku_panduan'] ?? 0;
        $lembar_catatan = $_POST['lembar_catatan'] ?? 0;
        $daftar_isi_kotak = $_POST['daftar_isi_kotak'] ?? 0;

        // Insert into P3K form table
        $sql = "INSERT INTO pengecekan_kotak_p3k (nama_pengecek, tanggal, kotak_p3k, kasa_steril, perban_5cm, perban_10cm, plester_1_25cm, plester_cepat, kapas_pembalut, kain_segitiga, peniti, sarung_tangan, masker, pinset, pen_light, gelas_cuci_mata, kantong_plastik, aquades_100ml, povidon_iodin, alkohol_70, buku_panduan, lembar_catatan, daftar_isi_kotak) 
                VALUES (:nama_pengecek, :tanggal, :kotak_p3k, :kasa_steril, :perban_5cm, :perban_10cm, :plester_1_25cm, :plester_cepat, :kapas_pembalut, :kain_segitiga, :peniti, :sarung_tangan, :masker, :pinset, :pen_light, :gelas_cuci_mata, :kantong_plastik, :aquades_100ml, :povidon_iodin, :alkohol_70, :buku_panduan, :lembar_catatan, :daftar_isi_kotak)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nama_pengecek' => $nama_pengecek,
            ':tanggal' => $tanggal,
            ':kotak_p3k' => $kotak_p3k,
            ':kasa_steril' => $kasa_steril,
            ':perban_5cm' => $perban_5cm,
            ':perban_10cm' => $perban_10cm,
            ':plester_1_25cm' => $plester_1_25cm,
            ':plester_cepat' => $plester_cepat,
            ':kapas_pembalut' => $kapas_pembalut,
            ':kain_segitiga' => $kain_segitiga,
            ':peniti' => $peniti,
            ':sarung_tangan' => $sarung_tangan,
            ':masker' => $masker,
            ':pinset' => $pinset,
            ':pen_light' => $pen_light,
            ':gelas_cuci_mata' => $gelas_cuci_mata,
            ':kantong_plastik' => $kantong_plastik,
            ':aquades_100ml' => $aquades_100ml,
            ':povidon_iodin' => $povidon_iodin,
            ':alkohol_70' => $alkohol_70,
            ':buku_panduan' => $buku_panduan,
            ':lembar_catatan' => $lembar_catatan,
            ':daftar_isi_kotak' => $daftar_isi_kotak
        ]);
        echo "Data for P3K check submitted successfully!";
    }

    // Check if the data is from the APAR form
    if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['item']) && isset($_POST['quantity'])) {
        // APAR form submission
        $name = $_POST['name'];
        $date = $_POST['date'];
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];

        // Insert into APAR form table
        $sql = "INSERT INTO pengecekan_apar (name, date, item, quantity) VALUES (:name, :date, :item, :quantity)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':date' => $date,
            ':item' => $item,
            ':quantity' => $quantity
        ]);
        echo "Data for APAR check submitted successfully!";
    }

     // Form Pengecekan Wire Closet
     if (isset($_POST['Nama']) && isset($_POST['Tanggal']) && isset($_POST['Activity'])) {
        $nama = $_POST['Nama'] ?? '';
        $tanggal = $_POST['Tanggal'] ?? '';
        $activity = $_POST['Activity'] ?? '';

        // Insert data into pengecekan_wire_closet table
        $sql = "INSERT INTO pengecekan_wire_closet (nama, tanggal, activity) VALUES (:nama, :tanggal, :activity)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([ ':nama' => $nama, ':tanggal' => $tanggal, ':activity' => $activity ]);
        echo "Data for Pengecekan Wire Closet submitted successfully!";
    }
}

// Retrieve history data for P3K and APAR and WIRE CLOSET
$p3k_history_sql = "SELECT * FROM pengecekan_kotak_p3k ORDER BY tanggal DESC";
$p3k_stmt = $pdo->prepare($p3k_history_sql);
$p3k_stmt->execute();
$p3k_history = $p3k_stmt->fetchAll(PDO::FETCH_ASSOC);

$apar_history_sql = "SELECT * FROM pengecekan_apar ORDER BY date DESC";
$apar_stmt = $pdo->prepare($apar_history_sql);
$apar_stmt->execute();
$apar_history = $apar_stmt->fetchAll(PDO::FETCH_ASSOC);

$history_wire_closet = "SELECT * FROM pengecekan_wire_closet ORDER BY tanggal DESC";
$wire_stmt = $pdo->prepare($history_wire_closet);
$wire_stmt->execute();
$wire_history = $wire_stmt ->fetchAll(PDO::FETCH_ASSOC);
?>
