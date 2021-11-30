<!DOCTYPE html>
<html lang="en">

<head>
  <title>Winter</title>
  <link type="text/css" rel="stylesheet" href="mystyle.css">
  <link type="text/css" rel="stylesheet" href="allStyle.css">
  <script src="javas.js"></script>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function footerMouseIn() {
      document.getElementById('team_name').innerText = "WebBarZo"
    }

    function footerMouseOut() {
      document.getElementById('team_name').innerText = "WBZ"
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="myNavbar">
      <!-- link -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="location.html" id="nav_location">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.html">Flower</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="" data-toggle="dropdown">Recommend</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="situation.html">Contextual</a>
            <a class="dropdown-item" href="spring.html">Seasonal</a>
            <a class="dropdown-item" href="pday.html">Pday</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="login.html">Logout</a></li>
        <li class="nav-item"><a class="nav-link" href="cart.html">Cart</a></li>
      </ul>
    </div>
  </nav>
  
  <div style="text-align: center;">
      <ul class="j_ul">
        <li><a href="spring.html">Spring</a></li>
        <li><a href="summer.html">Summer</a></li>
        <li><a href="fall.html">Fall</a></li>
        <li><a href="winter.html" style="font-size:20px; font-weight: bold;">Winter</a></li>
      </ul>
      <hr>
    </div>
<div class="row" style="padding-top:60px; padding-bottom:30px;">
  <div class="col-sm-1">
  </div>
  <div class="col-sm-10">

    <div class="container-fluid bg-3 text-left">
	<div class="row">
      <div class="col-sm-4">
        <div class="seaitem" onclick="detail(37)">
          <img class="seaflowerimg" src="winter1.jpg" alt="spring">
          <p class="situation">Cotton flower</p>
          <p class="price">25 $</p>
        </div>
        <hr>
      </div>

      <div class="col-sm-4">
        <div class="seaitem" onclick="detail(39)">
          <img class="seaflowerimg" src="winter3.jpg" alt="fall">
          <p class="situation">Siklamen</p>
          <p class="price">30 $</p>
        </div>
        <hr>
      </div>

      <div class="col-sm-4">
        <div class="seaitem" onclick="detail(38)">
          <img class="seaflowerimg" src="winter2.jpg" alt="fall">
          <p class="situation">Stoke</p>
          <p class="price">30 $</p>
        </div>
      </div>
      
    </div>
	</div>
  </div>

  <div class="col-sm-1">
  </div>
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
