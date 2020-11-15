<!DOCTYPE html>
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
    </style>
    <title>EAD EVENTS</title>
</head>

<body>
    <header>
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
    </header>
    <div class="container my-4">
        <div class="container text-center mb-4 text-info">
            <h4 class="mt-1">DETAIL ACARA</h4>
        </div>
        <div class="container">
            <div class="card mx-auto" style="width: 50rem;">
                <img class="card-img-top" src="gambar/<?= $row['gambar'] ?>" alt="event-image" height="400px">
                <div class="card-body">
                    <h5 class="card-title mb-4"><?= $row['name'] ?></h5>
                    <b>Deskripsi</b>
                    <p><?= $row['deskripsi'] ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <b>Informasi Acara</b>
                            <p class="card-text mt-3"><i class="far fa-calendar-alt text-warning mr-2"></i>
                                <?= $row['tanggal'] ?>
                            </p>
                            <p class="card-text mb-3">
                                <i class="fas fa-map-marker-alt text-warning mr-2"></i> <?= $row['tempat'] ?>
                            </p>
                            <p class="card-text mb-3">
                                <i class="far fa-clock text-warning mr-2"></i> <?= $row['mulai'] ?> -
                                <?= $row['berakhir'] ?>
                            </p>
                            <p class="card-text mb-3"><b class="mr-3">Kategori :</b> <?= $row['kategori'] ?></p>
                            <b>RP. <?= $row['harga'] ?></b>
                        </div>
                        <div class="col-md-6">
                            <b>Benefits</b>
                            <ul>
                                <li><?= $row['benefit'] ?></li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white text-center">
                    <button type="button" class="btn btn-primary px-5 mr-4" data-toggle="modal"
                        data-target="#exampleModal">
                        Edit
                    </button>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger px-5">Delete</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Content Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="card text-white bg-danger mb-3">
                                        <div class="card-header bg-danger"></div>
                                        <div class="card-body">
                                            <input type="hidden" name="ID" value="<?= $row['id'] ?>">
                                            <div class="form-group">
                                                <label for="inputname">Name</label>
                                                <input type="text" class="form-control" name="inputname"
                                                    placeholder="Masukkan Nama Acara" value="<?= $row['name'] ?>"
                                                    readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputdesc">Deskripsi</label>
                                                <textarea class="form-control" name="inputdesc" rows="4"
                                                    placeholder="Masukkan Deskripsi Acara"><?= $row['deskripsi'] ?>
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="uploadpicture">Upload Gambar</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        name="uploadpicture">
                                                    <label class="custom-file-label"
                                                        for="customFile"><?= $row['gambar'] ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputname">Category</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inputcategory"
                                                        id="inlineRadio1" value="Online"
                                                        <?php if ($row['kategori'] == "Online") { echo "checked"; }?>>
                                                    <label class="form-check-label" for="inlineRadio1">Online</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inputcategory"
                                                        id="inlineRadio2" value="Offline"
                                                        <?php if ($row['kategori'] == "Offline") { echo "checked"; }?>>
                                                    <label class="form-check-label" for="inlineRadio2">Offline</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-header bg-primary"></div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="inputtanggal">Tanggal</label>
                                                <input type="date" class="form-control" name="inputtanggal"
                                                    value="<?= $row['tanggal'] ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="inputstart">Jam Mulai</label>
                                                        <input type="time" class="form-control" name="inputstart"
                                                            value="<?= $row['mulai'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="inputend">Jam Berakhir</label>
                                                        <input type="time" class="form-control" name="inputend"
                                                            value="<?= $row['berakhir'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputtempat">Tempat</label>
                                                <input type="text" class="form-control" name="inputtempat"
                                                    placeholder="Masukkan Tempat Acara" value="<?= $row['tempat'] ?>"
                                                    readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputharga">Harga</label>
                                                <input type="number" class="form-control" name="inputharga"
                                                    placeholder="Masukkan Harga Acara" value="<?= $row['harga'] ?>"
                                                >
                                            </div>
                                            <div class="form-group">
                                                <label for="inputname">Benefit</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="inputbenefit" value="Snack"
                                                        <?php if (in_array("Snack", $benefit)) { echo "checked"; }?>>
                                                    <label class="form-check-label" for="inputbenefit">Snack</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="inputbenefit" value="Certificate"
                                                        <?php if (in_array("Certificate", $benefit)) { echo "checked"; }?>>
                                                    <label class="form-check-label"
                                                        for="inputbenefit">Certificate</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="inputbenefit" value="Souvenir"
                                                        <?php if (in_array("Souvenir", $benefit)) { echo "checked"; }?>>
                                                    <label class="form-check-label"
                                                        for="inputbenefit">Souvenir</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>