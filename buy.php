<?php  
include_once 'dbconfig.php';?>
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['CustomerID']))
{
  $user = 'href=logout.php>Logout';

}
else{
  $user = 'href=login.php>Login';
}
?>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password);
$dbname = "flowershop";
mysqli_select_db($conn, $dbname) or die('DB selection failed'); 
   $WrapColor = isset($_POST['WrapColor']) ? $_POST['WrapColor'] : false;
   $FlowerType = isset($_POST['FlowerType']) ? $_POST['FlowerType'] : false;
   $Size = isset($_POST['Size']) ? $_POST['Size'] : false;

   if ($WrapColor == 'Pink') {
    if ($FlowerType == 'Rose') {
      if ($Size == 'Small') {
        $FlowerID=49;
      } else if ($Size == 'Medium') {
        $FlowerID=50;
      } else if ($Size == 'Large') {
        $FlowerID=51;
      }
    } else if ($FlowerType == 'Tulip') {
      if ($Size == 'Small') {
        $FlowerID=52;
      } else if ($Size == 'Medium') {
        $FlowerID=53;
      } else if ($Size == 'Large') {
        $FlowerID=54;
      }
    } else if ($FlowerType == 'Ranunculus') {
      if ($Size == 'Small') {
        $FlowerID=55;
      } else if ($Size == 'Medium') {
        $FlowerID=56;
      } else if ($Size == 'Large') {
        $FlowerID=57;
      }
    }
  } else if ($WrapColor == 'White') {
    if ($FlowerType == 'Rose') {
      if ($Size == 'Small') {
        $FlowerID=58;
      } else if ($Size == 'Medium') {
        $FlowerID=59;
      } else if ($Size == 'Large') {
        $FlowerID=60;
      }
    } else if ($FlowerType == 'Tulip') {
      if ($Size == 'Small') {
        $FlowerID=61;
      } else if ($Size == 'Medium') {
        $FlowerID=62;
      } else if ($Size == 'Large') {
        $FlowerID=63;
      }
    } else if ($FlowerType == 'Ranunculus') {
      if ($Size == 'Small') {
        $FlowerID=64;
      } else if ($Size == 'Medium') {
        $FlowerID=65;
      } else if ($Size == 'Large') {
        $FlowerID=66;
      }
    }
  } else if ($WrapColor == 'Gray') {
    if ($FlowerType == 'Rose') {
      if ($Size == 'Small') {
        $FlowerID=67;
      } else if ($Size == 'Medium') {
        $FlowerID=68;
      } else if ($Size == 'Large') {
        $FlowerID=69;
      }
    } else if ($FlowerType == 'Tulip') {
      if ($Size == 'Small') {
        $FlowerID=70;
      } else if ($Size == 'Medium') {
        $FlowerID=71;
      } else if ($Size == 'Large') {
        $FlowerID=72;
      }
    } else if ($FlowerType == 'Ranunculus') {
      if ($Size == 'Small') {
        $FlowerID=73;
      } else if ($Size == 'Medium') {
        $FlowerID=74;
      } else if ($Size == 'Large') {
        $FlowerID=75;
      }
    }
  }
  $sql = "SELECT * FROM flower WHERE FlowerID=$FlowerID; ";
  $result = $conn->query($sql);

  $result->num_rows;
  $row = $result->fetch_assoc();
  $name=$row["FlowerName"];
  $img=$row["FlowerImg"];
  $price=$row["FlowerPrice"];
?>
    <head>
        <title>Buy</title>
        <link type="text/css" rel="stylesheet" href="mystyle.css">
        <script src="javas.js"></script>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="path/jquery-3.3.1.min.js"></script>
        <!-- external file -->
        <link type="text/css" rel="stylesheet" href="allStyle.css">

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@1,700&display=swap"
            rel="stylesheet">

        <script type="text/javascript">
            function footerMouseIn() {
                document
                    .getElementById('team_name')
                    .innerText = "WebBarZo"
            }

            function footerMouseOut() {
                document
                    .getElementById('team_name')
                    .innerText = "WBZ"
            }
        </script>
        <script>
            var today = new Date();

            var year = today.getFullYear();
            var month = ('0' + (
                today.getMonth() + 1
            )).slice(-2);
            var day = ('0' + today.getDate()).slice(-2);

            var dateString = year + '-' + month + '-' + day;

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
        <script type="text/javascript">

            let today = new Date();

            let year = today.getFullYear(); // 년도
            let month = today.getMonth() + 1; // 월
            let date = today.getDate(); // 날짜
        </script>
        <span id="date"></span>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <span>FLOWER SHOP</span>
        </div>
        <!-- ************ header ********** -->
        <!-- brand -->
        <nav class="navbar navbar-expand-sm" id="nav">
            <a class="navbar-brand mr-auto" href="main.php">Home</a>

            <!-- collapse button -->
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#myNavbar"
                aria-controls="myNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <li class="nav-item"><a class="nav-link" <?php echo $user;?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row" style="padding-top:30px; padding-bottom:30px;">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div style="text-align: center;">
                <p style="font-size:17pt; padding-top:30px;">Order</p>
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
                        <td class="j_td"><img
                            id="buyimg"
                            src="<?php echo $img;?>"
                            alt="spring"
                            style="width:100px; height:110px; text-align:left;"></td>
                        <td id="buyname"><?php echo $name;?></td>
                        <td id="buyprice"><?php echo $price;?></td>
                        <td id="buycount">1</td>
                    </tr>

                </table>
                <hr>
                <form method="post" action="modifyinfo.php">

                    <table class="j_table">
                        <tr class="j_tr">
                            <td class="j_td">
                                <p style="font-size:15pt; text-align:left;">Recipient Info</p>
                            </td>
                        </tr>
                        <tr class="j_tr">
                            <td style="text-align:left;" class="j_td">phonenumber</td>
                            <td class="j_td"><input
                                type="text"
                                class="join"
                                id="address"
                                placeholder="Phone number"
                                name="PhoneNumber"
                                maxlength="20"></td>
                        </tr>
                        <tr class="j_tr">
                            <td style="text-align:left;" class="j_td">address</td>
                            <td class="j_td"><input
                                type="text"
                                class="join"
                                id="pw"
                                placeholder="address"
                                name="CustomerAddress"
                                maxlength="20"></td>
                        </tr>
                    </table>
                    <hr>
                    <tr>
                    <lable>
                                <input
                                    type="radio"
                                    name="PaymentMethod"
                                    value="Cash"
                                    <?php $Pay='Cash'?>>
                                    Cash
                            </lable>
                            <lable>

                                <input
                                    type="radio"
                                    name="PaymentMethod"
                                    value="Card"
                                    <?php $Pay='Card'?>>
                                    Card
                            </lable>

                        <br><br>

                    </tr>
                    <table class="j_table">
                        <tr class="j_tr">
                            <td class="j_td">
                                <p style="font-size:15pt; text-align:left;">Card Info</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left;" class="j_td">ID</td>
                            <td class="j_td"><input type="text" size="35" name="CustomerID"></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;" class="j_td">CardNumber</td>
                            <td class="j_td"><input type="text" size="35" name="CardNumber" placeholder="1111-1111-1111"></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;" class="j_td">Card PW</td>
                            <td class="j_td"><input type="password" size="35" name="CardPW"></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;" class="j_td">Valid Thru</td>
                            <td class="j_td"><input type="text" size="35" name="ValidThru" placeholder="01/23"></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;" class="j_td">CVC</td>
                            <td class="j_td"><input type="password" size="35" name="CVC"></td>
                        </tr>

                    </table>
                    <?php $OrderDate = date("Y-m-d", time()); echo $OrderDate; ?>
                <br><br><br>
                <table class="j_table">
                    <tr class="j_tr"></tr>
                    <tr class="j_tr">
                        <td class="j_td"></td>
                    </tr>
                    <tr class="j_tr">
                        <tr>
                            <lable>
                                <input
                                    type="radio"
                                    name="Delivery"
                                    value="Visit"
                                    <?php $Delivery='Visit'?>>
                                Visit
                            </lable>
                            <lable>

                                <input
                                    type="radio"
                                    name="Delivery"
                                    value="Delivery"
                                    <?php $Delivery='Delivery'?>>
                                Delivery
                            </lable>
                            <br><br>
                        </tr>

                    </table>
                    <input type="submit" class="btn btn-light"value="Purchase"/>
                </form>

                </div>
            </div>

            <div class="col-sm-3"></div>
        </div>
        <div
            class="container-fluid"
            id="footer"
            onmouseover="footerMouseIn()"
            onmouseout="footerMouseOut()">
            <div class="row">
                <div class="col-sm-6" style="font-size:50px; font-weight:600" id="team_name">
                    WBZ
                </div>
                <div class="col-sm-6 text-right">
                    Opensource Web Software<br/>
                    Professor : Aziz Nasridinov<br/>
                    Location : Chungbuk National University
                </div>
            </div>
        </div>

    </body>

</html>
