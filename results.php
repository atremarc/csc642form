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
            <td><?php echo $_POST["stAddress"]; ?></td>
          </tr>
          <tr>
            <th scope="row">City:</th>
            <td><?php echo $_POST["city"]; ?></td>
          </tr>
          <tr>
            <th scope="row">State:</th>
            <td><?php echo $_POST["state"]; ?></td>
          </tr>
          <tr>
            <th scope="row">Zip Code:</th>
            <td><?php echo $_POST["zip"]; ?></td>
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

      <br><br>

    </div>
    <div class="col-sm-2"></div>
  </div>

   <!-- import js for bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--
<?php

  funciton geocoder($address){
    $address = urlencode($address);
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyDu_D1X0YvfaDFs_Iluc469lNKxNm_rtAk";
    $response_json = file_get_contents($url);
    $response = json_decode($response_json, true);
    if($response['status']=='OK'){
      $lati = isset($response['results'][0]['geometry']['location']['lat']) ? $response['results'][0]['geometry']['location']['lat'] : "";
      $longi = isset($response['results'][0]['geometry']['location']['lng']) ? $response['results'][0]['geometry']['location']['lng'] : "";
      $formatted_address = isset($resonse['results'][0]['formatted_address']) ? $response['results'][0]['formatted_address'] : "";
      if($lati && $longi && $formatted_address){
        $data_array = array();
        array_push($data_array, $lati, $longi, $formatted_address);
        return $data_array;
      } else {
        return false;
      }
    } else {
      echo "ERROR: {$response['status']}";
      return false;
    }
  }
?>  
-->
</body>
<!--
<?php
if($_POST){
  $street = $_POST["stAddress"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $address = $street." ".$city." ".$state." ".$zip;

  $mapArray = geocoder($address);

  if($mapArray){
    $latitude = $mapArray[0];
    $longitude = $mapArray[1];
    $formatted_address = $mapArray[2];
    ?>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDu_D1X0YvfaDFs_Iluc469lNKxNm_rtAk"></script>

    <script type="text/javascript">
      function init_map() {
        var myOptions = {
          zoom: 14,
          center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
        };
        map = new google.maps.Map(document.getElementById("map"), myOptions);
        marker = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
        });
        infowindow = new google.maps.InfoWindow({
          content: "<?php echo $formatted_address; ?>"
        });
        google.maps.event.addListener(marker, "click", function () {
          infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
      }
      google.maps.event.addDomListener(window, 'load', init_map);
    </script>
    <?php

  }else{
    echo "Error in address data formatting"
  } 
}
?>
-->
</html>
