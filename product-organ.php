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
                    <a href="product.php" class="nav-item nav-link active">Product</a>
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

    <div style="margin-top: 100px"></div>

    <section class="hubungi">
        <div class="container">
            <div style="margin-top: 20px"></div>
            <p><a href="product.php">Kembali</a></p>
            <h1 class="text-center">Paket Organ Tunggal</h1>
            <div style="margin-top: 20px"></div>
            <h5 class="text-center">Rp. 2.000.000</h5>
            <div class="row">
                <div class="col-md-12 text-center">
                <img class="img-center mt-3" width="60%" src="./assets/organ 1.png" alt="icon rental" srcset="">
                </div>
            </div>

            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                    <th scope="col">Spesifikasi</th>
                    <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Alat musik</th>
                        <td>Kendang, Keyboard, Suling</td>
                    </tr>
                    <tr>
                        <th scope="row">Penyanyi</th>
                        <td>2 Penyanyi</td>
                    </tr>
                    <tr>
                        <th scope="row">Durasi</th>
                        <td>8 jam</td>
                    </tr>                                     
                </tbody>
            </table>

            <div class="text-center mt-5">
                <a href="#">
                    <?php
                        if(isset($_SESSION['name'])) {
                            echo '
                                <button class="btn-lihat" data-toggle="modal" data-target="#exampleModal">PESAN SEKARANG</button>
                            ';
                        } else {
                            echo '<button onclick="showFailed()" class="btn-lihat">PESAN SEKARANG</button>
                            ';
                        }
                    ?>
                </a>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama lengkap</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Masukkan alamat anda">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No Hp</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Masukkan no hp anda">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Alamat</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Masukkan alamat anda">
                        </div>
                        <div class="form-group" data-provide="datepicker">
                            <label for="recipient-name" class="col-form-label">Tanggal Pemesanan</label>
                            <input type="date" class="form-control">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>                       
                    </form>
                </div>
                <div class="modal-footer">
                    <?php
                        if(isset($_SESSION['name'])) {
                            echo '
                                <button onclick="showAlert()" type="button" class="btn btn-primary">Pesan Sekarang</button>
                            ';
                        } else {
                            echo '<button onclick="showFailed()" type="button" class="btn btn-primary">Pesan Sekarang</button>
                            ';
                        }
                    ?>
                </div>
                </div>
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
            $('#exampleModal').modal('hide');

            Swal.fire(
                'Pesanan Berhasil di buat',
                'Terima kasih sudah mempercayakan kebutuhan anda di giss tent, Tunggu tim kami untuk menghubungi anda',
                'success'
                ).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = 'product-organ.php';
                }
            })
        }

        function showFailed() {
            Swal.fire(
                    'Maaf, Anda Harus Login',
                    'Untuk melakukan pemesanan silahkan login terlebih dahulu',
                    'error'
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