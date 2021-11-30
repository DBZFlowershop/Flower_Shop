<!DOCTYPE html>
<html lang="en">

<head>
  <title>Situation</title>
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
    <h3 style="text-align: center;">Contextual Recommend</h3><br>
    <div class="container-fluid bg-3 text-left">
	<div class="row">
      <div class="col-sm-6">
        <div class="item" onclick="condetail(1)">
          <img class="flowerimg" src="contex1.jpg" alt="spring">
          <p class="situation">When visiting a person in a difficult situation or visiting a hospital</p>
          <p class="flowername">Camomile</p>
          <p class="price">25 $</p>
        </div>
        <hr>
        <div class="item" onclick="condetail(2)">
          <img class="flowerimg" src="contex2.jpg" alt="summer">
          <p class="situation">When encouraging the future of good people</p>
          <p class="flowername">Papiopedilloom</p>When you want to be happy and make up
          <p class="price">35 $n</p>
        </div>
        <hr>
        <div class="item" onclick="condetail(3)">
          <img class="flowerimg" src="contex3.png" alt="fall">
          <p class="situation">When you want to make peace</p>
          <p class="flowername">Gongjakcho</p>
          <p class="price">20 $</p>
        </div>
        <hr>
        <div class="item" onclick="condetail(4)">
          <img class="flowerimg" src="contex4.jpg" alt="winter">
          <p class="situation">When cheering for a new beginning</p>
          <p class="flowername">freesia</p>
          <p class="price">25 $</p>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="item" onclick="condetail(5)">
          <img class="flowerimg" src="contex5.jpg" alt="fall">
          <p class="situation">Mother's Day</p>
          <p class="flowername">Carnation</p>
          <p class="price">30 $</p>
        </div>
        <hr>
        <div class="item" onclick="condetail(6)">
          <img class="flowerimg" src="contex6.jpeg" alt="winter">
          <p class="situation">Couple's anniversary</p>
          <p class="flowername">Pink hydrange</p>
          <p class="price">20 $</p>
        </div>
        <hr>
        <div class="item" onclick="condetail(7)">
          <img class="flowerimg" src="contex7.jpg" alt="christmas">
          <p class="situation">Christmas</p>
          <p class="flowername">Cotton</p>
          <p class="price">25 $</p>
        </div>
        <hr>
        <div class="item" onclick="condetail(8)">
          <img class="flowerimg" src="contex8.jpg" alt="winter">
          <p class="situation">Wedding</p>
          <p class="flowername">Buque</p>
          <p class="price">20 $</p>
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
