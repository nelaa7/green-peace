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
        .mapouter {
            position: relative;
            text-align: right;
            width: 100%;
            height: 400px;
            margin-bottom: 40px;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 100%;
            height: 400px;
        }

        .gmap_iframe {
            height: 400px !important;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <!-- hero section -->
    <div id="loading">
    <h1>Loading...</h1>
  </div>
  <script src="script.js"></script>

    <div class="f-inter"
        style="background-image: url(images/kontak.png);background-repeat: no-repeat;padding: 130px 130px;background-size: 100%;font-size: 20px;">
        <h1 class="footer-title-header">Kontak</h1>
        <h4 class="footer-title-subheader mb-4">Hubungi Greenpeace Indonesia</h4>
        <p class="mb-4">Terima kasih atas minat kamu pada Greenpeace Indonesia. Jika kamu mempunyai
            pertanyaan, atau keperluan silakan langsung hubungi kami melalui email, telepon, faximili
            atau berkunjung langsung ke kantor kami.
        </p>
        <a class="hero-items-button mb-4" style="color: white;font-weight: bold;padding: 10px;">Kirim Email</a>
        <h4 class="mb-4">Alamat Kantor:</h4>
        <div class="mb-4" style="width: 40%;">
            <strong>Greenpeace Indonesia
                Jl. HOS. Cokroaminoto No. 19
                RT 1 / RW 2 Gondangdia
                Kecamatan Menteng
                Jakarta Pusat, 10350</strong>
        </div>
        <p>Tel : <span class="text-link"> +62 21 3148521</span> </p>

    </div>
    <div class="news-container f-inter ">
        <div class="container-aksi-cegah-api">
            <p>
                Selama pandemi COVID-19, Greenpeace Indonesia memberlakukan kebijakan kerja dari rumah (WFH).
                Untuk berkomunikasi dengan kami silahkan kirim email ke <span
                    class="text-link">info.id@greenpeace.org</span>
            </p>
            <p>
                Jika Anda adalah donatur Greenpeacen Indonesia dan ingin mengetahui informasi seputar donasi Anda,
                hubungi tim Supporter Care kami di:
            </p>
            <p>
                Telepon:<br>
                021-5212900<br>
                Senin – Jumat: 9.30-5.30pm (WIB)<br>
                Selama pandemi COVID-19, tim supporter care juga melakukan kerja dari rumah (WFH).
                Silahkan berkomunikasi dengan kami melalui email: <span
                    class="text-link">supporterservices.id@greenpeace.org</span>
            </p>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=700&amp;height=700&amp;hl=en&amp;q=greenpeace indonesia&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                        href="https://embed-googlemap.com">embed google map</a></div>

            </div>
            <h1>Alamat Greenpeace Asia Tenggara</h1>
            <p>
                Greenpeace Indonesia merupakan kantor independen yang menjadi bagian dari keluarga Greenpeace Asia
                Tenggara, berikut kontak Greenpeace di negara asia tenggara
                lainnya.
            </p>
        </div>
        <div class="grid-auto-column" style="font-family: Inter; column-gap: 50px;">
            <div class="card-tentang-kami       " style="max-width:300px;">
                <img src="images/thailand.png" alt="">
                <div class="card-title">Greenpeace Thailand
                </div>
                <div class="news-slug" style="font-size: 16px;">
                    1371 Capital Mansion Building,<br>
                    Ground FloorPhaholyothin Road,<br>
                    Samsen-nai<br>
                    Phayathai, Bangkok 10400<br>
                    ThailandTel: +66 2 357 1921<br>
                    Fax: +66 2 357 1929<br>
                    Email: info.th@greenpeace.org<br>
                </div>
                <div class="card-footer">
                   <a href="">Email GP Thailand ></a>
                </div>
            </div>
            <div class="card-tentang-kami" style="max-width:300px;">
                <img src="images/filipina.png" alt="">
                <div class="card-title">Greenpeace Filipina
                </div>
                <div class="news-slug" style="font-size: 16px;">
                    Room 302 JGS Building <br>
                    #30 Scout Tuason Street<br>
                    1103 Quezon City<br>
                    The Philippines<br>
                    Tel: +63 2 332 1807<br>
                    Fax: +63 2 332 1806<br>
                    Email: info.ph@greenpeace.org<br>
                    Supporter email:
                    supporterservices.ph@<br>greenpeace.org
                </div>
                    <div class="card-footer">
                        Email GP Filipina >
                    </div>  
            </div>
            <div class="card-tentang-kami" style="max-width:300px;">
                <img src="images/malaysia.png" alt="">
                <div class="card-title">Greenpeace Malaysia
                </div>
                <div class="news-slug" style="font-size: 16px;">
                    No. 10-1, Level 1, Jalan Tun
                    Sambanthan 3
                    50470 Brickfields, Kuala Lumpur 
                    Tel: +603-2276 2022
                    Fax: +603-22762025
                    Email: info.my@greenpeace.org
                </div>
                    <div class="card-footer">
                        Email GP Malaysia >
                    </div>
            </div>
            <div class="card-tentang-kami" style="max-width:300px;">
                <img src="images/faqs.png" alt="">
                <div class="card-title">FAQ
                </div>
                <div class="news-slug" style="font-size: 16px;">Jika kamu mesih ingin
                    mengetahui lebih lanjut tentang
                    Greenpeace bisa melihat
                    pertanyaan-pertanyaan umum
                    yang sering kami terima, semoga
                    kamu bisa menemukan jawaban
                    yang kamu cari di sini. Namun
                    jika masih belum silahkan
                    menghubungi kami di nomor
                    kontak yang tertera di laman
                    FAQ.</div>
                    <div class="card-footer">
                        FAQ >
                    </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>