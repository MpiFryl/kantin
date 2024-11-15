<!-- PHP -->
<?php
include "koneksidb.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    if (!empty($nama) && !empty($harga)) {
        $simpan = mysqli_query($koneksidb, "INSERT INTO tb_menu(nama, harga) VALUES ('$nama', '$harga')");
        if ($simpan) {
            echo "<script>alert('Pesanan berhasil ditambahkan!');</script>";
        } else {
            echo "<script>alert('Gagal menyimpan pesanan.');</script>";
        }
    }
}
?>
<!-- PHP end -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Kantin Sehat</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="header">
            <img src="IMG/aknb.png" alt="Aknb">
            <h3>Kantin Sehat SMK AK Nusa Bangsa</h3>
        </div>
        <ul>
            <li><a href="pesanan.php">
                    <h3>Pesananmu</h3><img src="IMG/kanan.png" alt="">
                </a></li>
        </ul>
    </nav>
    <!-- Navbar end -->

    <!-- container -->
    <div class="main">
        <!-- Sidebar -->
        <aside class="aside">
            <div class="sidebar">
                <div class="pilih">
                    <h3>Mau makan apa <br> hari ini?</h3>
                    <hr>
                    <div class="btn">
                        <button id="cemilan-btn"><img src="IMG/cemilan.png" alt=""><b>Cemilan</b></button>
                        <button id="lauk-btn"><img src="IMG/lauk.png" alt=""><b>Lauk</b></button>
                        <button id="minuman-btn"><img src="IMG/minuman.png" alt=""><b>Minuman</b></button>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Sidebar end -->

        <!-- Menu -->
        <section class="section">
            <div>
                <div class="menu">
                    <div>
                        <h1>Menu kita hari ini...</h1>
                        <hr>
                    </div>

                    <!-- Cemilan Menu -->
                    <div id="cemilan-menu" class="menu-category">
                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/bengbeng.jpeg" alt="">
                                    <div class="bengbeng">
                                        <h1>Bengbeng</h1>
                                        <p>Rp. 2.000</p>
                                        <input type="hidden" name="nama" value="Bengbeng">
                                        <input type="hidden" name="harga" value="2000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>

                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/chocolatos.jpeg" alt="">
                                    <div class="chocolatos">
                                        <h1>Chocolatos</h1>
                                        <p>Rp. 1.000</p>
                                        <input type="hidden" name="nama" value="Chocolatos">
                                        <input type="hidden" name="harga" value="1000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>

                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/deka.jpeg" alt="">
                                    <div class="deka">
                                        <h1>Deka</h1>
                                        <p>Rp. 1.000</p>
                                        <input type="hidden" name="nama" value="Deka">
                                        <input type="hidden" name="harga" value="1000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>
                    </div>
                    <!-- Cemilan end -->

                    <!-- Lauk Menu -->
                    <div id="lauk-menu" class="menu-category" style="display: none;">
                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/kwetiau.jpeg" alt="">
                                    <div class="kwetiau">
                                        <h1>Kwetiau</h1>
                                        <p>Rp. 8.000</p>
                                        <input type="hidden" name="nama" value="Kwetiau">
                                        <input type="hidden" name="harga" value="8000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>
                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/nasgor.jpeg" alt="">
                                    <div class="nasigoreng">
                                        <h1>Nasi goreng</h1>
                                        <p>Rp. 8.000</p>
                                        <input type="hidden" name="nama" value="Nasi goreng">
                                        <input type="hidden" name="harga" value="8000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>
                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/nasiuduk.jpeg" alt="">
                                    <div class="nasiuduk">
                                        <h1>Nasi uduk</h1>
                                        <p>Rp. 5.000</p>
                                        <input type="hidden" name="nama" value="Nasi uduk">
                                        <input type="hidden" name="harga" value="5000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>
                    </div>
                    <!-- Lauk end -->

                    <!-- Minuman Menu -->
                    <div id="minuman-menu" class="menu-category" style="display: none;">
                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/auah.jpeg" alt="">
                                    <div class="aqua">
                                        <h1>Aqua</h1>
                                        <p>Rp. 4.000</p>
                                        <input type="hidden" name="nama" value="Aqua">
                                        <input type="hidden" name="harga" value="4000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>
                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/leemineral.jpeg" alt="">
                                    <div class="leemineral">
                                        <h1>Lee mineral</h1>
                                        <p>Rp. 4.000</p>
                                        <input type="hidden" name="nama" value="Lee mineral">
                                        <input type="hidden" name="harga" value="4000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>
                        <form action="" method="post">
                            <div class="nasgor">
                                <div>
                                    <img src="IMG/fruittea.jpeg" alt="">
                                    <div class="fruittea">
                                        <h1>Fruit tea</h1>
                                        <p>Rp. 6.000</p>
                                        <input type="hidden" name="nama" value="Fruit tea">
                                        <input type="hidden" name="harga" value="6000">
                                    </div>
                                </div>
                                <button name="simpan" type="submit"><b>Beli</b></button>
                            </div>
                        </form>
                    </div>
                    <!-- Minuman end -->

                </div>
            </div>
        </section>
        <!-- Menu end -->
    </div>
    <!-- Container end -->

    <script src="js/script.js"></script>
</body>

</html>