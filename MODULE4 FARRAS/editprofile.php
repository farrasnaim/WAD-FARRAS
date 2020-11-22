<?php
include "connect.php";
$names = $_COOKIE['username'];
$id_user = $_COOKIE['user_id'];
$query = mysqli_query($connect,"SELECT * FROM user where id = '$id_user'");
$data = mysqli_fetch_array($query);

if (!isset($_COOKIE['edit'])){
    ?>
<style type="text/css">
    #editalert {
        display: none;
    }
</style>

<?php
}else{
    setcookie("edit", "", time() - 3600);
}

if (!isset($_COOKIE['in'])){
    header("location:login.php");
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
    <title>WAD Beauty | Edit Profile</title>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
        <a class="navbar-brand" href="home.php" id>WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a style="color: black" href="cart.php"><svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg> <span class="sr-only">(current)</span></a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <div class="alert alert-success alert-dismissible fade show" role="alert" id="editalert">
        <strong>Success!</strong> your profile has been updated.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="container-editprofile">
        <h2>Edit Profile</h2>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email"
                    placeholder="Input your new email" value="<?php echo $data['email'] ?>" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['nama'] ?>"
                    placeholder="Input your new name" required>
            </div>

            <div class="form-group">
                <label for="name">Phone Number</label>
                <input type="number" class="form-control" id="nohp" name="nohp" value="<?php echo $data['no_hp'] ?>"
                    placeholder="Input your new phone number" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Input your new password" required>
            </div>

            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password"
                    placeholder="Confirm your new password" required>
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary" style="text-align: center">Update</button>
            </div>
            <input type="button" class="btn btn-secondary" value="Cancel" onclick=" relocate_home()">

            <script>
                function relocate_home() {
                    location.href = "home.php";
                }
            </script>
        </form>
    </div>
    <script>
        function validate() {
            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            var c = < ? php echo $data['password'] ? > ;
            if (a != b) {
                alert("Passwords did not match!");
                return false;
            }
            if (a != c) {
                alert("Password incorrect!");
                return false;
            }
        }
    </script>
</body>

</html>