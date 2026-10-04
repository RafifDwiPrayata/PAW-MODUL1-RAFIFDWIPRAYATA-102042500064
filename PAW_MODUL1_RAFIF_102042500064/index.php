<?php
$produk_list = [
    [
        "nama" => "Laptop Productivity",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 3
    ],
    [
        "nama" => "Monitor 24 Inch",
        "kategori" => "Display",
        "harga" => 1800000,
        "stok" => 4
    ],
    [
        "nama" => "Mechanical Keyboard",
        "kategori" => "Aksesoris",
        "harga" => 750000,
        "stok" => 10
    ],
    [
        "nama" => "Wireless Mouse",
        "kategori" => "Aksesoris",
        "harga" => 250000,
        "stok" => 0
    ],
    [
        "nama" => "Gaming Headset",
        "kategori" => "Audio",
        "harga" => 1200000,
        "stok" => 5
    ],
    [
        "nama" => "USB Flashdisk 64GB",
        "kategori" => "Penyimpanan",
        "harga" => 95000,
        "stok" => 0
    ]
];

$total_produk = count($produk_list);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cia Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="navbar">
        <div class="logo">Cia Store</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#katalog">Products</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </header>

    <div class="hero">
        <h2>Simple Tech Store.</h2>
        <p>Temukan berbagai perangkat dan aksesoris teknologi untuk kebutuhanmu.</p>
    </div>

    <h4>Our Products</h4>
    <h2 class="section-title">
        <span>Katalog Produk</span>
        <span style="font-size: 0.9rem; color: #64748b;">Total Produk: <?php echo $total_produk; ?></span>
    </h2>

    <div class="katalog">
        <?php foreach ($produk_list as $produk) : ?>
            <div class="card">
                <div>
                    <span class="kategori"><?php echo $produk['kategori']; ?></span>
                    <h3><?php echo $produk['nama']; ?></h3>

                    <div class="harga-box">
                        <?php if ($produk['harga'] >= 1000000) : ?>
                            <?php 
                                $diskon = $produk['harga'] * 0.10;
                                $harga_akhir = $produk['harga'] - $diskon;
                            ?>
                            <span class="badge-diskon">DISKON 10%</span>
                            <div class="harga-asli">Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></div>
                            <div class="harga-diskon">Rp <?php echo number_format($harga_akhir, 0, ',', '.'); ?></div>
                        <?php else : ?>
                            <div class="harga-normal">Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <div class="info-stok">Stok: <?php echo $produk['stok']; ?></div>

                    <?php if ($produk['stok'] > 0) : ?>
                        <div><span class="status tersedia">Tersedia</span></div>
                        <button class="btn-beli">Beli Sekarang</button>
                    <?php else : ?>
                        <div><span class="status habis">Stok Habis</span></div>
                        <button class="btn-beli" disabled>Stok Habis</button>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>&copy; 2026 Cia Store</p>
    </footer>

</body>
</html>