<?php
// Memulai session untuk melacak status pesanan
session_start();

// Memastikan pesanan sudah diproses sebelumnya
if (!isset($_SESSION['order_processed']) || $_SESSION['order_processed'] !== true) {
    // Jika pesanan belum diproses, arahkan kembali ke halaman utama
    header('Location: index.php');
    exit(); // Menghentikan eksekusi lebih lanjut
}

// Menghapus session order_processed setelah ditampilkan, untuk mencegah akses ganda
unset($_SESSION['order_processed']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Terima Kasih atas Pesanan Anda!</h1>
        <p>Pesanan Anda telah berhasil diproses. Kami akan segera mengantarkan kepada Anda.</p>
        <!-- Menambahkan gambar di halaman terima kasih -->
        <img src="https://png.pngtree.com/png-clipart/20230227/ourmid/pngtree-thank-you-for-ordering-text-on-transparent-background-png-image_253712.png" alt="Terima Kasih" width="300">
        <p><a href="index.php">Kembali ke Beranda</a></p>
    </header>
</body>
</html>
