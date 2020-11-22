<?php
include "connect.php";
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
	<title>WAD Beauty | Register</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-primary" href="login.php">Login <span class="sr-only">(current)</span></a>
                <a class="btn btn-primary" href="register.php">Register <span class="sr-only">(current)</span></a>
            </form>
        </div>
    </nav>

    <div class="container-login">
        <h2>Register</h2>
        <form style="padding: 40px" method="post" action="registerfunction.php" onsubmit="return validate()">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email"
                    placeholder="Input your email" required>
            </div>

            <div class="form-group">
                <label for="name">Phone Number</label>
                <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Input your phone number"
                    required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Input your password" required>
            </div>

            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm your password"
                    required>
            </div>


            <div class="col text-center">
                <button type="submit" class="btn btn-primary" style="text-align: center">Submit</button>
            </div>

            <p style="text-align: center; margin-top: 10px">Have an account? <a href="login.php">Login here.</a></p>
        </form>
    </div>

    <script>
        function validate() {

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a != b) {
                alert("Passwords did not match!");
                return false;
            }
        }
    </script>
</body>

</html>