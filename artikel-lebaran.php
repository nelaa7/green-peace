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
    <div id="loading">
    <h1>Loading...</h1>
  </div>
  <script src="script.js"></script>
  
    <div class="container-artikel-lebaran">
        <div class="container-artikel">
            <h6>Cerita</h6>
            <h3>Lebaran di Desa yang
                Tenggelam</h3>
            <div style="margin: 0;margin-bottom: 10px;">
                <h6 style="color: #6F7376;">Greenpeace Indonesia</h6>
                <p class="info-artikel">
                    26 April 2023 • <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_212_264)">
                            <g clip-path="url(#clip1_212_264)">
                                <path
                                    d="M22.7798 2.27539C29.6833 2.27539 35.2798 7.87183 35.2798 14.7754V17.2754C35.2798 24.179 29.6833 29.7754 22.7798 29.7754L15.8357 29.7742L7.14656 34.1542C6.52282 34.4684 5.81849 34.5734 5.13652 34.4601L4.73085 34.366C2.99821 33.8457 2.01541 32.0193 2.5357 30.2867L3.82286 25.9946C1.6303 23.7426 0.279785 20.6667 0.279785 17.2754V14.7754C0.279785 7.87183 5.87623 2.27539 12.7798 2.27539H22.7798ZM22.7798 6.77539H12.7798C8.51386 6.77539 5.0278 10.1144 4.79245 14.3214L4.77977 14.7754V17.2754C4.77977 20.9282 7.22786 24.0091 10.5728 24.9671L12.1642 25.2521C12.2179 25.2562 12.2718 25.2597 12.3258 25.2627L12.7798 25.2754H22.7798C27.0457 25.2754 30.5318 21.9364 30.7671 17.7294L30.7798 17.2754V14.7754C30.7798 10.5095 27.4408 7.0234 23.2338 6.78806L22.7798 6.77539Z"
                                    fill="#6F7370" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_212_264">
                                <rect width="14" height="14" fill="white" transform="translate(0.279785 0.889648)" />
                            </clipPath>
                            <clipPath id="clip1_212_264">
                                <rect width="35" height="35" fill="white" transform="translate(0.279785 0.889648)" />
                            </clipPath>
                        </defs>
                    </svg>
                    0 Komentar
                </p>

            </div>
            <hr>
            <div style="margin-bottom: 10px;">
                <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.9">
                        <rect y="0.589844" width="48" height="48" rx="24" fill="#F6F4EF" />
                    </g>
                </svg>
                <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.9">
                        <rect y="0.589844" width="48" height="48" rx="24" fill="#F6F4EF" />
                    </g>
                </svg>
                <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.9">
                        <rect y="0.589844" width="48" height="48" rx="24" fill="#F6F4EF" />
                    </g>
                </svg>
                <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.9">
                        <rect y="0.589844" width="48" height="48" rx="24" fill="#F6F4EF" />
                    </g>
                </svg>

            </div>
            <p>Ini bukan tentang salat Idulfitri with a view.</p>
            <p>Matahari masih condong di ufuk timur pada Sabtu, 22 April lalu, saat warga
                mulai meriung di dalam dan sekitar Masjid Darul Ibad, Desa Timbulsloko,
                Kecamatan Sayung, Demak, Jawa Tengah. </p>
            <p>Di atas geladak kayu yang dibangun karena banjir rob menggenangi desa itu,
                warga menggelar sajadah. Mereka melaksanakan salat Idulfitri 1444 Hijriah.</p>

            <img src="images/figure.wp-block-image.png" alt="">
            <?php for($i=1;$i<=13;$i++){?>
            <img src="images/figure.wp-block-image-<?=$i?>.png" alt="">
            <?php if($i==2){ ?>
            <p>Beberapa tahun lalu, masjid ini sempat terendam air laut sehingga warga
                kesulitan untuk salat berjamaah. Pada awal 2020, warga merenovasinya dengan
                membangun panggung kayu. Setelah renovasi, aktivitas keagamaan Islam pun
                rutin digelar kembali di masjid.</p>
            <?php } ?>
            <?php if($i==4){ ?>
            <p>Tradisi lebaran di Timbulsloko mirip dengan daerah lainnya di Indonesia.
                Selepas salat, warga bersilaturahmi ke rumah tetangga dan kerabat, juga
                berziarah ke pusara keluarga yang telah meninggal. </p>
            <?php } ?>
            <?php if($i==7){ ?>
            <p>Bedanya, kampung tempat mereka merawat tradisi itu kini tergenang rob.
                Kenaikan muka air laut karena krisis iklim dan penurunan muka tanah telah
                menenggelamkan Desa Timbulsloko. </p>
            <p>Warga beradaptasi dengan meninggikan lantai rumah, masjid, hingga jalanan.
                Sebagian besar rumah setempat telah ditinggikan 1,5 meter untuk menghindari
                air laut. Banyak rumah yang atapnya menjadi sangat rendah, sehingga warga
                harus menundukkan kepala saat berdiri atau berjalan di dalamnya.</p>
            <?php } ?>
            <?php if($i==10){ ?>
            <p>Pada 2021, warga juga membangun jalan panggung. Dananya berasal dari iuran
                bersama dan donasi. Sebelum adanya jalan panggung, Timbulsloko bak desa
                mati saban hari sudah gelap. Banjir rob mengurung mereka di dalam rumah.</p>
            <p>Jalan ini menjadi penunjang aktivitas dan penyambung interaksi warga yang
                sempat terputus.</p>
            <?php } ?>
            <?php if($i==12){ ?>
            <p>Sekitar 30 tahun lalu, Timbulsloko merupakan kawasan produktif yang banyak
                digunakan untuk pertanian. Dengan naiknya air laut dan menyusutnya garis
                pantai hingga 3-5 kilometer dalam tiga dekade terakhir, lahan tersebut
                berangsur-angsur berubah menjadi tambak ikan. Tambak-tambak ikan itu kini
                juga terendam di bawah permukaan air laut.</p>

            <?php } ?>
            <?php } ?>
            <p style="margin-top: 16px;">Krisis iklim mengancam semua aspek kehidupan. Ekonomi, kesehatan, sosial,
                keagamaan, hingga tradisi dan kebudayaan kita.</p>
            <p>Warga Timbulsloko masih bisa merayakan Idulfitri dan hidup di tengah rob
                karena mereka beradaptasi. Perjuangan yang tentu saja tidak mudah.</p>
            <p>Di masa ini, kita membutuhkan aksi iklim yang lebih serius dan nyata, terutama
                dari pemerintah yang memiliki semua sumber daya untuk melakukannya. Aksi
                mitigasi dan adaptasi amatlah krusial, agar kita terhindar dari ancaman krisis
                iklim yang lebih parah.</p>
            <p>Perjuangan menghadapi krisis iklim adalah juga ikhtiar kita merawat tradisi dan
                kebudayaan; perjuangan menjaga kampung halaman dan alam semesta.</p>
            <div class="artikel-lebaran-badge">
                #Iklim
            </div>
        </div>
        <div class="news-container">
            <hr>


            <div class="news-header">Related Articles</div>
            <div class="news-item" style="grid-template-columns:40% 60%">
                <div>
                    <img src="images/related1.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
                <div>
                    <div class="news-tag" style="font-size: 14px;"><a href="">Siaran Pers
                            •
                            #
                            EnergiTerbarukan
                            #
                            Aktivisme
                            #
                            50 Tahun
                            #
                            Iklim</a></div>
                    <div class="news-tittle"><a href="">Adaro, Pembangunan PLTU Batu bara Baru Bukanlah Transisi</a>
                    </div>
                    <div class="news-slug">Pembangunan PLTU batu bara baru hanya akan memperburuk dampak krisis iklim,
                        mencemari
                        lingkungan, merugikan masyarakat dan mencederai komitmen Indonesia dalam menurunkan
                        emisi karbon dari sektor energi</div>
                    <span class="news-author">Greenpeace Indonesia </span>
                    <span class="news-date-released">11 Mei 2023</span>
                </div>
            </div>
            <div class="news-item" style="grid-template-columns:40% 60%">
                <div>
                    <img src="images/related2.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
                <div>
                    <div class="news-tag" style="font-size: 14px;"><a href="">
                        Cerita
                        •
                        #
                        Iklim</a></div>
                    <div class="news-tittle"><a href="">7 Rekomendasi Buku Isu Lingkungan untuk Menemani "Ngabuburead"</a>
                    </div>
                    <div class="news-slug">Belajar dan mendalami isu lingkungan gak melulu harus dimulai dengan bacaan yang berat,
                        kok! Berikut daftar tujuh buku tentang isu lingkungan rekomendasi kami.</div>
                    <span class="news-author">Sherina Redjo </span>
                    <span class="news-date-released">18 April 2023</span>
                </div>
            </div>
            <div class="news-item" style="grid-template-columns:40% 60%">
                <div>
                    <img src="images/related3.png" style="width: 100%; height: 100%;object-fit: cover;" alt="">
                </div>
                <div>
                    <div class="news-tag" style="font-size: 14px;"><a href="">Siaran Pers
                        Cerita
                        •
                        #
                        Ummah4Earth
                        #
                        Iklim</a></div>
                    <div class="news-tittle"><a href="">Mengapa Kita Justru Semakin Boros Ketika Ramadan?</a>
                    </div>
                    <div class="news-slug">Puasa harusnya mengajarkan kita untuk menahan diri, bukan hanya dari lapar dan haus, namun
                        juga hawa nafsu. Nafsu untuk berlebih-lebihan dalam hal konsumsi tekstil, listrik, air dan
                        transportasi.</div>
                    <span class="news-author">Ummah4Earth </span>
                    <span class="news-date-released">15 April 2023</span>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    
</body>

</html>