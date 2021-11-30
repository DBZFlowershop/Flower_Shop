<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <script src="javas.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link type="text/css" rel="stylesheet" href="allStyle.css">


  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">

  <title>Best</title>
  <script>
    function plus() {
      var total = Number(document.getElementById("total").textContent);
      var count = Number(document.getElementById("count").value);
      var price = Number(document.getElementById("price").textContent);
      count++;
      document.getElementById("count").value = count;
      total += price;
      document.getElementById("total").textContent = total;
    }

    function minus() {
      var total = Number(document.getElementById("total").textContent);
      var count = Number(document.getElementById("count").value);
      var price = Number(document.getElementById("price").textContent);
      count--;
      document.getElementById("count").value = count;
      total -= price;
      document.getElementById("total").textContent = total;
    }

    function footerMouseIn() {
      document.getElementById('team_name').innerText = "WebBarZo"
    }

    function footerMouseOut() {
      document.getElementById('team_name').innerText = "WBZ"
    }
  </script>
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

    img {
      width: 600px;
      height: 700px;
      object-fit: scale-down;
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

    .clear {
      clear: both;
    }

    .btn1 {
      border-radius: 10px;
      background-color: white;
      border-color: pink;
      color: rgb(73, 73, 73);
    }

    .text {
      font-size: 20px;
    }

    .title {
      font-size: 20px;
      color: pink;
      font-weight: bold;
    }

    .t {
      font-size: 25px;
      font-weight: 500;
      color: rgb(73, 73, 73);

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
            <a class="nav-link " href="location.html" id="nav_location">Location</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="list.html">Flower</a>
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
    <div>
      <img id="main" src="best.png" style="float: left; margin-left: 300px; margin-right: 100px;"><br><br><br><br>
      <h3 id="itemname" style="text-align: left; margin-left: 50px;">Best Item</h3>
      <div style="text-align: left;">
        <span id="price">70</span>
        <span>$</span>
        <br><br>
        <p style="font-size: 18px;">This is the best item in our store.<br><br>


          If you contact me after paying for the product, you can choose an option.<br><br>


          <input class="btn1" type="radio" name="chk_info" value="HTML">Visit
          <input class="btn1" type="radio" name="chk_info" value="CSS">Delivery
          <br><br>
        <form>
          <input class="btn1" type=button value="-" onclick="minus()">
          <input class="btn1" type=text name=amount value=1 id="count">
          <input class="btn1" type=button value="+" onclick="plus()">
        </form>
        <br>
        <span>Total : </span>
        <span id="total">70</span>
        <span>$</span><br><br>

        <button class="btn1" onclick="pdaybuy()">Buy</button>
        <a href="cart.html"><button class="btn1">Cart</button></a>

      </div>
      <div class="clear">
        <br>
        <hr>
        <p class="t">Best 1 </p>
        <img src="best.png" alt=""><br><br>
        <hr>
        <p class="t">Best 2</p>
        <img src="wrom.png" alt=""><br><br>
        <hr>
        <p class="t">Best 3</p>
        <img src="pram.png" alt=""><br><br>
        <p style="font-weight: bold; font-size: 20px; color: red;">In the case of real flowers, exchange/refund
          because of a change of heart is not allowed.</p>
        <br><br><br>
      </div>

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
