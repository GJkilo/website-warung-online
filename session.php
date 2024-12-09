<?php
session_start(); // Mulai session

// Cek jika data pesanan dikirim melalui POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Cek apakah pesanan sudah diproses sebelumnya
    if (isset($_SESSION['order_processed']) && $_SESSION['order_processed'] === true) {
        // Jika sudah diproses, arahkan ke halaman terima kasih
        header('Location: thank_you.php');
        exit();
    }
    
    // Ambil data dari form
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];

    // Simulasi pemrosesan pesanan (misalnya, simpan ke database)
    // Koneksi ke database atau logika pemrosesan pesanan Anda di sini

    // Tandai bahwa pesanan sudah diproses
    $_SESSION['order_processed'] = true;

    // Redirect ke halaman terima kasih setelah pemrosesan
    header('Location: thank_you.php');
    exit(); // Pastikan untuk keluar setelah redirect agar tidak ada eksekusi lebih lanjut
} else {
    // Jika tidak ada data yang dikirim, redirect kembali ke halaman utama
    header('Location: index.php');
    exit();
}
?>
