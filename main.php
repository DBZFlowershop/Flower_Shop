<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(isset($_SESSION['CustomerID']))
{
  $user = 'href=logout.php>Logout';

}
else{
  $user = 'href=login.html>Login';
}
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- external file -->
  <link type="text/css" rel="stylesheet" href="allStyle.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@1,700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <title>Flower Shop</title>
  <script type="text/javascript">
    function footerMouseIn() {
      document.getElementById('team_name').innerText = "WebBarZo"
    }

    function footerMouseOut() {
      document.getElementById('team_name').innerText = "WBZ"
    }
  </script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Busan Flower Market Trading Volume', 'Busan Gyeongnam Flower Market Trading Volume'],
        ['2020', 428, 404],
        ['2021', 298, 358],
      ]);
      var options = {
        title: 'Decrease in flower trading volume\n Unit: 10,000',
        hAxis: {
          title: 'Year',
          titleTextStyle: {
            color: '#333'
          },
        },
        vAxis: {
          minValue: 200,
          maxValue: 450
        }
      }
      var chart = new google.visualization.LineChart(
        document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
  <style media="screen">
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .jumbotron {
      background-color: white;
    }

    .jumbotron span {
      font-size: 35px;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
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


    #footer {
      background-color: pink;
      color: white;
      letter-spacing: 2.5px;
    }

    .casousel-image {
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="jumbotron text-center" style="margin-bottom:0">
    <span>FLOWER SHOP</span>
  </div>
  <!-- ************ header **********   -->

  <!-- brand -->
  <nav class="navbar navbar-expand-sm" id="nav">
    <a class="navbar-brand mr-auto" href="main.html">Home</a>

    <!-- collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="myNavbar">
      <!-- link -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="location.php" id="nav_location">Location</a>
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

  <!-- XXX: carousel -->
  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
      <li data-target="#carouselIndicators" data-slide-to="2"></li>
      <li data-target="#carouselIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active "> <img class="carousel-image img-fluid" src="flower1.png" alt="1 slide"> </div>
      <div class="carousel-item "> <img class="carousel-image img-fluid" src="flower2.png" alt="2 slide"> </div>
      <div class="carousel-item "> <img class="carousel-image img-fluid" src="flower3.png" alt="3 slide"> </div>
      <div class="carousel-item "> <img class="carousel-image img-fluid" src="flower4.png" alt="4 slide"> </div>

      <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div id="chart_div" style="width: 1000px; height: 700px; margin: 0 auto;"></div> <!-- google chart-->
  <div class="container text-center" id="content">
    <!-- XXX: main text -->
    <h1>Custom Flowers</h1>
    <p>Let's make your day beautiful with the only bouquet in the world and help flower farmers who are suffering from
      Covid-19.<br />
      Not only do we customize flower bouquets, but we can also customize them in a certain size, and we recommend
      flower bouquets by season and situation.</p>
    <br />
    <h5>Flowers always make people better, happier and more helpful; they are sunshine, food, and medicine to the
      soul.</i><br /> - Luther Burbank</h5><br />
  </div>
  <div class="container-fluid" id="footer" onmouseover="footerMouseIn()" onmouseout="footerMouseOut()">
    <div class="row">
      <div class="col-sm-6" style="font-size:50px; font-weight:600" id="team_name">
        WBZ
      </div>
      <div class="col-sm-6 text-right">
        Opensource Web Software<br />
        Professor : Aziz Nasridinov<br />
        Location : Chungbuk National University
      </div>
    </div>
  </div>
</body>

</html>