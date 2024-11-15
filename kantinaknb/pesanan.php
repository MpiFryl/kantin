<?php
include "koneksidb.php";

if (isset($_POST['batal'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($koneksidb, "DELETE FROM tb_menu WHERE id = '$id'");
    if ($hapus) {
        echo "<script>alert('Pesanan berhasil dibatalkan!');</script>";
        echo "<script>window.location.href = 'pesanan.php';</script>";
    } else {
        echo "<script>alert('Gagal membatalkan pesanan.');</script>";
    }
}

$pesanan = mysqli_query($koneksidb, "SELECT id, nama, harga FROM tb_menu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/pesanan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Pesananmu</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="menu.php">
                    <img src="IMG/kiri.png" alt="">
                    <h3>Kembali</h3>
                </a></li>
        </ul>
    </nav>
    <!-- Navbar end -->

    <!-- Daftar pesanan -->
    <div class="pesanan-container">
        <?php if (mysqli_num_rows($pesanan) > 0): ?>
            <ul class="pesanan-list">
                <?php while ($row = mysqli_fetch_assoc($pesanan)): ?>
                    <li class="pesanan-item">
                        <div class="icikiwir">
                            <img src="IMG/<?php echo strtolower(str_replace(' ', '', $row['nama'])); ?>.jpeg"
                                alt="<?php echo $row['nama']; ?>" class="pesanan-img">
                            <div class="pesanan-info">
                                <h1><?php echo $row['nama']; ?></h1>
                                <p>Rp. <?php echo $row['harga']; ?></p>
                            </div>
                        </div>

                        <form method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="batal" class="batal"><b>Batalkan</b></button>
                        </form>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p class="no-pesanan">Wah, kamu belum pesan apapun nih...</p>
        <?php endif; ?>
    </div>
    <!-- End -->
</body>

</html>