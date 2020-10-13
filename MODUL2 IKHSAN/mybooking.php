<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>EAD HOTEL</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <br><br><br><br>

    <!-- php -->
    <php
    // inisilisasi
    $nama = $_POST['nama'];
    $cekin = $_POST['cekin'];
    $durasi = $_POST['durasi'];
    $roomtype = $_POST['roomtype'];
    $service = $_POST['array'];
    $phonenumber = $_POST['phonenumber'];
    $checkout = date('Y-m-d', strtotime('+' . $durasi . 'days', strtotime($cekin)));
    $book = rand();
    // inisilisasi

    // logika array
    if (empty($_POST['array'])) {
        $service = 'No Service';
    } else {
        $service = $_POST['array'];
        $pilihan = count($service);
    }
    // logika array

    // logika total harga
    if ($roomtype == 'Standard') {
        $total = 90 * $durasi;
    } else if ($roomtype == 'Superior') {
        $total = 150 * $durasi;
    } else if ($roomtype == 'Luxury') {
        $total = 200 * $durasi;
    }
    // logika total harga

    // logika harga tambahan
    if ($pilihan == 2) {
        $add = 20;
    } else if ($pilihan == 1) {
        $add = 10;
    } else {
        $add = 0;
    }
    $pricetotal = $total + $add;
    // logika harga tambahan
    ?>

    <!-- tabel -->
    <div class="container">
        <fieldset>
            <table class="table">
                <tr>
                    <td><b>Booking Number</b></td>
                    <td><b>Name</b></td>
                    <td><b>Check-in</b></td>
                    <td><b>Check-out</b></td>
                    <td><b>Room Type</b></td>
                    <td><b>Phone Number</b></td>
                    <td><b>Service</b></td>
                    <td><b>Total Price</b></td>
                </tr>
                <tr>
                    <td>
                        <?= $book ?>
                    </td>
                    <td>
                        <?= $nama ?>
                    </td>
                    <td>
                        <?= $cekin ?>
                    </td>
                    <td>
                        <?= $checkout ?>
                    </td>
                    <td>
                        <?= $roomtype ?>
                    </td>
                    <td>
                        <?= $phonenumber ?>
                    </td>
                    <td>
                        <?php
                        if (empty($_POST['array'])) {
                            echo $service;
                        } else {
                            foreach ($service as $data) {
                                echo ' ';
                                echo '<li>' . $data . '</li>';
                            }
                        }
                        ?>
                    </td>
                    <td>
                        $ <?= $pricetotal ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <!-- tabel -->



    <div class="container">
        <div style="text-align: center;">
            <a href="booking.php" class=" btn btn-primary btn-block">Back</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>