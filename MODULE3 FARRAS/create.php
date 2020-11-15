<!doctype html>
<html lang="en">
<?php
$conn = mysqli_connect("localhost", "root", "root", "wad_module3_farras");
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        h3 {
            font-size: 36px;
            font-family: "Roboto", sans-serif;
        }
    </style>

    <title>EAD EVENTS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="home.php">EAD EVENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-outline-light my-2 my-sm-0" href="create.php" role="button">Buat Event</a>
            </form>
        </div>
    </nav>
    <br></br>
    <div class="container">
        <div class="container-fluid mb-4 text-info">
            <h3 class="mt-1">Buat Event</h3>
        </div>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                <div class="card text-white bg-danger mb-3">
                        <div class="card-header bg-danger"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputname">Nama</label>
                                <input type="text" class="form-control" name="inputname" placeholder="Masukkan Nama Acara">
                            </div>
                            <div class="form-group">
                                <label for="inputdesc">Deskripsi</label>
                                <textarea class="form-control" name="inputdesc" rows="4" placeholder="Masukkan Deskripsi Acara"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="uploadpicture">Upload Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="uploadpicture">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputname">Kategori</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inputcategory" id="inlineRadio1" value="Online">
                                    <label class="form-check-label" for="inlineRadio1">Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inputcategory" id="inlineRadio2" value="Offline">
                                    <label class="form-check-label" for="inlineRadio2">Offline</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card text-white bg-primary mb-3">
                        <div class="card-header bg-primary"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputtanggal">Tanggal</label>
                                <input type="date" class="form-control" name="inputtanggal">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputstart">Jam Mulai</label>
                                        <input type="time" class="form-control" name="inputstart">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputend">Jam Berakhir</label>
                                        <input type="time" class="form-control" name="inputend">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputtempat">Tempat</label>
                                <input type="text" class="form-control" name="inputtempat" placeholder="Masukkan Tempat Acara">
                            </div>
                            <div class="form-group">
                                <label for="inputharga">Harga</label>
                                <input type="number" class="form-control" name="inputharga" placeholder="Masukkan Harga Acara">
                            </div>
                            <div class="form-group">
                                <label for="inputname">Benefit</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="inputbenefit" value="Snack">
                                    <label class="form-check-label" for="inputbenefit">Snack</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="inputbenefit" value="Certificate">
                                    <label class="form-check-label" for="inputbenefit">Certificate</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="inputbenefit" value="Souvenir">
                                    <label class="form-check-label" for="inputbenefit">Souvenir</label>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                <a href="home.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>