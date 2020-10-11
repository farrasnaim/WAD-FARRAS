<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>EAD HOTEL</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3478f6">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-itemn mx-auto">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col">
        <form action="mybook.php" method="POST">
          <form>
            <br> </br>
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="name" class="form-control" id="exampleInputName1" placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
              <label for="example-date-input">Date</label>
              <div class="col-16">
                <input class="form-control" type="date" value="dd/mm/yyyy" id="example-date-input" name="checkInHotel">
              </div>
              <div class="form-group">

                <pre></pre>

                <label for="exampleInputDuration1">Duration</label>
                <input type="number" class="form-control" id="exampleInputDuration1" placeholder="Enter stay duration"
                  name="duration">
                <small id="emailHelp" class="form-text text-muted">Day(s)</small>
              </div>

              <label for="exampleInputType1">Room type</label>
              <select class="form-control" name="roomType" readonly>
                <option selected>Standard</option>
              </select>
              <pre></pre>

              <label for="exampleInputType1">Add service(s)</label>
              <small id="emailHelp" class="form-text text-muted">$20/Service</small>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="inputService1" name="service" value="Room service">
                <label class="form-check-label">Room service</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="inputService2" name="service" value="Breakfast">
                <label class="form-check-label">Breakfast</label>
              </div>
              <pre></pre>

              <div class="form-group">
                <label for="exampleInputNumber1">Phone Number</label>
                <input type="phone" class="form-control" id="exampleInputNumber1" aria-describedby="numberHelp"
                  placeholder="Enter phone number" name="phone">
              </div>

              <button class="btn btn-primary btn-md btn-block" type="submit" value="submit"> Book </button>
            </div>
      </div>
      <div class="col">
        <br></br>
        <br></br>
        <pre></pre>
        <pre></pre>
        <img
          src="https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/20009318-16f8dcdd65b76d44608a8d30cff222fb.jpeg?tr=q-40,c-at_max,w-740,h-500&_src=imagekit"
          class="img-fluid" alt="">
      </div>
    </div>

  </div>
  </div>
  </div>
</body>

</html>