<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="allStyle.css">

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

    <title>List</title>
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

        .title {
            font-size: 20px;
            color: pink;
            font-weight: bold;
        }
        .main {
            background-size: cover;
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
    <div>

        <div class="jumbotron text-center" style="margin-bottom:0">
            <span>FLOWER SHOP</span>
        </div>
        <!-- ************ header **********   -->

        <!-- brand -->
        <nav class="navbar navbar-expand-sm" id="nav">
            <a class="navbar-brand mr-auto" href="main.php">Home</a>

            <!-- collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"
                aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="myNavbar">
                <!-- link -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="location.php" id="nav_location">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="list.php">Flower</a>
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <br>
            <img src="list.jpg" alt="">
        </div>

        <div>
            <br>
            <p style="font-size: 15px;">If you choose a flower for 3 to 5 days, we will make a pretty bouquet.
                <br><br>
                You can make it on the same day, <br><br>
                but it may not be possible depending on the situation and the availability of stock.<br><br>
                The order process for all products is<br>
                Inquiry > Order > Payment > Production > Delivery OR Visit<br><br>
                KAKAO ::<br>
                INSTAGRAM :<br>
                PHONE ::<br><br>
                <button type="button" class="btn1" onclick="location.href='https://open.kakao.com/o/sAAoogKc'">KAKAO Consulting</button>
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img id="img" src="list_middle1.jpg" onclick="location.href = 'create.php'" />
                        <div class="card-body">
                            <h5 class="card-title" id="title">Create Bouquet</h5><br>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img id="img" src="best.png" onclick="location.href = 'best.php'" />
                        <div class="card-body">
                            <h5 class="card-title" id="title">Best Item</h5><br>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img id="img" src="list_middle3.jpg" onclick="location.href = 'detail.php'" />
                        <div class="card-body">
                            <h5 class="card-title" id="title">Bouquet of money</h5><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <br><br><br><br><br>
            <h3>$ 30 to 50 Flowers</h3>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_35_1.jpg" onclick="window.open('list_35_1_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_35_2.jpg" onclick="window.open('list_35_2_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_35_3.jpg" onclick="window.open('list_35_3_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_35_4.jpg" onclick="window.open('list_35_4_bg.jpg')" hspace="0" src=""  />
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <br><br><br><br><br>
            <h3>$ 60 to 70 Flowers</h3>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_67_1.jpg" onclick="window.open('list_67_1_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_67_2.jpg" onclick="window.open('list_67_2_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_67_3.jpg" onclick="window.open('list_67_3_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_67_4.jpg" onclick="window.open('list_67_4_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <br><br><br><br><br>
            <h3>$ 80 to 100 Flowers</h3>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_810_1.jpg" onclick="window.open('list_810_1_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_810_2.jpg" onclick="window.open('list_810_2_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_810_3.jpg" onclick="window.open('list_810_3_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_810_4.jpg" onclick="window.open('list_810_4_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <br><br><br><br><br>
            <h3>Small & Special Flowers</h3>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_sp_1.jpg" onclick="window.open('list_sp_1_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_sm_1.jpg" onclick="window.open('list_sm_1_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_sp_2.jpg" onclick="window.open('list_sp_2_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img id="img" src="list_sm_2.jpg" onclick="window.open('list_sm_2_bg.jpg')" hspace="0" src="" />
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>

</body>

</html>
