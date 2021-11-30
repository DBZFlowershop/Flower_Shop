<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <title>Cart</title>
  <script src="flowers.js"></script>
  <style media="screen">
    body {
      font-family: 'Montserrat', sans-serif;
      background-image: url('cart_bg.jpg');
      color: rgb(109, 109, 109);
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

    #cartlist {
      font-size: 50px;
      margin: 30px 0px 100px 30px;
      font-weight: 600;
      color: black;
    }

    #flowers_box {
      margin-top: 80px;
      background-color: white;
      margin-bottom: 100px;
      padding-bottom: 30px;
    }

    #cart_image {
      width: 50px;
    }

    tr:hover {
      background-color: rgba(255, 236, 239, 0.459);
    }

    .btn1 {
      border: 1px solid rgba(128, 128, 128, 0.411);
    }

    .btn1:hover {
      background-color: rgb(197, 196, 194);
    }

    table {
      text-align: center;
    }

    .flower_td_name,
    .flower_td_price,
    .flower_num {
      font-size: 18px;
    }
    .card{
      position: fixed;
      bottom: 50px;
      right: 200px;
      border: 0px solid white;
      font-size: 18px;
    }
    .card a{
      color: grey;
    }
    .list-group-item{
      background-color: rgba(255, 236, 239, 0.459);
    }
  </style>
</head>

<body onload="cart()">
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
        <li class="nav-item"><a class="nav-link active" href="cart.html">Cart</a></li>
      </ul>
    </div>
  </nav>

  <div class="container shadow-lg p-3 mb-5 bg-white rounded" id="flowers_box">
    <span id="cartlist">Cart List <img src="shopping-cart-empty-side-view.png" alt="cart image" id="cart_image"></span>
    <table class="table" id="flower_table">
      <thead>
        <tr>
          <th scope="col"><input type="checkbox" onchange="select_all()"></th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantitiy</th>
        </tr>
      </thead>
      <tbody id="flower_body">
      </tbody>
    </table>

    <hr>
    <div class="row">
      <div class="col-sm-10" style="padding-left: 30px;">Thank you for visiting our web site :)</div>
      <div class="col-sm-2">
        <a href="buy.html"><button type="button" class="btn btn-light" onclick="cart_purchase()" id="purchase_button">Purchase</button></a>
      </div>
    </div>
  </div>


  <div class="card text-center" style="width: 8rem;">
    <ul class="list-group list-group-flush">
      <a href="#nav"><li class="list-group-item">TOP</li></a>
      <a href="#purchase_button"><li class="list-group-item">BOTTOM</li></a>
    </ul>
  </div>
</body>

</html>