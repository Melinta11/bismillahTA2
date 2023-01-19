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
            <a href="#" class="navbar-brand"><img src="./assets/logo.svg" alt="" srcset=""></a>  		
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
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
                    <a href="login.php" class="nav-item nav-link mr-3">Login</a>		
                    <a href="register.php" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div style="margin-top: 200px"></div>

    <section class="hubungi">
        <div class="container">
        <a href="login.php">Kembali</a>
        <h1 class="text-center">Reset Password</h1>
        <p class="text-center">Silahkan masukkan email dibawah ini untuk reset password</a></p>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Masukan Email">
                        </div>
                        
                        <button onclick="showAlert()" type="button" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div style="margin-top: 300px"></div>
    

    <!-- Footer -->
    <footer class="bg-blues footers">
        <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="./assets/logo-white.svg" alt="" width="180" class="mb-3">
            <p class="font-italic text-white">Dapatkan berbagai produk untuk melengkapi acara anda disini dengan harga terjangkau dan kualitas terjamin.</p>
            <ul class="list-inline mt-4">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa i-blue fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa i-blue fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa i-blue fa-instagram"></i></a></li>
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
                <li class="mb-2"><a href="#" class="text-white">+62 816 693 321</a></li>
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
            <p class="mb-0 py-2">© 2023 GissTent All rights reserved.</p>
        </div>
        </div>
    </footer>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
    <script>
        function showAlert() {
            Swal.fire(
                'Email Terkirim',
                'Buka email untuk mereset password. *jika tidak ada pada folder inbox, silahkan periksa pada folder spam.',
                'success'
                ).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = 'login.php';
                }
            })
        }
    </script>
</body>
</html>