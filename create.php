<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="allStyle.css">
  <script src="javas.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>


  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@1,700&display=swap"
    rel="stylesheet">


  <title>Create Bouquet</title>
  <script>
    var size;
    var color;
    var flower;


    function footerMouseIn() {
      document.getElementById('team_name').innerText = "WebBarZo"
    }

    function footerMouseOut() {
      document.getElementById('team_name').innerText = "WBZ"
    }

    function pink() {
      document.getElementById("main").src = "pink.png";
    }

    function yellow() {
      document.getElementById("main").src = "yellow.png";
    }

    function purple() {
      document.getElementById("main").src = "purple.png";
    }

    function rose() {
      document.getElementById("main").src = "rose.png";
    }

    function tulip() {
      document.getElementById("main").src = "tulip.png";
    }

    function ranun() {
      document.getElementById("main").src = "ranun.png";
    }

    function small() {
      document.getElementById("main").src = "small.png";
    }

    function medium() {
      document.getElementById("main").src = "medium.png";
    }

    function large() {
      document.getElementById("main").src = "large.png";
    }

    function col(frm) {
      c = frm.selectBox.options[frm.selectBox.selectedIndex].text;
      if (c == 'Pink') {
        document.getElementById("main").src = "pink.png";
      } else if (c == 'White') {
        document.getElementById("main").src = "yellow.png";
      } else if (c == 'Gray') {
        document.getElementById("main").src = "purple.png";
      }
      color = c;
    }

    function flo(frm) {
      f = frm.selectBox.options[frm.selectBox.selectedIndex].text;
      if (f == 'Rose') {
        document.getElementById("main").src = "rose.png";
      } else if (f == 'Tulip') {
        document.getElementById("main").src = "tulip.png";
      } else if (f == 'Ranunculus') {
        document.getElementById("main").src = "ranun.png";
      }
      flower = f;
    }

    function si(frm) {
      s = frm.selectBox.options[frm.selectBox.selectedIndex].text;

      if (s == 'Small') {
        document.getElementById("main").src = "small.png";
      } else if (s == 'Medium') {
        document.getElementById("main").src = "medium.png";
      } else if (s == 'Large') {
        document.getElementById("main").src = "large.png";
      }
      size = s;
    }

    function create() {
      var total = Number(document.getElementById("total").textContent);
      var price;


      if (size == 'Small') {
        price = 30;
        document.getElementById("total").textContent = price;
      } else if (size == 'Medium') {
        price = 50;
        document.getElementById("total").textContent = price;

      } else if (size == 'Large') {
        price = 70;
        document.getElementById("total").textContent = price;

      }
      if (color == 'Pink') {
        if (flower == 'Rose') {
          if (size == 'Small') {
            document.getElementById("main").src = "pros.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "prom.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "prol.png";

          }
        } else if (flower == 'Tulip') {
          if (size == 'Small') {
            document.getElementById("main").src = "pts.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "ptm.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "ptl.png";

          }
        } else if (flower == 'Ranunculus') {
          if (size == 'Small') {
            document.getElementById("main").src = "pras.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "pram.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "pral.png";

          }
        }
      } else if (color == 'White') {
        if (flower == 'Rose') {
          if (size == 'Small') {
            document.getElementById("main").src = "wros.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "wrom.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "wrol.png";

          }
        } else if (flower == 'Tulip') {
          if (size == 'Small') {
            document.getElementById("main").src = "wts.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "wtm.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "wtl.png";

          }
        } else if (flower == 'Ranunculus') {
          if (size == 'Small') {
            document.getElementById("main").src = "wras.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "wram.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "wral.png";

          }
        }
      } else if (color == 'Gray') {
        if (flower == 'Rose') {
          if (size == 'Small') {
            document.getElementById("main").src = "gros.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "grom.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "grol.png";

          }
        } else if (flower == 'Tulip') {
          if (size == 'Small') {
            document.getElementById("main").src = "gts.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "gtm.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "gtl.png";

          }
        } else if (flower == 'Ranunculus') {
          if (size == 'Small') {
            document.getElementById("main").src = "gras.png";
          } else if (size == 'Medium') {
            document.getElementById("main").src = "gram.png";

          } else if (size == 'Large') {
            document.getElementById("main").src = "gral.png";

          }
        }
      }
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
      font-family: 'Montserrat', sans-serif;
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

    .clear {
      clear: both;
    }

    .title {
      font-size: 20px;
      color: pink;
      font-weight: bold;
    }

    .btn1 {
      border-radius: 10px;
      background-color: white;
      border-color: pink;
      color: rgb(73, 73, 73);
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

    <div>


      <img id="main" src="pral.png" style="float: left; margin-left: 300px; margin-right: 100px;">
      <div class="order">
        <br><br>
        <h3 style="text-align: left; margin-left: 50px; font-size: 30px; color: rgb(73, 73, 73);">Create Bouquet
        </h3>
        <div style="text-align: left;">
          <br>
          <p class="title">WRAPPING</p>
          <form name="form">

            <input type="button" class="btn1" onclick="pink()" value="PINK">
            <input type="button" class="btn1" onclick="yellow()" value="WHITE">
            <input type="button" class="btn1" onclick="purple()" value="Gray">
            <select name="selectBox" class="btn1" onChange="col(this.form);">
              <option value="">Color</option>
              <option value="option1">Pink</option>
              <option value="option2">White</option>
              <option value="option3">Gray</option>
            </select>
          </form>
          <br>

          <p class="title">FLOWER</p>
          <form name="form">

            <input type="button" class="btn1" onclick="rose()" value="Rose">
            <input type="button" class="btn1" onclick="tulip()" value="Tulip">
            <input type="button" class="btn1" onclick="ranun()" value="Ranunculus">

            <select name="selectBox" class="btn1" onChange="flo(this.form);">
              <option value="">Flower</option>

              <option value="option1">Rose</option>
              <option value="option2">Tulip</option>
              <option value="option3">Ranunculus</option>
            </select>
          </form>
          <br>

          <p class="title">SIZE</p>
          <form name="form">

            <input type="button" class="btn1" onclick="small()" value="Small">
            <input type="button" class="btn1" onclick="medium()" value="Medium">
            <input type="button" class="btn1" onclick="large()" value="Large">

            <select name="selectBox" class="btn1" onChange="si(this.form);">
              <option value="">Size</option>

              <option value="option1">Small</option>
              <option value="option2">Medium</option>
              <option value="option3">Large</option>
            </select>
          </form>
          <br>



          <input type="radio" name="chk_info" value="HTML">Visit
          <input type="radio" name="chk_info" value="CSS">Delivery
          <br><br>

          <span>Total : </span>
          <span id="total">70</span>
          <span>$</span>
          <br><br>
          <button class="btn1" onClick="window.location.reload()">Refresh</button>
          <button class="btn1" onclick="create()">Create</button>
          <br><br>
          <button class="btn1" onclick="createbuy()">Buy</button>
          <a href="cart.html"><button class="btn1">Cart</button></a>


        </div>
      </div>

      <div class="clear">
        <br>
        <hr>
        <p style="font-weight: bold; font-size: 20px; color: red;">In the case of real flowers, exchange/refund
          because of a change of heart is not allowed.</p>
        <hr><br>
        <p style="font-size: 40px; font-weight: bold; color: rgb(73, 73, 73);">How to create a bouquet?</p><br>
        <p style="font-size: 30px; font-weight: 500;">1. Wrapping Color</p>
        <img src="q1.png" alt="">
        <p style="font-size: 20px;">First, select the wrapper.<br>
          You can check the color when you click the button.<br>
          The option on the right must be selected as mandatory for wrapping color.</p>
        <hr><br>
        <p style="font-size: 30px; font-weight: 500;">2. Flower Type</p>
        <img src="q2.png" alt="">
        <p style="font-size: 20px;">Second, select the flower.<br>
          You can check the flower when you click the button.<br>
          The option on the right must be selected as mandatory for flower type.</p>
        <hr><br>
        <p style="font-size: 30px; font-weight: 500;">3. Size</p>
        <img src="q3.png" alt="">
        <p style="font-size: 20px;">Third, select the size.<br>
          You can check the size when you click the button.<br>
          The option on the right must be selected as mandatory for size.<br>
          S size is 4-6 flowers, m size is 7-11 flowers, and l size is about 12-20 flowers.</p>
        <hr><br>
        <p style="font-size: 30px; font-weight: 500;">4. Create</p>
        <img src="q4.png" alt="">
        <p style="font-size: 20px;">Select all items and press the Create button to see the completed
          bouquet.<br>

          If you want to select again, please press the refresh button.</p>
        <hr><br>
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
