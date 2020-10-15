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
  <?php
    $booking_number = rand(10,100);
    $name = $_POST['name'];
    $checkInHotel = $_POST['checkInHotel'];
    $duration = $_POST['duration']; 
    $roomType = $_POST['roomType'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    // $totalPrice = $_POST['totalPrice']; //

    $checkOutHotel = date('d-m-Y',strtotime('+'.$duration.'day',strtotime($checkInHotel)));
    $checkInHotel = date('m-d-Y');

    if ($roomType == "Standard") {
        $totalPrice = ($duration*90)+20;}
    else if ($roomType != "Superior") {
        $totalPrice = ($duration*150)+20;}
    else if ($roomType == "Luxury") {
        $totalPrice = ($duration*200)+20;}
    ?>

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

  <br></br>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Booking Number</th>
          <th scope="col">Name</th>
          <th scope="col">Check-In</th>
          <th scope="col">Check-Out</th>
          <th scope="col">Room Type</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Service</th>
          <th scope="col">Total Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?= $bookingnumber ?> </th>
          <td> <?= $name ?> </td>
          <td> <?= $checkInHotel ?> </td>
          <td> <?= $checkOutHotel ?> </td>
          <td> <?= $roomType ?> </td>
          <td> <?= $phone ?> </td>
          <td> <?= $service ?> </td>
          <?php echo "<td> $".$totalPrice."</td>"; ?>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
</body>

</html>