<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>EAD Events</title>
</head>

<body>
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
        <h1 class="text-primary">Buat Event</h1>
        <br>
        <!-- form -->
        <div class="container">
            <form action="process.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-danger">
                            </div>
                            <div class="container">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" class="form-control bg-light" id="nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="Deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                    </div>
                                    <p>Upload Gambar</p>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label for="gambar" class="custom-file-label"></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="kategori1" name="kategori" value="Online">
                                            <label class="custom-control-label" for="kategori1">Online</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="kategori2" name="kategori" value="Offline">
                                            <label class="custom-control-label" for="kategori2">Offline</label>
                                        </div>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-primary">
                            </div>
                            <div class="container">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="jammulai">Jam Mulai</label>
                                            <input type="time" id="mulai" name="mulai" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="jamberakhir">Jam Berakhir</label>
                                            <input type="time" id="berakhir" name="berakhir" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat">Tempat</label>
                                        <input type="text" id="tempat" name="tempat" class="form-control bg-light">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="text" id="harga" name="harga" class="form-control">
                                    </div>
                                    <div class="form-group-inline">
                                        <label for="benefit">Benefit</label>
                                        <br>
                                        <label><input type="checkbox" name="benefit[]" value="Snacks"> Snacks </label>
                                        <label><input type="checkbox" name="benefit[]" value="Sertifikat"> Sertifikat </label>
                                        <label><input type="checkbox" name="benefit[]" value="Souvenir"> Souvenir </label>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" href="home.php" name="submit" class="btn btn-primary text-center">Submit</button>
                                        <a href="home.php" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <!-- form -->
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