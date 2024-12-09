<?php
// Memulai session untuk melacak status pesanan
session_start();

// Cek jika data pesanan dikirim melalui POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];

    // Simulasi pemrosesan pesanan (misalnya, simpan ke database atau logika lainnya)
    // Jika ada koneksi ke database, masukkan data pesanan di sini

    // Tandai bahwa pesanan telah diproses dengan session
    $_SESSION['order_processed'] = true;

    // Redirect ke halaman terima kasih setelah pemrosesan
    header('Location: thank_you.php');
    exit(); // Menghentikan eksekusi lebih lanjut
} else {
    // Jika tidak ada data yang dikirim, redirect kembali ke halaman utama
    header('Location: index.php');
    exit();
}
?>
