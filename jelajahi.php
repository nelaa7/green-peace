<!DOCTYPE html>
<html>

<head>
    <link href="./css/style.css" rel="stylesheet" />
    <link href="./css/navbar.css" rel="stylesheet" />
    <link href="./css/footer.css" rel="stylesheet" />
    <title>Greenpeace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
        <style>
            .publikasi .card-subtitle{
                font-weight: normal;
            }
        </style>
</head>

<body class="f-inter">
    <?php include 'navbar.php'; ?>
    <!-- hero section -->
    <section>
        <div
            style="background-image: url(images/jelajahi1.png);height: 400px;background-size: 100% 400px;display: flex;">
            <div style="margin: auto;width: 60%;" class="text-center">
                <h1 style="font-size: 41px;" class="mb-4">Lindungi, Ciptakan Perubahan, Bergabung
                    Bersama Kami!</h1>
                <h3>Bumi yang rapuh ini membutuhkan suaramu.
                    Membutuhkan solusi, perubahan, dan tindakan nyata</h3>
            </div>
        </div>
    </section>

    <section>
        <div
            style="background-image: url(images/jelajahi2.png);height: 400px;background-size: 100% 400px;padding: 100px 50px;box-sizing: border-box;">
            <div class="grid-auto-column">
                <div style="color: white;">
                    <h1 class="mb-4">Lindungi</h1>
                    <p class="mb-4">Lindungi alam bisa kamu lakukan hari ini. Pelajari isu-isu lingkungan
                        di sekitarmu.</p>
                    <p class="text-link" style="width: fit-content;">Pelajari lebih lanjut ></p>
                </div>
                <div style="color: white;">
                    <h1 class="mb-4" style="color: #FFD204;">#Hutan</h1>
                    <p class="mb-4">Di seluruh dunia, hutan-hutan alami sedang dalam krisis.
                        Tumbuhan dan binatang yang hidup didalamnya terancam
                        punah. Ayo bersatu selamatkan hutan!</p>
                    <a href="hutan.php" class="hero-items-button"
                        style="padding: 10px 0px;box-sizing: border-box;width: 60%;">Hutan Butuh Kamu</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div
            style="background-image: url(images/jelajahi3.png);height: 400px;background-size: 100% 400px;padding: 100px 50px;box-sizing: border-box;">
            <div class="grid-auto-column">
                <div style="color: white;">
                    <h1 class="mb-4">Ciptakan Perubahan</h1>
                    <p class="mb-4">Greenpeace selalu berjuang untuk menciptakan perubahan demi
                        masa depan lingkungan yang lebih baik</p>
                    <p class="text-link" style="width: fit-content;">Pelajari lebih lanjut ></p>
                </div>
                <div style="color: white;">
                    <h1 class="mb-4" style="color: #FFD204;">#EnergiTerbarukan</h1>
                    <p class="mb-4">Tinggalkan ketergantungan penggunaan bahan bakar fosil
                        kearah sumber-sumber energi yang terbarukan, bersih dan
                        berkelanjutan.</p>
                    <a href="energi-terbarukan.php" class="hero-items-button"
                        style="padding: 10px 0px;box-sizing: border-box;width: 60%;">Ikut ciptakan perubahan</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div
            style="background-image: url(images/jelajahi4.png);height: 400px;background-size: 100% 400px;padding: 100px 50px;box-sizing: border-box;">
            <div class="grid-auto-column">
                <div style="color: white;">
                    <h1 class="mb-4">Gabung</h1>
                    <p class="mb-4">Kami mengajak kepada siapapun untuk menjadi bagian dari sebuah
                        perubahan; untuk hutan yang tetap lestari, untuk udara yang lebih
                        bersih, untuk laut yang lebih sehat…</p>
                    <p class="text-link" style="width: fit-content;">Pelajari lebih lanjut ></p>
                </div>
                <div style="color: white;">
                    <h1 class="mb-4" style="color: #FFD204;">#Relawan</h1>
                    <p class="mb-4">Di seluruh dunia, orang-orang dari semua lapisan masyarakat
                        berkumpul bersama di bawah bendera Greenpeace untuk
                        menghabiskan waktu luangnya berjuang demi lingkungan.
                        Dengan tindakan lokal yang…</p>
                    <a href="relawan.php" class="hero-items-button"
                        style="padding: 10px 0px;box-sizing: border-box;width: 60%;">Bergabunglah Bersama Kami</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="news-container">
            <h1 class="mb-4">Dukung Kampanye Greenpeace</h1>
            <div class="grid-auto-column">
                <div class="card" style="font-family: Montserrat;">
                    <a href="kampanye.php">
                    <img class="card-image " src="images/dukung1.png" alt="Card Image">
                    <div class="card-content">
                        <h4 class="card-subtitle">Berdonasi</h4>
                        <h3 class="card-title">Bebas Polusi Plastik</h3>
                        <p class="card-description">Dorong pemerintah dan korporasi untuk
                            menekan penggunaan plastik sekali pakai
                            dan berhanti mencemari lingkungan. </p>
                    </div>
                    <div class="card-footer" style="display: flex;justify-content: end;padding-right: 10px">
                        <a class="hero-items-button mb-4" href=""
                            style="color: white;font-weight: medium;padding: 10px;width: fit-content;">Ikut Beraksi</a>
                    </div>
                </a>
                </div>
                <div class="card" style="font-family: Montserrat;">
                    <img class="card-image " src="images/dukung2.png" alt="Card Image">
                    <div class="card-content">
                        <h4 class="card-subtitle">Berdonasi</h4>
                        <h3 class="card-title">Wujudkan Laut Sehat</h3>
                        <p class="card-description">Dorong pemerintah dan korporasi untuk
                            menekan penggunaan plastik sekali pakai
                            dan berhanti mencemari lingkungan. </p>
                    </div>
                    <div class="card-footer" style="display: flex;justify-content: end;padding-right: 10px">
                        <a class="hero-items-button mb-4" href=""
                            style="color: white;font-weight: medium;padding: 10px;width: fit-content;">Ikut Beraksi</a>
                    </div>
                </div>
                <div class="card" style="font-family: Montserrat;">
                    <img class="card-image " src="images/dukung3.png" alt="Card Image">
                    <div class="card-content">
                        <h4 class="card-subtitle">Berdonasi</h4>
                        <h3 class="card-title">Lindungi Hutan</h3>
                        <p class="card-description">Dorong pemerintah dan korporasi untuk
                            menekan penggunaan plastik sekali pakai
                            dan berhanti mencemari lingkungan. </p>
                    </div>
                    <div class="card-footer" style="display: flex;justify-content: end;padding-right: 10px">
                        <a class="hero-items-button mb-4" href=""
                            style="color: white;font-weight: medium;padding: 10px;width: fit-content;">Ikut Beraksi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="news-container" >
            <div class="news-header">Artikel Terbaru</div>
            <div class="news-item">
                <div>
                    <img src="images/news3.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
                <div>
                    <div class="news-tag"><a href="">Cerita
                            •
                            #
                            Aktivisme
                            #
                            Demokrasi
                            #
                            Hutan
                            #
                            Perdamaian
                            #
                            Pekerjaan</a></div>
                    <div class="news-tittle"><a href="">Gerakan Lingkungan dan Buruh Mesti Bersatu, Sebab Perjuangan
                            Iklim adalah
                            Perjuangan Kelas</a></div>
                    <div class="news-slug">Di Indonesia dan pelbagai belahan dunia, kelas pekerja terlibat dalam
                        perjuangan lingkungan
                        hidup dan keadilan iklim.</div>
                    <span class="news-author">Arie Rompas</span>
                    <span class="news-date-released">1 Mei 2023</span>
                </div>
            </div>
            <div class="news-item">
                <div>
                    <img src="images/news5.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
                <div>
                    <div class="news-tag"><a href="">Cerita
                            •
                            #
                            Kapal
                            #
                            Pekerjaan
                            #
                            Laut</a></div>
                    <div class="news-tittle"><a href="">Pendakian yang Dingin dan Sepi untuk Pelindungan Pekerja
                            Migran</a></div>
                    <div class="news-slug">Kementerian Luar Negeri selangkah lebih maju mengupayakan proses ratifikasi
                        Konvensi ILO
                        188. Babak baru pelindungan awak kapal perikanan migran.</div>
                    <span class="news-author">Vela Andapita</span>
                    <span class="news-date-released">1 Mei 2023</span>
                </div>
            </div>
            <div class="news-item">
                <div>
                    <img src="images/news6.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
                <div>
                    <div class="news-tag"><a href="">Cerita
                            •
                            #
                            Pekerjaan</a></div>
                    <div class="news-tittle"><a href="">Dicari: Direct Dialogue Senior Team Leader</a></div>
                    <div class="news-slug">Memimpin dan mengelola tim Juru Kampanye Dialog Langsung (DDC) yang sedang
                        berkembang, melatih dan mendukung mereka, dengan berkonsultasi dengan Direct Dialogue
                        Coordinator dalam meningkatkan marjin pendapatan yang terus meningkat bagi organisasi
                        berdasarkan target bulanan yang ditentukan.</div>
                    <span class="news-author">Naviri Chandra</span>
                    <span class="news-date-released">28 April 2023</span>
                </div>
            </div>
            <a href="artikel-lebaran.php">
                <div class="news-item">
                    <div>
                        <img src="images/news1.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                    </div>
                    <div>
                        <div class="news-tag"><a href="">Cerita #iklim</a></div>
                        <div class="news-tittle"><a href="">Lebaran di Desa yang Tenggelam</a></div>
                        <div class="news-slug">Merayakan Idulfitri di desa yang terdampak krisis iklim.</div>
                        <span class="news-author">Greenpeace Indonesia</span>
                        <span class="news-date-released">23 April 2023</span>
                    </div>
                </div>
            </a>
            <!-- <div class="news-button">
                    Baca Lebih Lanjut
                </div> -->
        </div>
    </section>
    <section>
        <div class="news-container publikasi">
            <h1 class="mb-4 ">Publikasi</h1>
            <div class="grid-auto-column">
                <div class="" style="max-width:300px;">
                    <img src="images/publikasi1.png" class="card-image" alt="">
                    <div class="card-title">Karhutla dalam Lima Tahun Terakhir</div>
                    <h4 class="card-subtitle">22 Oktober 2020</h4>

                    <div class="news-slug">Laporan terbaru Greenpeace Asia
                        Tenggara 'Karhutla Dalam Lima Tahun
                        Terakhir' mengungkap kegagalan total</div>
                </div>
                <div class="" style="max-width:300px;">
                    <img src="images/publikasi2.png" class="card-image" alt="">
                    <div class="card-title">Laporan 2020-2021: Apa yang
                        ada di balik cakrawala?</div>
                    <h4 class="card-subtitle">21 Februari 2023</h4>

                    <div class="news-slug">Tak perlu diragukan lagi, tahun 2020 dan
                        2021 merupakan tahun-tahun yang
                        sangat menantang. Kerja-kerja</div>
                </div>
                <div class="" style="max-width:300px;">
                    <img src="images/publikasi3.png" class="card-image" alt="">
                    <div class="card-title">Aktivis Greenpeace melakukan protes di
                        Festival Cannes Lions, sebuah festival
                        iklan bergengsi di Eropa yang melibatk</div>
                    <h4 class="card-subtitle">27 Juni 2022</h4>

                    <div class="news-slug">Aktivis Greenpeace melakukan protes di
                        Festival Cannes Lions, sebuah festival
                        iklan bergengsi di Eropa yang melibatk</div>
                </div>
                <div class="" style="max-width:300px;">
                    <img src="images/publikasi4.png" class="card-image" alt="">
                    <div class="card-title">Cintai Bumi Lewat Makanan</div>
                    <h4 class="card-subtitle">8 Desember 2021</h4>

                    <div class="news-slug">Buku resep ini berisi tips berbelanja
                        ramah lingkungan, mengolah ampas kopi
                        bubuk menjadi lulur, dan 4 resep spesia</div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="news-container" style="font-family: Inter;">
            <div class="news-header">Bersama kita bisa membuat perubahan.</div>
            <div class="news-header" style="font-size: 20px;color:#636363;">Bergabung sekarang untuk mendapatkan
                informasi terbaru seputar kampanye lingkungan.</div>
        </div>
    </section>
    <section>
        <div style="background-color: #D4F1B8; font-family: Inter;">
            <div class="news-container" style="padding-bottom: 40px; margin-bottom: 0px;">
                <div class="grid-auto-column" style="padding-top: 30px;">
                    <div>
                        <div>Email</div>
                        <input class="nav-search-input"
                            style="border-radius: 0;margin:10px 0px 10px 0px;padding: 0px 10px 0px 10px;" type="email"
                            name="" id="">
                    </div>
                    <div>
                        <div>Nama Depan</div>
                        <input class="nav-search-input"
                            style="border-radius: 0;margin:10px 0px 10px 0px;padding: 0px 10px 0px 10px;"
                            type="nama_depan" name="" id="">
                    </div>
                    <div>
                        <div>Nama Belakang</div>
                        <input class="nav-search-input"
                            style="border-radius: 0;margin:10px 0px 10px 0px;padding: 0px 10px 0px 10px;"
                            type="nama_belakang" name="" id="">
                    </div>

                </div>
                <div class="news-slug">
                    Greenpeace Southeast Asia memerlukan informasi kontak yang Anda berikan kepada kami untuk
                    menghubungi Anda tentang produk dan layanan kami. Anda dapat berhenti berlangganan dari komunikasi
                    ini kapan pun. Untuk informasi tentang cara berhenti berlangganan,serta praktik privasi dan komitmen
                    kami untuk melindungi privasi Anda, tinjau Kebijakan Privasi kami.
                </div>
                <div class="news-button" style="font-weight: bold;">BERGABUNG SEKARANG</div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>

</body>

</html>