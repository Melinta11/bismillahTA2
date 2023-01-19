<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giss Tent</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card-box-admin {
            border: 1px solid #D7D7D7;
            border-radius: 20px;
            margin-right: 20px;
        }
        .card-box-admin:hover {
            border: 1px solid #D7D7D7;
            border-radius: 20px;
            box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.1);
            transition: ease-in 0.2s;
            background: #3583DE;
            color: white;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="../assets/logo.svg" alt="" srcset=""></a>  		
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Dashboard</a>
                    <a href="user.php" class="nav-item nav-link">Pengguna</a>			
                    <a href="order.php" class="nav-item nav-link">Pemesanan</a>
                    <a href="product.php" class="nav-item nav-link">Produk</a>
                </div>
                
                <div class="navbar-nav action-buttons ml-auto">
                    <?php
                        session_start();
                        if(isset($_SESSION['name'])) {
                            echo '
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hi, '.$_SESSION['name'].'!
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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


    <div class="container">
        <h2>Selamat Datang di <br> GissTent Management System </h2>

        <div class="row mt-5 ml-1">
            <div class="col-md-3 text-left card-box-admin">
                <h4 class="mt-3">10</h4>
                <p>User Registered</p>
            </div>
            <div class="col-md-3 text-left card-box-admin">
                <h4 class="mt-3">10</h4>
                <p>Pemesanan</p>
            </div>
            <div class="col-md-3 text-left card-box-admin">
                <h4 class="mt-3">10</h4>
                <p>Produk</p>
            </div>
        </div>
    </div>

    <div class="break-section-lg"></div>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>