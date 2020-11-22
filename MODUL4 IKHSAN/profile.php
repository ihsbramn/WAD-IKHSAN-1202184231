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
        header('location:profile.php');
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
    <div class="container">
        <h1 style="text-align: center;">Profile</h1>
        <br><br>
        <form method="post" action="process_profile.php?action=update">
            <div class="form-group">
                <input type="hidden" name="id" name="form-control" id="id" value="<?php echo $_SESSION['id']; ?>" readonly>
            </div>
            <div class="form-group row">
                <label for="email">Email</label>
                <div class="col-sm">
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama">Nama</label>
                <div class="col-sm">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $_SESSION['nama']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp">Nomor Handphone</label>
                <div class="col-sm">
                    <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?php echo $_SESSION['no_hp']; ?>">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="email">Password</label>
                <div class="col-sm">
                    <input type="password" name="password" class="form-control" id="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="email">Password Confirm</label>
                <div class="col-sm">
                    <input type="password" name="cpassword" class="form-control" id="cpassword">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Warna Navbar</label>
                <select name="" id="" class="form-control">
                    <option value="">Light</option>
                    <option value="">Dark</option>
                </select>
            </div>
            <button type="update" name="update" class="btn btn-primary btn-block">Submit</button>
            <a href="index.php" name="cancel" class="btn btn-light btn-block">Cancel</a>
        </form>
    </div>

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