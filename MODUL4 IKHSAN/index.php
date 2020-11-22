<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>EAD Beauty</title>
</head>

<body>
    <!-- php -->
    <?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        header('location:login.php');
        $user_id = $_SESSION['id'];
    }
    ?>
    <!-- php -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">EAD Beauty</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled active" href="#" tabindex="-1" aria-disabled="true">Selamat Datang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </i><?php echo $_SESSION['nama']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Log-out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <br><br><br>
    <!-- card -->
    <div class="container">
        <h1 style="text-align: center;"> WAD Beauty</h1>
        <P style="text-align: center;">Tersedia skincare harga murah tapi bukan murahan dan berkualitas</P>
        <br><br>
        <div class="row">
            <div class="col-sm">
                <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                    <img src="assets/img/toner.png" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body text-centre">
                        <h5>The Body Shop Vitamin E Toner</h5>
                        <p>Toner Terbaik di muka bumi ya toner ini ! </p>
                        <p>Rp. 50.000,00</p>
                        <form method="post" action="process_cart.php?action=add">
                            <input class="form-control" type="hidden" name="user_id" value="<?php $user_id ?>">
                            <input class="form-control" type="hidden" name="nama_barang" placeholder="Vitamin E Toner" value="Vitamin E Toner" readonly>
                            <input class="form-control" type="hidden" name="harga" placeholder="50000" value="50000" readonly>
                            <br>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Tambah ke Keranjang</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">
                <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                    <img src="assets/img/hand.png" class=" card-img-top" alt="..." height="250" width="250">
                    <div class="card-body text-centre">
                        <h5>Hand Sanitizer</h5>
                        <p>Bersihkan selalu tangan mu dengan hand sanitizer #byebyeCORONA</p>
                        <p>Rp. 15.000,00</p>
                        <form method="post" action="process_cart.php?action=add">
                            <input class="form-control" type="hidden" name="user_id" value="<?php $user_id ?>">
                            <input class="form-control" type="hidden" name="nama_barang" placeholder="Hand Sanitizer" value="Hand Sanitizer" readonly>
                            <input class="form-control" type="hidden" name="harga" placeholder="15000" value="15000" readonly>
                            <br>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Tambah ke Keranjang</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">
                <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                    <img src="assets/img/popok.png" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body text-centre">
                        <h5>Mamypoko Pants</h5>
                        <p>Nyaman dan cepat kering!</p>
                        <p>Rp. 75.000,00</p>
                        <form method="post" action="process_cart.php?action=add">
                            <input class="form-control" type="hidden" name="user_id" value="<?php $user_id ?>">
                            <input class="form-control" type="hidden" name="nama_barang" placeholder="Mamypoko Pants" value="Mamypoko Pants" readonly>
                            <input class="form-control" type="hidden" name="harga" placeholder="75000" value="75000" readonly>
                            <br><br><br>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Tambah ke Keranjang</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- card -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>