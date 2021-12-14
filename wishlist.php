<!DOCTYPE html>
<html lang="en" dir="ltr">


<?php 
session_start();
include_once 'dbconfig.php';

// Select a database
$dbname = "FlowerShop";
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


  <title>WishList</title>
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

    td:hover {
      background-color: rgba(255, 236, 239, 0.459);
      font-weight:bold;
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

<body>
  <!-- brand -->
  <nav class="navbar navbar-expand-sm" id="nav">
    <a class="navbar-brand mr-auto" href="main.php">Home</a>

    <!-- collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
      aria-expanded="false" aria-label="Toggle navigation">
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
          <li class="nav-item"><a class="nav-link" <?php echo $user;?></a></li>
          <li class="nav-item"><a class="nav-link active" href="wishlist.php">WishList</a></li>
        <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
      </ul>
    </div>
  </nav>

  <!--contents -->
  <div class="container shadow-lg p-3 mb-5 bg-white rounded" id="flowers_box">
    <span id="cartlist">Wish List <img src="heart.png" alt="cart image" id="cart_image"> 
    <span style="font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Do you want some recommendations?</span></span>
    <table class="table" id="flower_table">
        <colgroup>
            <col width="40%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
        </colgroup>
      <thead>
        <tr>
          <th scope="col">Wishes</th>
          <th colspan="3" scope="col">Category-based recommendation.</th>
        </tr>
      </thead>
      <tbody id="flower_body">
        <?php
          //만들어진 wishlist로부터 이름과 사진 가져오기
          $sql = "SELECT * FROM wishlist WHERE CustomerID='$CustomerID'";

          //쿼리 연결하기
          if($result=$conn->query($sql)){
            $result=$conn->query($sql); //쿼리문 연결후 결과 받기
          }else{
             echo "Error: " . $sql . " " . $conn->error;
          }

          $i = 0; //for문땜에 넣음
          
          //목록 만들기 시작
          if(!empty($result->num_rows) && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){ //한줄씩
                $image = $row["FlowerImg"];
                $name = $row["FlowerName"];
                $category = $row["Category"]; 
                //테이블만들기
                echo "<tr>"; //start of tr

                //내가 선택한 꽃
                echo "<td><img src='".$image."' alt='flower image' style='width:200px; height:200px;'><br>".$name."</td>"; //image td

                //카테고리 기반 랜덤 선택
                $random_category_sql = "SELECT FlowerImg, FlowerName FROM Flower WHERE Category='$category' AND FlowerName NOT IN ('$name') ORDER BY rand() limit 3";
                //쿼리 연결
                if($random_result=$conn->query($random_category_sql)){
                    $random_result=$conn->query($random_category_sql); //쿼리문 연결후 결과 받기
                  }else{
                     echo "Error: " . $random_category_sql . " " . $conn->error;
                }
                //한줄씩 처리
                if(!empty($random_result->num_rows) && $random_result->num_rows > 0){
                    while($row2 = $random_result->fetch_assoc()){ //한줄씩
                        echo "<td><img src='".$row2["FlowerImg"]."' alt='flower image' style='width:200px; height:200px;'><br>".$row2["FlowerName"]."</td>";
                    }
                }

                echo "</tr>"; //end of tr
                $i++;
            }
          }
          else{
            echo "<tr><td>0 result</td></tr>";
          }
        ?>
      </tbody>
    </table>

    <hr>
    <div class="row">
      <div class="col-sm-10" style="padding-left: 30px;">Thank you for visiting our web site :)</div>
      <div class="col-sm-2">
        <a href="cart.php"><button type="button" class="btn btn-light" id="goto_cart">cart</button></a>
      </div>
    </div>
  </div>


  <!--옆에 박스-->
  <div class="card text-center" style="width: 8rem;">
    <ul class="list-group list-group-flush">
      <a href="#nav"><li class="list-group-item">TOP</li></a>
      <a href="#goto_cart"><li class="list-group-item">BOTTOM</li></a>
    </ul>
  </div>
</body>

</html>