<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@100;400&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Deren & Ami</title>
</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="header">
            <div class="container">
                <div class="cover-box">
                    <h1 class="heading">Deren & Ami</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Content Start -->
    <section class="content" id="content">
        <div class="container">
            <p class="label">
                Kepada Yth. <br> Bapak/Ibu/Saudara/i :
            </p>
            <h3 class="guest-name">
            <?php
                        $id = $_GET['id'];
                        echo strtoupper($id);
                    ?>
            </h3>
            <div class="btn-undangan">
                <a href="#" class="btn-buka">BUKA UNDANGAN</a>
            </div>
            <p class="detail">Mohon maaf apabila terdapat kekeliruan dalam penulisan nama atau gelar</p>
        </div>
    </section>
    <!-- Content End -->


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom JS -->
    <script src="script/script.js"></script>

</body>

</html>