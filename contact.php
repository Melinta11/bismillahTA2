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
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about-us.php" class="nav-item nav-link">About Us</a>			
                    <a href="product.php" class="nav-item nav-link">Product</a>
                    <a href="#" class="nav-item nav-link active">Contact</a>
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
                    <h1>KONTAK KAMI</h1>
                    <p style="text-align: left;">Ingin merencanakan acara dengan menggunakan Giss Tenda? Hubungi kami sekarang</p>
                    <button class="btn-lihat bg-white">HUBUNGI KAMI</button>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 nopadding order-first order-md-last sizing">
                <img class="bg-banner" src="./assets/bg3.png" alt="background image" srcset="">
            </div>
        </div>
    </section>

    <div style="margin-top: 150px"></div>

    <section class="hubungi">
        <h1 class="text-center">Hubungi Kami</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Masukan Nama Lengkap">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Masukan Email">
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea type="text" class="form-control" name="message" id="message" placeholder="Masukan Pesan"></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
            <p class="mb-0 py-2">© 2023 gisstent All rights reserved.</p>
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