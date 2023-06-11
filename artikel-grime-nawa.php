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
        .container-pers {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 20px;
        }

        .items-pers {
            display: grid;
            grid-template-rows: min-content 200px min-content;
            row-gap: 1em;
        }

        .button-pers {
            width: 100%;
            border: 1px solid #074365;
            background-color: transparent;
            text-align: center;
            padding: 10px 0px;
            border-radius: 4px;
            font-weight: bold;
            color: #074365;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <!-- hero section -->

    <div class="f-inter"
        style="background-image: url(images/pers.png);background-repeat: no-repeat;padding: 130px 130px;background-size: 100% 1200px;font-size: 20px;height: 900px;">
        <h1 class="footer-title-header">Pusat Media dan Pers</h1>
        <p class="footer-title-subheader mb-4">Selamat datang di pusat media Greenpeace Indonesia.</p>
        <p class="" style="margin-bottom: 80px;">
            Halaman ini dikhususkan untuk jurnalis dan pekerja media. Disini anda dapat
            menemukan Siaran Pers terbaru yang kami distribusikan kepada media dalam daftar media
            kami.
        </p>
        <div class="container-pers">
            <div class="items-pers">
                <h3>Pertanyaan Media</h3>
                <p>
                    Jika teman-teman media membutuhkan wawancara,
                    foto dan video berkualitas tinggi, silahkan hubungi
                    Deby Natalia, Juru Kampanye Media di
                    deby.natalia@greenpeace.org
                </p>
                <div class="button-pers">
                    Pusat Media di Twitter
                </div>
            </div>
            <div class="items-pers">
                <h3>Arsip Foto Video</h3>
                <p>
                   
                </p>
                <div class="button-pers">
                    Kunjungi Pustaka Media
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>

</body>

</html>