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
    .btn-load-more{
        color: #074365;
        background-color: transparent;
        border: 1px solid #074365;
        padding: 10px;
        border-radius: 4px;
    }
    .btn-load-more:hover{
        background-color: #074365;
        color: white;
    }
</style>
</head>

<body class="f-inter">
    <?php include 'navbar.php'; ?>
    <div id="loading">
    <h1>Loading...</h1>
  </div>
  <script src="script.js"></script>

    <section>
        <div
            style="background-image: url(images/energi-terbarukan.png);height:fit-content;background-size: 100%;background-repeat: no-repeat;padding: 100px 50px;box-sizing: border-box;">
            <div class="" style="margin: 30px;">
                <p style="color: white;" class="mb-4">50 Tahun Greenpeace
                    Ciptakan Perubahan
                    •
                    #
                    EnergiTerbarukan</p>
                <h1 class="mb-4 news-header">#EnergiTerbarukan</h1>
                <div style="display: grid;grid-template-columns: 50%; justify-content: end;margin-bottom: 16px;">
                    <p class="mb-4">
                        Perubahan iklim global merupakan malapetaka yang akan datang! Kita telah mengetahui
                        sebabnya - yaitu manusia yang terus menerus menggunakan bahan bakar yang berasal dari
                        fosil seperti batu bara, minyak bumi dan gas bumi.
                    </p>
                    <p>Kita bisa menjadi generasi yang mengakhiri masa kejayaan batu bara.</p>
                </div>
                <div style="display: grid;grid-template-columns: 50%; justify-content: start;margin-bottom: 16px;">
                    <p class="mb-4">
                        Energi terbarukan bukan hanya mimpi, kita bisa memiliki sumber energi yang 100%
                        terbarukan dan berkelanjutan. kita butuh sumber energi yang tidak menyakiti kita, generasi
                        masa depan, atau planet kita.
                    </p>
                </div>
                <div class="news-header">Related Articles</div>
                <div class="news-item">
                    <div>
                        <img src="images/related1.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                    </div>
                    <div>
                        <div class="news-tag"><a href="">Siaran Pers
                            •
                            #
                            EnergiTerbarukan
                            #
                            Aktivisme
                            #
                            50 Tahun
                            #
                            Iklim</a></div>
                        <div class="news-tittle"><a href="">Adaro, Pembangunan PLTU Batu bara Baru Bukanlah Transisi</a></div>
                        <div class="news-slug">Pembangunan PLTU batu bara baru hanya akan memperburuk dampak krisis iklim, mencemari
                            lingkungan, merugikan masyarakat dan mencederai komitmen Indonesia dalam menurunkan
                            emisi karbon dari sektor energi</div>
                        <span class="news-author">Greenpeace Indonesia
                        </span>
                        <span class="news-date-released">11 Mei 2023</span>
                    </div>
                </div>

                <div class="news-item">
                    <div>
                        <img src="images/related6.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                    </div>
                    <div>
                        <div class="news-tag"><a href="">Cerita
                            •
                            #
                            EnergiTerbarukan
                            #
                            Laut</a></div>
                        <div class="news-tittle"><a href="">Proyek Minyak Bumi dan Kesalahan yang Berulang</a></div>
                        <div class="news-slug">Di mana ada pengeboran, di situlah terjadi tumpahan minyak. Ketergantungan kita kepada
                            minyak bumi memicu perubahan iklim, dan menghabiskan biaya yang besar. Rekam jejak
                            industri minyak dunia juga menunjukkan bahwa kebocoran dan tumpahan minyak bumi
                            merupakan hal yang tak terhindarkan ketika minyak bumi dibor.</div>
                        <span class="news-author">Sherina Redjo</span>
                        <span class="news-date-released">12 April 2023</span>
                    </div>
                </div>

                <div class="news-item">
                    <div>
                        <img src="images/related7.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                    </div>
                    <div>
                        <div class="news-tag"><a href="">Siaran Pers
                            •
                            #
                            EnergiTerbarukan
                            #
                            Iklim</a></div>
                        <div class="news-tittle"><a href="">IPCC Ungkap Krisis Iklim Makin Nyata, Aksi Iklim Ambisius Dibutuhkan Sekarang</a></div>
                        <div class="news-slug">Kenaikan suhu Bumi bisa menuju angka 2.8°C pada 2100, melebihi batas aman pemanasan
                            global. Aksi iklim yang ambisius dibutuhkan sekarang juga.</div>
                        <span class="news-author">Greenpeace Indonesia</span>
                        <span class="news-date-released">22 Maret 2023</span>
                    </div>
                </div>

                <button class="btn-load-more">
                      Load More
                    </button>
            </div>
        </div>

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
                                style="border-radius: 0;margin:10px 0px 10px 0px;padding: 0px 10px 0px 10px;"
                                type="email" name="" id="">
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
                        menghubungi Anda tentang produk dan layanan kami. Anda dapat berhenti berlangganan dari
                        komunikasi
                        ini kapan pun. Untuk informasi tentang cara berhenti berlangganan,serta praktik privasi dan
                        komitmen
                        kami untuk melindungi privasi Anda, tinjau Kebijakan Privasi kami.
                    </div>
                    <div class="news-button" style="font-weight: bold;">BERGABUNG SEKARANG</div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>

</body>

</html>