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
                        <a class="nav-link active" href="booking.php">Booking</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <br><br><br><br><br>
    <!-- form -->
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="mybooking.php" method="post">
                    <fieldset class=" form-group">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="name" class=" form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="DateCheckIn">Check-in</label>
                            <input type="date" class=" form-control" name="cekin">
                        </div>
                        <div class="form-group">
                            <label for="Duration">Duration</label>
                            <input type="number" class=" form-control" name="durasi">
                        </div>
                        <div class="form-group">
                            <label for="RoomType">Room Type</label>
                            <select class="form-control" " name=" roomtype">
                                <option value="Standard" name="standard">Standard</option>
                                <option value="Superior" name="superior">Superior</option>
                                <option value="Luxury" name="luxury">Luxury</option>
                            </select>
                        </div>
                        <h5>Add Service(s)</h5>
                        <p>$ 20/Service</p>
                        <div class="input-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Room Service" name="array[]" id="serv1">
                                <label class="form-check-label" for="defaultCheck1">Room Service</label>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Breakfast" name="array[]" id="serv2">
                                <label class="form-check-label" for="defaultCheck1">Breakfast</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="PhoneNumber">Phone Number</label>
                            <input type="text" class="form-control" name="phonenumber">
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" value="Book" class="btn btn-primary mb-2 btn-block">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col">
                <br><br><br><br>
                <img src="img/standardrom.jpeg" height="450" width="450">
            </div>
        </div>

        <!-- form -->



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