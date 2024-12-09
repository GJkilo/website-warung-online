<?php
// Pemeriksaan login
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php'); // Redirect ke halaman login
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Warung Online</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Styling tambahan untuk gambar di halaman utama */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4; /* Warna latar belakang halaman */
        margin: 0;
    }

    header {
        background-color: #333; /* Warna latar belakang header */
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 2.5em;
    }

    header nav ul {
        list-style: none;
        padding: 0;
    }

    header nav ul li {
        display: inline;
        margin-right: 15px;
    }

    header nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 1.1em;
    }

    header nav ul li a:hover {
        text-decoration: underline;
    }

    .intro {
        text-align: center;
        padding: 40px;
        background-color: white;
        margin-top: 20px;
        border-radius: 8px; /* Menambahkan border radius untuk sudut yang lebih halus */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan halus */
    }

    .intro img {
        width: 50%; /* Mengatur gambar menjadi lebih kecil (50% dari lebar kontainer) */
        max-width: 400px; /* Ukuran maksimal gambar */
        height: auto;
        border-radius: 10px;
        margin-bottom: 10px; /* Mengurangi jarak bawah gambar */
        display: block; /* Menjadikan gambar sebagai block element */
        margin-left: auto;
        margin-right: auto; /* Mengatur gambar agar di tengah */
    }

    .intro h2 {
        font-size: 2em;
        color: #333;
        margin-top: 0;
    }

    .intro p {
        font-size: 1.2em;
        color: #555;
        line-height: 1.6;
    }

    /* Styling untuk tombol */
.btn {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    font-size: 1.1em;
    border-radius: 5px;
    margin-top: 10px;
    display: inline-block;
    text-align: center;
    transition: background-color 0.3s ease, transform 0.1s ease; /* Menambahkan transisi untuk efek scale */
}

.btn:hover {
    background-color: #218838;
}

.btn:active {
    transform: scale(0.95); /* Efek saat tombol ditekan (diklik) */
    background-color: #1e7e34; /* Warna sedikit lebih gelap saat klik */
}

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 15px 0;
        margin-top: 40px;
    }

    footer p {
        margin: 0;
        font-size: 1em;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
        .intro img {
            width: 80%; /* Menyesuaikan ukuran gambar pada layar kecil */
        }

        header h1 {
            font-size: 2em; /* Menyesuaikan ukuran font judul di header */
        }

        .intro h2 {
            font-size: 1.8em; /* Menyesuaikan ukuran font sub judul */
        }
    }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Warung Online!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="produk.php">Menu Kami</a></li>
                <li><a href="logout.php">Logout</a></li> <!-- Tambahkan link logout -->
            </ul>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h2>Belanja dengan Mudah dan Cepat</h2>
            <p>Temukan berbagai masakan favorit di warung kami. Kami menyediakan berbagai kategori masakan dengan harga terjangkau.</p>
            <!-- Gambar di halaman utama -->
            <img src="https://id-test-11.slatic.net/p/6c50f806c09e8c8c55821f37c17dbcae.png" alt="Warung Online" />
            <a href="produk.php" class="btn">Lihat menu</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Warung Online. All Rights Reserved.</p>
    </footer>
</body>
</html>
