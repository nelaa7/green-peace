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

</head>

<body>
    <?php include 'navbar.php'; ?>
    <!-- hero section -->
    <div id="loading">
    <h1>Loading...</h1>
  </div>
  <script src="script.js"></script>

    <script type='text/javascript'>
        $(document).ready(function() {$(&#39;img#closed&#39;).click(function(){$(&#39;#bl_banner&#39;).hide(90);});});
        </script>
        <div id='fixedban' style='width:100%;margin:auto;text-align:center;float:none;overflow:hidden;display:scroll;position:fixed;bottom:0;z-index:999;-webkit-transform:translateZ(0);'>
        <div>
            <a id='close-fixedban' onclick='document.getElementById(&apos;fixedban&apos;).style.display = &apos;none&apos;;' style='cursor:pointer;'>
            <img alt='close' src='http://1.bp.blogspot.com/-_A83iDM6JYc/VhtxROLILrI/AAAAAAAADK4/aM4ikIA6aqI/s1600/btn_close.gif' style='vertical-align:middle;' title='close button'/></a>
        </div>
        <div style='text-align:center;display:block;max-width:800px;height:auto;overflow:hidden;margin:auto'>
        <a href='donasi.php' title='Pelajari Selengkapnya'>
            <img alt='Banner iklan disini' src='images/popup.png' style='max-width:100%;height:auto;vertical-align:middle;'/></a>
        </div>
        </div>

    <section>
        <div class="hero-container">
            <div class="hero-items-container">
                <span class="" style="font-size: 28px; width: 40%;flex-basis: 1">Selamatkan Grime Nawa, Selamatkan Hutan
                    Papua</span>
                <span class="" style="font-size: 16px; width: 60%;flex-basis: 1;">Lebih dari 100 hektar hutan Lembah
                    Grime
                    Nawa
                    sudah hilang dan akan terus bertambah.
                    Sanksi tegas Para Pengusaha Nakal!
                </span>
                <a class="hero-items-button" href="artikel-grime-nawa.php">Pelajari Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- artikel terbaru -->
    <section>
        <div class="news-container">
            <div class="news-header">Artikel Terbaru</div>
            <a href="artikel-lebaran.php">
                <div class="news-item">
                    <div>
                        <img src="images/news1.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                    </div>
                    <div>
                        <div class="news-tag"><a href="">Cerita #iklim</a></div>
                        <div class="news-tittle"><a href="artikel-lebaran.php">Lebaran di Desa yang Tenggelam</a></div>
                        <div class="news-slug">Merayakan Idulfitri di desa yang terdampak krisis iklim.</div>
                        <span class="news-author">Greenpeace Indonesia</span>
                        <span class="news-date-released">23 April 2023</span>
                    </div>
                </div>
            </a>
            <div class="news-item">
                <div>
                    <img src="images/news2.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
                <div>
                    <div class="news-tag"><a href="">Cerita #Ummah4Earth #Polusi #iklim #kota #aktivisme</a></div>
                    <div class="news-tittle"><a href="">Siniar Seru Untuk Menemani Lebaranmu</a></div>
                    <div class="news-slug">Ramadan selalu menjadi waktu yang tepat untuk melakukan introspeksi dan
                        perbaikan diri.
                        Kebaikan dan perbaikan yang sudah kita jalani selama Ramadan sepatutnya tetap dilanjutkan agar
                        keberkahan Ramadan tidak berhenti begitu saja.</div>
                    <span class="news-author">Rizka Aulia</span>
                    <span class="news-date-released">19 April 2023</span>
                </div>
            </div>

            <!-- <div class="news-button">
                Baca Lebih Lanjut
            </div> -->
        </div>
    </section>
    <!-- aksi -->
    <section>
        <div class="news-container">
            <div class="news-header">
                Aksi yang kita lakukan
            </div>
            <p class="news-slug">Untuk melakukan perubahan kami beraksi secara langsung, dengan bantuan relawan dan
                donatur seperti kamu kita bisa melakukan banyak kegiatan untuk berkampanye seperti berikut ini. </p>
            <div class="grid-auto-column">
                <img class="img-cover" src="images/aksi1.png" alt="">
                <a href="aksi-cegah-api.php">
                    <img class="img-cover" src="images/aksi2.png" alt="">
                </a>
                <img class="img-cover" src="images/aksi3.png" alt="">
                <img class="img-cover" src="images/aksi4.png" alt="">
            </div>
        </div>
    </section>
    <!-- dukung gp -->
    <section>
        <div class="news-container">
            <div class="news-header">
                Dukung Kampanye Greenpeace
            </div>
            <div class="grid-auto-column">
                <a href="kampanye.php">
                    <div class="card" style="font-family: Montserrat;">
                        <img class="card-image " src="images/dukung1.png" alt="Card Image">
                        <div class="card-content">
                            <h4 class="card-subtitle">Berdonasi</h4>
                            <h3 class="card-title">Bebas Polusi Plastik</h3>
                            <p class="card-description">Dorong pemerintah dan korporasi untuk
                                menekan penggunaan plastik sekali pakai
                                dan berhanti mencemari lingkungan. </p>
                        </div>
                    </div>
                </a>
                <div class="card" style="font-family: Montserrat;">
                    <img class="card-image " src="images/dukung2.png" alt="Card Image">
                    <div class="card-content">
                        <h4 class="card-subtitle">Berdonasi</h4>
                        <h3 class="card-title">Wujudkan Laut Sehat</h3>
                        <p class="card-description">Dorong pemerintah dan korporasi untuk
                            menekan penggunaan plastik sekali pakai
                            dan berhanti mencemari lingkungan. </p>
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
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="news-container">
            <div class="grid-auto-column">
                <div class="card" style="font-family: Inter;width: 100%;">
                    <div class="card-content">
                        <h1 class="card-title" style="text-align: center;">Kekuatan Masyarakat</h1>
                        <h6 class="card-description" style="font-weight: 300;">
                            Ini adalah pintu untukmu. Jika kamu ingin
                            dunia yang lebih hijau dan adil, kami akan
                            berdiri berjalan bersamamu. Jika kamu
                            memiliki ide menuju kesana, kami ingin
                            belajar darimu. Mari bermimpi bersama, merencanakan bersama, dan beraksi
                            bersama.
                        </h6>
                        <div class="news-button" style="width: 100%; border-radius: 0;">
                            Ciptakan Perubahan
                        </div>
                    </div>
                </div>
                <div class="card" style="font-family: Inter;width: 100%">
                    <div class="card-content">
                        <h1 class="card-title" style="text-align: center;">Ubah dunia</h1>
                        <h6 class="card-description" style="font-weight: 300;">
                            Ini adalah pintu untukmu. Jika kamu ingin
                            dunia yang lebih hijau dan adil, kami akan
                            berdiri berjalan bersamamu. Jika kamu
                            memiliki ide menuju kesana, kami ingin
                            belajar darimu. Mari bermimpi bersama, merencanakan bersama, dan beraksi
                            bersama.
                        </h6>
                        <div class="news-button" style="width: 100%; border-radius: 0;">
                            Ciptakan Perubahan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="news-container">
            <div class="news-header">Kenali Greenpeace</div>
            <div class="news-slug">
                Greenpeace memiliki misi untuk membuat dunia yang lebih hijau dan damai. Cari tahu lebih lanjut terkait
                organisasi kami dengan link di bawah ini.
            </div>
            <div class="grid-auto-column" style="background-color: #D4F1B8;font-family: Inter; padding: 1rem;">
                <div class="" style="max-width:300px;">
                    <img src="images/tentang-kami.png" alt="">
                    <div class="card-title"><a href="tentang-kami.php">Tentang Kami</a>
                    </div>
                    <div class="news-slug">Greenpeace hadir karena bumi yang rapuh ini perlu suara. Butuh solusi. Butuh
                        perubahan. Butuh aksi. Greenpeace memiliki landasan prinsip dan nilai-nilai dasar yang tercermin
                        dalam setiap aksi kampanye lingkungan kami.</div>
                </div>
                <div class="" style="max-width:300px;">
                    <img src="images/sejarah.png" alt="">
                    <div class="card-title">Sejarah Greenpeace
                    </div>
                    <div class="news-slug">
                        Di tahun 1971, dengan motivasi menjadikan dunia menjadi hijau dan damai, sekelompok aktivis
                        berlayar dari Vancouver, Cananda, untuk melakukan protes terhadap rencana uji coba bom nuklir
                        Amerika Serikat di pulau Amchitka, pesisir barat Alasaka.
                    </div>
                </div>
                <div class="" style="max-width:300px;">
                    <img src="images/Kemenangan.png" alt="">
                    <div class="card-title">Kemenangan
                    </div>
                    <div class="news-slug">Di tahun 1971, dengan motivasi menjadikan dunia menjadi hijau dan damai,
                        sekelompok aktivis berlayar dari Vancouver, Cananda, untuk melakukan protes terhadap rencana uji
                        coba bom nuklir Amerika Serikat di pulau Amchitka, pesisir barat Alasaka.</div>
                </div>
                <div class="" style="max-width:300px;">
                    <img src="images/Pendanaan.png" alt="">
                    <div class="card-title">Pendanaan
                    </div>
                    <div class="news-slug">Di tahun 1971, dengan motivasi menjadikan dunia menjadi hijau dan damai,
                        sekelompok aktivis berlayar dari Vancouver, Cananda, untuk melakukan protes terhadap rencana uji
                        coba bom nuklir Amerika Serikat di pulau Amchitka, pesisir barat Alasaka.</div>
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
                <div type="submit" class="news-button" style="font-weight: bold;" >BERGABUNG SEKARANG</div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    

</body>

</html>