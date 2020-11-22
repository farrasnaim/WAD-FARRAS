<?php
include "connect.php";

$names = $_COOKIE['username'];
if (!isset($_COOKIE['register'])){
 ?>
<style type="text/css">
    #registeralert {
        display: none;
    }
</style>

<?php
}else{
    setcookie("register", "", time() - 3600);
}

if (!isset($_COOKIE['in'])){
    header("location:login.php");
}

if (!isset($_COOKIE['cart'])){
    ?>
<style type="text/css">
    #cartalert {
        display: none;
    }
</style>

<?php
}else{
    setcookie("cart", "", time() - 3600);
}


if (!isset($_COOKIE['login'])){
    ?>
<style type="text/css">
    #loginalert {
        display: none;
    }
</style>

<?php
}else{
    setcookie("login", "", time() - 3600);
}


if (isset($_COOKIE['navbar'])){
    ?>
<style type="text/css">
    .navbar {
        background-color: <?php echo $_COOKIE['navbar'];
        ?>
    }
</style>

<?php
}
?>
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>WAD Beauty | Home Page</title>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" id>WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="cart.php" style="color: black"> <svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg> <span class="sr-only">(current)</span>
                    <div class="nav-item dropdown">
                </a>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Welcome, <?php echo $_COOKIE['username'] ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="editprofile.php">Profile</a>
                    <a class="dropdown-item" href="logoutfunction.php">Log out</a>
                </div>
        </div>
        </form>
        </div>
    </nav>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="registeralert">
        <strong>Success! you are now registered.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="alert alert-success alert-dismissible fade show" role="alert" id="cartalert">
        <strong>Success! item added to card.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginalert">
        <strong>Welcome! you are logged in.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>
    </script>
    <br></br>
    <h1 class="text-center">WAD Beauty</h1>
    <h5 class="text-center">Get the highest quality skin care for your facial needs.</h5>
    <div class="container-home">
        <div class="card-group">
            <div class="card">
                <img src="https://www.kiehls.co.id/dw/image/v2/AAWH_PRD/on/demandware.static/-/Sites-kiehls-master-catalog/default/dw9b7987cd/Kiehls_ECOMM_2000/MEN/Cleansers_and_Pre_Shave_for_Men/Facial_Fuel_Energizing_Face_Wash/Facial_Fuel_Energizing_Face_Wash_3700194719159_8.4fl.oz..jpg?sw=465&sh=390&sm=fit&q=70"
                    class="mx-auto d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Kiehl's Facial Fuel Energizing Face Wash - 250ml</h5>
                    <p class="card-text text-center">Diformulasikan dengan Kafein, Vitamin, dan Ekstrak Jeruk, pembersih
                        ini akan
                        membuat kulit menjadi terasa segar.
                        Mempersiapkan kulit wajah sebelum mencukur
                        Pembersih ini juga akan melindungi kulit dari lingkungan yang tidak sehat dan membuat kulit yang
                        kusam dan terlihat lelah menjadi lebih segar dan sehat.</p>
                    <p class="card-text text-center"><small class="text-muted">IDR 400.000</small></p>
                </div>
                <div class="card-footer">
                    <button type="button" onclick="FacialWash()" class="btn btn-primary"
                        style="width: 100%">Add to Cart</button>
                </div>
            </div>
            <div class="card">
                <img src="https://www.kiehls.co.id/dw/image/v2/AAWH_PRD/on/demandware.static/-/Sites-kiehls-master-catalog/default/dw42f27d3b/Kiehls_ECOMM_2000/MEN/Moisturizers_for_Men/Age%20Defender%20Moisturizer/Age_Defender_Moisturizer_50ml.jpg?sw=465&sh=390&sm=fit&q=70"
                    class="mx-auto d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Kiehl's Age Defender Moisturizer</h5>
                    <p class="card-text text-center">Pelembap anti-aging ini dapat mengangkat dan mengencangkan kulit,
                        sambil
                        menyamarkan tampilan garis halus dan kerutan. Diformulasikan khusus untuk kulit pria yang lebih
                        tebal dan kasar, perawatan ini mengeksfoliasi sel-sel kulit mati dengan lembut, yang
                        memungkinkan formula untuk secara efektif menembus lapisan permukaan kulit dan membuatnya lebih
                        halus.</p>
                    <p class="card-text text-center"><small class="text-muted">IDR 295.000</small></p>
                </div>
                <div class="card-footer">
                    <button type="button" onclick="Moisturizer()" class="btn btn-primary"
                        style="width: 100%">Add to Cart</button>
                </div>
            </div>
            <div class="card">
                <img src="https://www.kiehls.co.id/dw/image/v2/AAWH_PRD/on/demandware.static/-/Sites-kiehls-master-catalog/default/dw7f497dc4/Kiehls_ECOMM_2000/SKIN_CARE/Toners/Ultra_Facial_Toner/Ultra_Facial_Toner_3605970024574_8.4fl.oz..jpg?sw=465&sh=390&sm=fit&q=70"
                    class="mx-auto d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Kiehl's Ultra Facial Toner</h5>
                    <p class="card-text text-center">Membantu menjaga kulit halus serta mempersiapkan kulit sebelum
                        menggunakan
                        produk Ultra Facial Cream atau Moisturizer
                        Membersihkan kotoran dan residu pada permukaan kulit dengan lembut, serta menghidrasi dan
                        menyamankan kulit.
                        Formula tanpa alkohol
                        PH-seimbang untuk kenyamanan kulit yang optimal</p>
                    <p class="card-text text-center"><small class="text-muted">IDR 445.000</small></p>
                </div>
                <div class="card-footer">
                    <button type="button" onclick="Toner()" class="btn btn-primary" style="width: 100%">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>