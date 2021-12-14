<!DOCTYPE html>
<html lang="en" dir="ltr">


<?php 
session_start();
include_once 'dbconfig.php';

// Select a database
$dbname = "flowerShop";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

//아이디 가져오기
if(isset($_SESSION['CustomerID']))
{
  $CustomerID = $_SESSION['CustomerID'];
  $user = 'href=logout.php>Logout';
}
else{
  $user = 'href=login.php>Login';
}
?>

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

    <title>Cart</title>
    <script src="flowers.js"></script>
    <style media="screen">
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url("cart_bg.jpg");
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
            margin: 30px 0 100px 30px;
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

        .flower_num,
        .flower_td_name,
        .flower_td_price {
            font-size: 18px;
        }
        .card {
            position: fixed;
            bottom: 50px;
            right: 200px;
            border: 0 solid white;
            font-size: 18px;
        }
        .card a {
            color: grey;
        }
        .list-group-item {
            background-color: rgba(255, 236, 239, 0.459);
        }
    </style>
</head>

<body>
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
                <a class="nav-link active" href="cart.php">Cart</a>
            </li>
        </ul>
    </div>
</nav>

<!--contents -->
<div class="container shadow-lg p-3 mb-5 bg-white rounded" id="flowers_box">
    <span id="cartlist">Cart List
        <img src="shopping-cart-empty-side-view.png" alt="cart image" id="cart_image"></span>
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
        <?php
          //유저ID를 갖고있는 attribute개수
          $from_user_sql = "SELECT * FROM Cart WHERE CustomerID='$CustomerID';"; 

          //쿼리 연결하기
          if($num_result=$conn->query($from_user_sql)){
            $num_result=$conn->query($from_user_sql); //쿼리문 연결후 결과 받기
          }else{
             echo "Error: " . $from_user_sql . " " . $conn->error;
          }

          $i = 0; //for문땜에 넣음
          
          //목록 만들기 시작
          if(!empty($num_result->num_rows) && $num_result->num_rows > 0){
            while($row = $num_result->fetch_assoc()){ //한줄씩

              /*꽃 ID, ID로 참조할 이미지, 이름, 가격 변수 설정 */
              //이름, 가격, 이미지 빼오기
              $FlowerID = $row["FlowerID"];
              $flowerInfo_sql = "SELECT FlowerName, FlowerPrice, FlowerImg FROM Flower WHERE FlowerID=$FlowerID";

              //쿼리 연결하기
              if($conn->query($flowerInfo_sql)){
                $flowerInfo_result=$conn->query($flowerInfo_sql); //쿼리문 연결후 결과 받기
              }else{
                echo "Error: " . $flowerInfo_sql . "<br>" . $conn->error;
              }

              if(!empty($flowerInfo_result->num_rows) && $flowerInfo_result->num_rows > 0){
                while($row2 = $flowerInfo_result->fetch_assoc()){ //한줄씩
                  $image = $row2["FlowerImg"];
                  $name = $row2["FlowerName"];
                  $quantity = $row["Quantity"];
                  $price = $row2["FlowerPrice"]*$quantity;
                  //테이블만들기
                  echo "<tr>"; //start of tr
                  echo "<td><input type='checkbox' class='check'></td>"; //checkbox
                  echo "<td><img src='".$image."' alt='flower image' style='width:13em'></td>"; //image td
                  echo "<td id='product_name".$i."'>".$name."</td>";//name td
                  echo "<td id='product_price".$i."'>".$price."$</td>";//price td
                  //quantity td
                  echo '<td id="count'.$i.'">'.$quantity.'</td>"';

                  echo "</tr>"; //end of tr
                  $i++;
                }
              }
            }
          }
          else{
            echo "<tr><td>0 result</td></tr>";
          }
        ?>
        </tbody>
    </table>

    <script>
        function Cart_purchase() {
            var sum = 0;
            var selected_flowers = "";
            var checkbox = document.getElementsByClassName('check');
            var itemlist = "?item=";
            var itemcount = 0;
            for (var i = 0; i < checkbox.length; i++) {
                var count = document
                    .getElementById("count" + i)
                    .innerHTML;
                if (checkbox[i].checked == true && count > 0) {
                    var itemid = i + 1;
                    itemcount++;
                    sum += count * parseInt(document.getElementById("product_price" + i).innerHTML);
                    selected_flowers += count + " " + document
                        .getElementById("product_name" + i)
                        .innerHTML + ", ";
                    if (itemlist == "?item=") {
                        itemlist = itemlist + itemid;
                    } else {
                        itemlist = itemlist + "," + itemid;
                    }
                }
            }
            if (sum > 0) {
                alert(
                    "You selected \n\n" + selected_flowers + "\n----------------\n" + sum + "$"
                );
                location.href = 'cart_buy.php' + itemlist + '&itemcount=' + itemcount;
            } else {
                alert("You selected nothing!");
            }
        }
    </script>
    <hr>
    <div class="row">
        <div class="col-sm-9" style="padding-left: 30px;">Thank you for visiting our web site :)</div>
        <button type="button" class="btn btn-light" onclick="" id="purchase_button">Delete</button>
        <div class="col-sm-1">
            <button
                type="button"
                class="btn btn-light"
                onclick="Cart_purchase()"
                id="purchase_button">Purchase</button>
        </a>
    </div>
</div>
</div>

<!--옆에 박스-->
<div class="card text-center" style="width: 8rem;">
<ul class="list-group list-group-flush">
    <a href="#nav">
        <li class="list-group-item">TOP</li>
    </a>
    <a href="#purchase_button">
        <li class="list-group-item">BOTTOM</li>
    </a>
</ul>
</div>
</body>

</html>
