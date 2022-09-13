<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=eial-scale=1.0">

    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Sa Wisata</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container">
                <div class="box-navbar">
                    <div class="logo">
                        <h1>Sa Wisata</h1>
                    </div>
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#travel">Travel</a></li>
                        <li class="active"><a href="#form">Pesan Tiket</a></li>
                    </ul>
                    <i class="fa-solid fa-bars menu-bar"></i>
                </div>
            </div>
        </div>

        <div class="hero">
            <div class="container">
                <div class="box-hero">
                    <div class="box">
                        <h1>Destinasi Terbaik Untuk Liburan
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam.
                        </p>
                        <button>Selengkapnya</button>
                    </div>
                    <div class="box">
                        <img src="/assets/rajaAmpat.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- travel star -->
    <div class="pantai" id="travel">
        <div class="container">
            <div class="box-pantai">
                <div class="box">
                    <img src="/assets/GunungTrikora.jpg" alt="">
                    <h3>Destinasi Gunung Trikora Jayawijaya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nobis, reiciendis.</p>
                    <h4>Rp. 400.000</h4>
                    <button>Pesan</button>
                </div>
                <div class="box">
                    <img src="/assets//danauSentani.jpg" alt="">
                    <h3>Destinasi Danau Sentani Jayapura</h3>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nobis, reiciendis.</p>
                    <h4>Rp. 100.000</h4>
                    <button>Pesan</button>
                </div>
                <div class="box">
                    <img src="/assets/rajaAmpat.jpg" alt="">
                    <h3>Destinasi Raja Ampat Sorong</h3>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nobis, reiciendis.</p>
                    <h4>Rp. 200.000</h4>
                    <button>Pesan</button>
                </div>
                <div class="box">
                    <img src="/assets/saljuJayawijya.jpg" alt="">

                    <h3>Destinasi Salju Gunung Jayawijaya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nobis, reiciendis.</p>
                    <h4>Rp. 300.000</h4>
                    <button>Pesan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- travel End -->

    <!-- form start -->

    <div class="mane" id="form">
        <div class="regform">
            <h2>FORM REGISTRASI</h2>
        </div>
        <div class="main">
            <form action="koneksi.php" method="post">

                <label class="name">Nama Lengkap</label>
                <input type="text" class="nama" name="nama">

                <label class="name">Nomor Indentitas</label>
                <input type="number" class="identitas" name="identitas">

                <label class="name">No. HP</label>
                <input type="number" class="hp" name="hp">

                <label class="name">Tempat Wisata</label>
                <select class="option" name="tempatwisata">
                    <!-- <option value="" disabled="disable" selected="selected">--pilih</option> -->
                    <option>Gunung Trikora Jayawijaya</option>
                    <option>Danau Sentani Jayapura</option>
                    <option>Raja Ampat Sorong</option>
                    <option>Salju Gunung Jayawijaya</option>
                </select>


                <label class="name">Tanggal Kunjungan</label>
                <input type="date" class="tanggalkunjungan" name="tanggalkunjungan">

                <label class="name">Pengunjung Dewasa</label>
                <input type="number" class="dewasa" name="pengunjungdewasa">

                <label class="name">Pengunjung Anak-Anak</label>
                <input type="number" class="anak_anak" name="pengunjunganakanak">

                <label class="harga_tiket">Harga Tiket :</label> <br>
                <label class="total">Total Bayar :</label> <br><br>
                <label class="pernyataan">
                    saya dan/atau rombongan telah membaca, memahami dan setuju
                    berdasarkan syarat dan ketentuan yang telah ditetapkan.
                </label><br>

                <input type="submit" name="total_bayar" value="Hitung Total Bayar">
                <input type="submit" name="proses" value="Pesan Tiket">
                <input type="submit" name="cancel" value="Cancel">

            </form>
        </div>
    </div>

    <!-- form end -->


    <!-- <script src="/js/script.js"></script> -->
</body>

</html>