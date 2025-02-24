<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="allStyle.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
  <script type="text/javascript">
    function footerMouseIn() {
      document.getElementById('team_name').innerText = "WebBarZo"
    }

    function footerMouseOut() {
      document.getElementById('team_name').innerText = "WBZ"
    }
  </script>
  <title>pday</title>
  <style>
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
      text-align: left;
      background-color: pink;
      color: white;
      letter-spacing: 2.5px;
    }

    body {
      text-align: center;
    }

    .m_ul {
      list-style: none;
    }

    .m_ul li {
      float: left;
      margin-right: 100px;
      font-weight: bold;
      color: rgb(124, 26, 236);
    }

    body {
      text-align: center;
      font-family: 'Montserrat', sans-serif;
    }

    .text {
      font-size: 20px;
    }

    .title {
      font-size: 20px;
      color: pink;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div>
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

    <div>
      <br><br><br>
      <h3>Parents day</h3>
      <p style="font-size: 18px;">It's hard to express my gratitude to my parents who give me infinite love,<br>
        How about sharing your feelings with carnations for Parents' Day?<br>
        I'll prepare a special memory for you.</p>
      <br><br>
      <hr>
      <br><br>
      <p style="font-size: 18px;">We make a mixture of Chinese and Colombian carnations for the rich effect compared to the price.<br>Other flowers are all domestic.<br><br>
        Since it's a hand-made product, not a machine, <br>it's hard to make it exactly the same as the image.<br><br>
        Depending on the situation of flower market, other flowers other than carnations can be replaced by similar flowers.<br><br>
        If you have a size you want other than the uploaded product, please contact us separately.<br>
      </p>
      <br><br>
      <hr>
      <br><br>
      <h4>* When a pickup and delivery make a reservation must be separate, please contact.<br></h4>
      <p>I help you be ordered by your way through the Contacts below the number :)</p>
      <br><br>
      <hr>
      <br><br>
      <h4>Phone. 010-1234-5678<br>
        KAKAO. </h4>
      <br><br><br><br>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="card">
            <img id="img" src="pday_1.jpg" onclick="location.href = 'pday1.html'" />
            <div class="card-body">
              <h5 class="card-title" id="title">Mini Handle Carnation</h5><br>
              <span class="price">10$</span>

            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img id="img" src="pday_2.jpg" onclick="location.href = 'pday2.html'" />
            <div class="card-body">
              <h5 class="card-title" id="title">Carnation vase</h5><br>
              <span class="price">40$</span>

            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img id="img" src="pday_5.jpg" onclick="location.href = 'pday3.html'" />
            <div class="card-body">
              <h5 class="card-title" id="title">Soap flower box</h5><br>
              <span class="price">50$</span>

            </div>
          </div>
        </div>
      </div>
    </div>


    <br><br><br>

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
