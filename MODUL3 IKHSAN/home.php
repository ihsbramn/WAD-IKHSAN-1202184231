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
    <title>EAD Events</title>
</head>

<body>
    <?php
    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'gagal_ekstensi') {
    ?>
            <script></script>
        <?php
        } elseif ($_GET['alert'] == "gagal_ukuran") {
        ?>
            <script></script>
        <?php
        } elseif ($_GET['alert'] == "berhasil") {
        ?>
            <script></script>
    <?php
        }
    }
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-light" href="home.php">EAD Events</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-right ml-auto">
                    <a class="nav-link text-light" href="home.php">Home</a>
                    <a class="nav-link btn-outline text-light" href="buatevent.php">Buat Event</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <br>
    <div class="container">
        <h3 style="text-align: center;" class="text-primary">Welcome to EAD Events !</h3>
        <br><br>
        <div class="row">
            <?php
            include 'conn.php';
            $data = mysqli_query($koneksi, "select * from event_table");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <br><br>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo "gambar/" . $d['gambar'] ?>" width="100" height="400" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $d['nama']; ?>
                            </h5>
                            <p class="card-text">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <?php echo $d['tanggal']; ?>
                            </p>
                            <p class="card-text">
                                <i class="fa fa-map-pin" aria-hidden="true"></i>
                                <?php echo $d['tempat']; ?>
                            </p>
                            <p class="card-text">
                                Kategori : <?php echo $d['kategori']; ?>
                            </p>
                        </div>
                        <div class="card-footer align-items-center">
                            <a href="detailsevent.php" class="btn btn-primary text-centre btn-block">Details</a>
                        </div>
                    </div>
                    <br><br>
                </div>
                <br>
            <?php
            }

            ?>
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