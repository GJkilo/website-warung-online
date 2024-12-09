<?php
$product = isset($_GET['product']) ? $_GET['product'] : null;

// Tentukan deskripsi produk berdasarkan parameter
$product_details = [
    'nasi_goreng' => [
        'name' => 'Nasi Goreng',
        'description' => 'Nasi Goreng adalah makanan khas Indonesia yang terbuat dari nasi, telur, sayuran, dan bumbu rempah.',
        'image' => 'https://asset.kompas.com/crops/U6YxhTLF-vrjgM8PN3RYTHlIxfM=/84x60:882x592/1200x800/data/photo/2021/11/17/61949959e07d3.jpg',
        'price' => 10000
    ],
    'mie_goreng' => [
        'name' => 'Mie Goreng',
        'description' => 'Mie Goreng adalah hidangan mie yang digoreng dengan bumbu khas Indonesia dan sayuran.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL_ZKLgQKQvuPXMAoCh50vEkCgwIPMhpLdAA&s',
        'price' => 15000
    ],
    'kwetiaw_goreng_rebus' => [
        'name' => 'Kwetiaw Goreng/Rebus',
        'description' => 'Kwetiaw Goreng/Rebus adalah mie tipis khas Tionghoa yang dimasak dengan berbagai pilihan bahan.',
        'image' => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/08/07032610/Praktis-dan-Enak-Ini-Resep-Kwetiau-Goreng-Telur-yang-Lezat-.jpg.webp',
        'price' => 15000
    ]
];

if ($product && isset($product_details[$product])) {
    $product_info = $product_details[$product];
} else {
    // Jika produk tidak ditemukan, tampilkan pesan error atau default
    $product_info = [
        'name' => 'Produk Tidak Ditemukan',
        'description' => 'Deskripsi tidak tersedia.',
        'image' => 'https://via.placeholder.com/200',
        'price' => 0
    ];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Menu Masakan - <?php echo $product_info['name']; ?></title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
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

        .product-detail {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
        }

        .product-detail h2 {
            margin-top: 0;
            font-size: 2em;
            color: #333;
        }

        .product-detail p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
        }

        .product-detail img {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-top: 20px;
        }

        .product-detail form button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
        }

        .product-detail form button:hover {
            background-color: #218838;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <header>
        <h1>Deskripsi Produk</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="produk.php">Menu Kami</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="product-detail">
            <h2><?php echo $product_info['name']; ?></h2>
            <p><strong>Deskripsi:</strong> <?php echo $product_info['description']; ?></p>
            <p><strong>Harga:</strong> Rp <?php echo number_format($product_info['price'], 0, ',', '.'); ?></p>
            <img src="<?php echo $product_info['image']; ?>" alt="<?php echo $product_info['name']; ?>">
            <form action="order.php" method="POST">
                <input type="hidden" name="product_name" value="<?php echo $product_info['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $product_info['price']; ?>">
                <button type="submit">Beli Sekarang</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Warung Online. All Rights Reserved.</p>
    </footer>
</body>
</html>
