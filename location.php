<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
session_start();
if(isset($_SESSION['CustomerID']))
{
  $user = 'href=logout.php>Logout';

}
else{
  $user = 'href=login.php>Login';
}
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- external file -->
  <link type="text/css" rel="stylesheet" href="allStyle.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>location</title>
  <style media="screen">
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .loc {
      font-size: 35px;
      margin-top: 15px;
      padding: 30px 25px;
      /* color:white; */
    }

    .title {
      font-weight: 600;
    }

    #map {
      margin-left: auto;
      margin-right: auto;
    }

    #map2 {
      margin-left: auto;
      margin-right: auto;
    }

    #loc_message {
      background-image: url('bg1.jpg');
      margin-top: 100px;
      padding: 80px 100px;
      background-color: pink;
      font-size: 30px;
      color: white;
      text-shadow: 0px 0px 32px white;
    }
    #loc_head{
      background-image: url('loc_head (1).jpg');
      height: 600px;
      padding: 250px 30px;
    }
    #loc_head span{
      color: white;
      font-family: 'Playfair Display';
      font-size: 30px;
    }
    .dropdown-menu {
      border: 1px solid pink;
    }

    .dropdown-item {
      color: grey;
    }

    .dropdown-item:hover {
      color: pink;
    }

  </style>
  <script>
    function myMap() {
      var mapCanvas = document.getElementById("map");
      var myCenter = new google.maps.LatLng(36.625600, 127.454441);
      var mapOptions = {
        center: myCenter,
        zoom: 17
      };
      var map = new google.maps.Map(mapCanvas, mapOptions);

      //marker
      var location = new google.maps.LatLng(36.625600, 127.454441);
      var marker = new google.maps.Marker({
        position: location,
        icon: 'maps-and-flags.png',
        animation: google.maps.Animation.BOUNCE,
      });
      marker.setMap(map);
      //InfoWindow
      var infowindow = new google.maps.InfoWindow({
        content: "CBNU - SW"
      });
      infowindow.open(map, marker);
      //Circle
      var circle = new google.maps.Circle({
        center: location,
        radius: 60,
        strokeColor: "#ff0000",
        strokeOpacity: 0.4,
        strokeWeight: 2,
        fillColor: "#ff0000",
        fillOpacity: 0.2
      });
      circle.setMap(map);


      var mapCanvas2 = document.getElementById("map2");
      var myCenter2 = new google.maps.LatLng(36.626953, 127.497873);
      var mapOptions2 = {
        center: myCenter2,
        zoom: 12
      };
      var map2 = new google.maps.Map(mapCanvas2, mapOptions2);

      //marker
      var location2 = new google.maps.LatLng(36.603680, 127.501891);
      var marker2 = new google.maps.Marker({
        position: location2,
        icon: 'maps-and-flags.png',
        animation: google.maps.Animation.BOUNCE,
      });
      marker2.setMap(map2);
      //InfoWindow
      var infowindow2 = new google.maps.InfoWindow({
        content: "dasom-flower"
      });
      infowindow2.open(map2, marker2);

      //marker
      var location3 = new google.maps.LatLng(36.704246, 127.427970);
      var marker3 = new google.maps.Marker({
        position: location3,
        icon: 'maps-and-flags.png',
        animation: google.maps.Animation.BOUNCE,
      });
      marker3.setMap(map2);
      //InfoWindow
      var infowindow3 = new google.maps.InfoWindow({
        content: "hosoo-flower farm"
      });
      infowindow3.open(map2, marker3);

      var location4 = new google.maps.LatLng(36.611371, 127.479500);
      var marker4 = new google.maps.Marker({
        position: location4,
        icon: 'maps-and-flags.png',
        animation: google.maps.Animation.BOUNCE,
      });
      marker4.setMap(map2);
      //InfoWindow
      var infowindow4 = new google.maps.InfoWindow({
        content: "Cheongju flower farm"
      });
      infowindow4.open(map2, marker4);


    var location5 = new google.maps.LatLng(36.642143, 127.473226);
    var marker5 = new google.maps.Marker({
      position: location5,
      icon: 'maps-and-flags.png',
      animation: google.maps.Animation.BOUNCE,
    });
    marker5.setMap(map2);
    //InfoWindow
    var infowindow5 = new google.maps.InfoWindow({
      content: "flower deliver"
    });
    infowindow5.open(map2, marker5);
  }

  </script>

</head>

<body>
  <div class="conainer-fluid text-center" id="loc_head">
    <span>Flowers always make people better, happier and more helpful; they are sunshine, food, and medicine to the soul.</i><br /> - Luther Burbank</span><br />
  </div>
  <nav class="navbar navbar-expand-sm" id="nav">
    <a class="navbar-brand mr-auto" href="main.php">Home</a>

    <!-- collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="myNavbar">
      <!-- link -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" href="location.php" id="nav_location">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">Flower</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Recommend</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="situation.php">Contextual</a>
            <a class="dropdown-item" href="spring.php">Seasonal</a>
            <a class="dropdown-item" href="pday.php">Pday</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" <?php echo $user;?></a></li>
        <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid text-center loc">
    <span class="title">Location <img src="maps-and-flags.png" alt="maps"></span>
    <hr class="my-4">
    <p style="font-size:17px;">(28644) Chungdae-ro 1, Seowon-gu, Cheongju-si, Chungbuk National University, S4-1</p>
    <div class="shadow-lg p-3 mb-5 bg-white rounded" id="map" style="width:900px;height:500px"></div>
  </div>

  <div class="container-fluid text-center loc" style="margin-top:1em;">
    <span class="title">Farm Location <img src="maps-and-flags.png" alt="maps"></span>
    <hr>
    <p style="font-size:17px;">Flower farm location in Cheongju, Chungcheongbuk-do</p>
    <div class="shadow-lg p-3 mb-5 bg-white rounded" id="map2" style="width:900px;height:500px;"></div>
  </div>

  <div class="conainer-fluid text-center" id='loc_message'>
    <p>We want to be helpful not only to flower farmers in Cheongju but also to flower farmers all over the country.<br> <b>Let's light up the world by helping each other.</b></p>
  </div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_tMa0Dl-52yRKjC9zRbGBDfNlvlT4jf8&callback=myMap"></script>
</body>

</html>
