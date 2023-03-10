<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giss Tent</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img src="./assets/logo.svg" alt="" srcset=""></a>  		
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="about-us.php" class="nav-item nav-link">About Us</a>			
                    <a href="product.php" class="nav-item nav-link">Product</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                
                <div class="navbar-nav action-buttons ml-auto">
                    <form class="navbar-form form-inline mr-3">
                        <div class="input-group search-box">								
                            <input type="text" id="search" class="form-control" placeholder="Search here...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="material-icons">&#xE8B6;</i></span>
                            </div>
                        </div>
                    </form>

                    <?php
                        session_start();
                        if(isset($_SESSION['name'])) {
                            echo '
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hi, '.$_SESSION['name'].'!
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="profile.php">Akun</a>
                                        <a class="dropdown-item" href="history.php">Riwayat Pesanan</a>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </div>
                            ';
                        } else {
                            echo '<a href="login.php" class="nav-item nav-link mr-3">Login</a>		
                            <a href="register.php" class="btn btn-primary">Register</a>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </nav>

    <!-- section banner -->
    <section class="banner">
        <div class="row mx-auto container nopadding">
            <div class="col-md-6 col-xs-12 bg-blue">
                <div class="text-title">
                    <h1>GISS TENT</h1>
                    <p style="text-align: justify;">SOLUSI UNTUK SEMUA ACARA ANDA AGAR LEBIH MENARIK DAN MERIAH.</p>
                     <a href="about-us.php"> <button class="btn-lihat bg-white">LIHAT DETAIL</button> </a>
                </div>
            </div>
            <div class="col-md-2 col-xs-12 nopadding order-first order-md-last sizing">
                <img class="bg-banner" src="./assets/bg4.png" alt="background image" srcset="">
            </div>
        </div>
    </section>

    <!-- section tentang -->
    <div class="bg-secondary-blue">
        <div class="container">
            <div class="row mx-auto nopadding">
                <div class="col-md-6 col-xs-12">
                    <img class="img-fluid" width="100%" src="assets/photo_6174563917125235935_y.png" alt="gambar">
                </div>
                <div class="col-md-6 col-xs-12 card-desc align-self-center">
                    <h1>Tentang Giss Tenda</h1>
                    <p style="text-align: justify;">Giss Tenda merupakan usaha dibidang penyewaan barang dan jasa untuk berbagai kegiatan seperti pesta pernikahan dan acara lainnya. Usaha tersebut berdiri sejak tahun 2016 berlokasi di Kalibagor Rt 003 Rw 001 Kecamatan Kalibagor Kabupaten Banyumas, pertama kali didirikan oleh Bapak Caryoko dan dikelola oleh Winda Apriliani selaku co-founder.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="break-section-lg"></div>


    <!-- section service -->
    <section class="service">
        <h1>Our Service</h1>
        <img class="img-fluid mt-5" width="10%" src="./assets/icon-rental.svg" alt="icon rental" srcset="">
        <p class="mt-3">Sewa tenda indoor atau outdoor, sewa alat pesta, dan  jasa organ tunggal.</p>
    </section>
    <div class="break-section-lg"></div>


    <!-- section produk -->
    <div class="bg-secondary-blue">
        <div class="container">
            <h1 class="text-center mt-2 mb-5" >Our Product</h1>
            <div class="row">
                <div class="col-md-4 text-center card-box">
                    <img class="img-fluid mt-5" width="20%" src="./assets/noto_circus-tent.svg" alt="icon rental" srcset="">
                    <h4 class="mt-3">Tenda</h4>
                    <p>Tenda sesuai ukuran yang anda inginkan, harga tergantung dengan berapa meter penggunaan.</p>
                </div>
                <div class="col-md-4 text-center card-box">
                    <img class="img-fluid mt-5" width="20%" src="./assets/bi_fan.svg" alt="icon rental" srcset="">
                    <h4 class="mt-3">Alat pesta dan blower</h4>
                    <p>Tersedia berbagai alat keperluan pesta dan blower untuk menyejukan suasan pesta anda.</p>
                </div>
                <div class="col-md-4 text-center card-box">
                    <img class="img-fluid mt-5" width="20%" src="./assets/bxs_piano.svg" alt="icon rental" srcset="">
                    <h4 class="mt-3">Organ Tunggal</h4>
                    <p>Acara anda butuh hiburan, kami menyediakan jasa organ tunggal lengkap dengan penyanyinya.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="break-section-lg"></div>

    <!-- section mengapa -->
    <div class="container">
        <h1 class="text-center mt-2 mb-5" >Mengapa memilih Giss Tent ?</h1>
        <div class="row">
            <div class="col-md-3 text-center card-box">
                <img class="img-fluid mt-5" width="20%" src="./assets/ph_bag.svg" alt="icon rental" srcset="">
                <h4 class="mt-3">Professional</h4>
                <p>Tenaga kerja yang professional dan terlatih, efektif dan efiisen dalam bekerja membangun tenda.</p>
            </div>
            <div class="col-md-3 text-center card-box">
                <img class="img-fluid mt-5" width="20%" src="./assets/clock.svg" alt="icon rental" srcset="">
                <h4 class="mt-3">Berpengalaman</h4>
                <p>Giss Tent telah berpengalaman selama 6 tahun dalam melayani berbagai event di daerah Banyumas dan sekitarnya.</p>
            </div>
            <div class="col-md-3 text-center card-box">
                <img class="img-fluid mt-5" width="20%" src="./assets/material-symbols_thumb-up-outline-sharp.svg" alt="icon rental" srcset="">
                <h4 class="mt-3">Berkualitas</h4>
                <p>Kami selalu menyediakan kualitas bersih, dan kuat untuk memenuhi kebutuhan pelanggan.</p>
            </div>
            <div class="col-md-3 text-center card-box">
                <img class="img-fluid mt-5" width="30%" src="./assets/et_pricetags.svg" alt="icon rental" srcset="">
                <br>
                <h4 class="mt-3">Harga Kompetitif</h4>
                <p>Kami selalu memberikan harga kompetitif dan kualitas serta pelayanan yang terbaik untuk anda.</p>
            </div>
        </div>
    </div>

    <div class="break-section-lg"></div>

    <!-- section galeri -->
    <div class="container">
        <h1 class="text-center mt-2 mb-5" >Gallery</h1>
        <div class="row">
            <div class="col-md-6 text-center">
                <img class="img-fluid mt-5" width="95%" src="./assets/galeri-1.png" alt="icon rental" srcset="">
            </div>
            <div class="col-md-6 text-center">
             <img class="img-fluid mt-5" width="92%" src="./assets/galeri-2.png" alt="icon rental" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <img class="img-fluid mt-5" width="95%" src="./assets/galeri-3.png" alt="icon rental" srcset="">
            </div>
            <div class="col-md-6 text-center">
                <img class="img-fluid mt-5" width="92%" src="./assets/galeri-4.png" alt="icon rental" srcset="">
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="product.php">
                <button class="btn-lihat">LIHAT LAINNYA</button>
            </a>
        </div>
    </div>

   <div style="margin-top: 200px"></div>

    <!-- Footer -->
    <footer class="bg-blues footers">
        <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="./assets/logo-white.svg" alt="" width="180" class="mb-3">
            <p class="font-italic text-white">Dapatkan berbagai produk untuk melengkapi acara anda disini dengan harga terjangkau dan kualitas terjamin.</p>
            <ul class="list-inline mt-4">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa i-blue fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa i-blue fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://instagram.com/gisstenda.purwokerto?igshid=YmMyMTA2M2Y=" target="_blank" title="instagram"><i class="fa i-blue fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa i-blue fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa i-blue fa-vimeo"></i></a></li>
            </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Navigasi</h6>
           <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="index.php" class="text-white">Home</a></li>
                <li class="mb-2"><a href="about-us.php" class="text-white">About Us</a></li>
                <li class="mb-2"><a href="product.php" class="text-white">Product</a></li>
                <li class="mb-2"><a href="contact.php" class="text-white">Contact</a></li>
            </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Hubungi Kami</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="https://l.instagram.com/?u=https%3A%2F%2Fbit.ly%2F3wtTs0k%3Ffbclid%3DIwAR0uLZ3QvWKL87zdA-ugEsqZIKinXv0kHomsdh5IyatVEWNE2H6r5zo94sQ&e=AT2gy3iTRWlWm4GE9WeLUvBdAlZTw2cNfP2skM_9XT7m8I9fqS8_D5DooOx6RWhJZXKr_9G2W19QHo5MNDKvW6sIrwgB0-yE&s=1" class="text-white">+62 816 693 321</a></li>
                <li class="mb-2"><a href="#" class="text-white">hi@gisstent.com</a></li>
            </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Alamat</h6>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d278.74661614238374!2d109.29995211151605!3d-7.475691263426786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1674023858658!5m2!1sen!2sid" width="100%" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="text-white mb-4">Kalibagor Rt 003 Rw 001 Kecamatan Kalibagor Kabupaten Banyumas</p>
            </div>
        </div>
        </div>

        <!-- Copyrights -->
        <div class="bg-light py-2">
        <div class="container text-center">
            <p class="mb-0 py-2">?? 2023 GissTent All rights reserved.</p>
        </div>
        </div>
    </footer>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>