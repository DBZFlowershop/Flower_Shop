<!DOCTYPE html>
<html lang="en">

<head>
  <title>Buy</title>
  <link type="text/css" rel="stylesheet" href="mystyle.css">
  <script src="javas.js"></script>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- external file -->
  <link type="text/css" rel="stylesheet" href="allStyle.css">

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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
      aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Recommend</a>
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
  <div class="col-sm-3">
  </div>
  <div class="col-sm-6">
    <div style="text-align: center;">
      <p style="font-size:17pt; padding-top:30px;">Order</p>

      <table class="j_table">
        <tr class="j_tr">
          <td class="j_td">
            <p style="font-size:15pt; text-align:left;">Recipient Info</p>
          </td>
        </tr>
        <tr class="j_tr">
          <td style="text-align:left;" class="j_td">Name</td>
          <td class="j_td"><input type="text" class="join" id="name" placeholder="name" name="userID" maxlength="20"></td>
        </tr>
        <tr class="j_tr">
          <td style="text-align:left;" class="j_td">phonenumber</td>
          <td class="j_td"><input type="text" class="join" id="address" placeholder="Phone number" name="userPassword" maxlength="20"></td>
        </tr>
        <tr class="j_tr">
          <td style="text-align:left;" class="j_td">address</td>
          <td class="j_td"><input type="text" class="join" id="pw" placeholder="address" name="userPassword" maxlength="20"></td>
        </tr>
      </table>
      <hr>
      <table class="j_table">
        <tr class="j_tr">
          <td class="j_td">
            <p style="font-size:15pt; text-align:left;">Product Info</p>
          </td>
        </tr>
        <tr class="j_tr">
          <td colspan="2" class="j_td">item</td>
          <td class="j_td">item price</td>
          <td class="j_td">item count</td>
        </tr>
        <tr class="j_tr">
          <td class="j_td"><img id="buyimg" src="winter1.jpg" alt="spring" style="width:100px; height:110px; text-align:left;"></td>
          <td id="buyname">item name</td>
          <td id="buyprice">example won</td>
          <td id="buycount">1</td>
        </tr>
      </table>
      <button type="button" class="btn btn-light" onclick="payment()">Purchase</button>
	  
    </div>
  </div>

  <div class="col-sm-3">
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
