<!DOCTYPE html>
<html lang="en">

<head>
  <title>Spring</title>
  <link type="text/css" rel="stylesheet" href="mystyle.css">
  <link type="text/css" rel="stylesheet" href="allStyle.css">
  <script src="javas.js"></script>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function footerMouseIn() {
      document.getElementById('team_name').innerText = "WebBarZo"
    }

    function footerMouseOut() {
      document.getElementById('team_name').innerText = "WBZ"
    }
  </script>
  <style>
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
  <div class="row" style="padding-top:30px; padding-bottom:30px;">
  <div class="col-sm-1">
  </div>
  <div class="col-sm-10">
    <div style="text-align: center;">
      <ul class="j_ul">
        <li><a href="spring.html" style="font-size:20px; font-weight: bold;">Spring</a></li>
        <li><a href="summer.html">Summer</a></li>
        <li><a href="fall.html">Fall</a></li>
        <li><a href="winter.html">Winter</a></li>
      </ul>
      <hr>
    </div>

    <div class="container-fluid bg-3 text-left">
	<div class="row">
      <div class="col-sm-4">
        <div class="seaitem" onclick="detail(1)">
          <img class="seaflowerimg" src="spring1.png" alt="spring">
          <p class="situation">Pink Lanumculus</p>
          <p class="price">25 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(2)">
          <img class="seaflowerimg" src="spring2.png" alt="summer">
          <p class="situation">Georbera</p>
          <p class="price">35 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(3)">
          <img class="seaflowerimg" src="spring3.jpg" alt="fall">
          <p class="situation">Gongjakcho</p>
          <p class="price">20 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(4)">
          <img class="seaflowerimg" src="spring4.jpg" alt="winter">
          <p class="situation">Yellow prisia</p>
          <p class="price">25 $</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="seaitem" onclick="detail(5)">
          <img class="seaflowerimg" src="spring5.jpeg" alt="fall">
          <p class="situation">Pink Tulip</p>
          <p class="price">30 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(6)">
          <img class="seaflowerimg" src="spring6.jpeg" alt="winter">
          <p class="situation">Oxford, Butterfly</p>
          <p class="price">20 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(7)">
          <img class="seaflowerimg" src="spring7.jpeg" alt="spring">
          <p class="situation">Big flower</p>
          <p class="price">70 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(8)">
          <img class="seaflowerimg" src="spring8.jpg" alt="summer">
          <p class="situation">Mango tulip</p>
          <p class="price">20 $</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="seaitem" onclick="detail(9)">
          <img class="seaflowerimg" src="spring9.jpeg" alt="winter">
          <p class="situation">Purple tulip</p>
          <p class="price">20 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(10)">
          <img class="seaflowerimg" src="spring10.jpg" alt="spring">
          <p class="situation">Purple prisia</p>
          <p class="price">25 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(11)">
          <img class="seaflowerimg" src="spring11.jpg" alt="summer">
          <p class="situation">White Lanumculus</p>
          <p class="price">20 $</p>
        </div>
        <hr>
        <div class="seaitem" onclick="detail(12)">
          <img class="seaflowerimg" src="spring1.png" alt="spring">
          <p class="situation">Pink Lanumculus</p>
          <p class="price">25 $</p>
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
