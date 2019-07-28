<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- import bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>CSC 642 Summer 2019 Individual Assignment Adam Tremarche</title>

  <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>

</head>

<body>

  <div class="d-flex justify-content-center" style="background-color:#e18582">
    <h2>CSC 642 Summer 2019 Individual Assignment Adam Tremarche</h2>
  </div>

  <!-- basic row/column layout -->
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">

      <br><h1>Results:</h1><br><br>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Entry Field:</th>
            <th scope="col">Results:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">First Name:</th>
            <td><?php echo $_POST["firstname"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Last Name:</th>
            <td><?php echo $_POST["lastname"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Email Address:</th>
            <td><?php echo $_POST["email1"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Phone Number:</th>
            <td><?php echo $_POST["phone"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Street Address:</th>
            <td><?php echo $_POST["stAddress"]; $street = $_POST["stAddress"]; ?></td>
          </tr>
          <tr>
            <th scope="row">City:</th>
            <td><?php echo $_POST["city"]; $city = $_POST["city"]; ?></td>
          </tr>
          <tr>
            <th scope="row">State:</th>
            <td><?php echo $_POST["state"]; $state = $_POST["state"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Zip Code:</th>
            <td><?php echo $_POST["zip"]; $zip = $_POST["zip"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Education Level:</th>
            <td><?php echo $_POST["education"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Income Bracket:</th>
            <td><?php echo $_POST["income"]; ?></td>
          </tr>
        </tbody>
      </table>

      <br><br>

      <div id="map"></div>
      <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu_D1X0YvfaDFs_Iluc469lNKxNm_rtAk&callback=initMap"
    async defer></script>

      <br><br>

    </div>
    <div class="col-sm-2"></div>
  </div>

   <!-- import js for bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
