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

<head>
	<title>Fall</title>
	<link type="text/css" rel="stylesheet" href="mystyle.css">
	<script src="javas.js"></script>
	<meta charset="utf-8">
	<!-- external file -->
	<link type="text/css" rel="stylesheet" href="allStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@1,700&display=swap"
		rel="stylesheet">
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
	    }		}
	</style>
</head>

<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
    <span>FLOWER SHOP</span>
  </div>
  <!-- ************ header **********   -->
  <!-- brand -->
  <nav class="navbar navbar-expand-sm" id="nav">
    <a class="navbar-brand mr-auto" href="main.php">Home</a>

    <!-- collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link dropdown-toggle active" href="" data-toggle="dropdown">Recommend</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="situation.php">Contextual</a>
            <a class="dropdown-item" href="spring.php">Seasonal</a>
            <a class="dropdown-item" href="pday.php">Pday</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" <?php echo $user;?></a></li>
        <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
      </ul>
    </div>
  </nav>
	</nav>
		
</div>
<!-- ************ header **********   -->
<div style="text-align: center;">
			<ul class="j_ul">
				<li><a href="spring.php">Spring</a></li>
				<li><a href="summer.php">Summer</a></li>
				<li><a href="fall.php" style="font-size:20px; font-weight: bold;">Fall</a></li>
				<li><a href="winter.php">Winter</a></li>
			</ul>
		</div>
  </div>
	</div>

	<div class="row" style="padding-top:30px; padding-bottom:30px;">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
		<div class="container-fluid bg-3 text-left">
		<div class="row">
  <?php
  include_once 'dbconfig.php';

  $dbname = "flowershop";
  mysqli_select_db($conn, $dbname) or die('DB selection failed');
  
  $sql = "SELECT * FROM flower WHERE Category='Fall'; ";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      if($row["FlowerID"]==29||$row["FlowerID"]==33||$row["FlowerID"]==37){
        echo "<div class=\"col-sm-4\">";
      }
      echo "<div class=\"seaitem\" onclick=\"location.href='detail1.php?id=".$row["FlowerID"]."'\">
      <img class=\"seaflowerimg\" src=\"".$row["FlowerImg"]."\" alt=\"spring\">
      <p class=\"situation\">".$row["FlowerName"]."</p>
      <p class=\"price\">".$row["FlowerPrice"]." $</p>
      </div>
      <hr>";
      if($row["FlowerID"]==32||$row["FlowerID"]==36||$row["FlowerID"]==40){
        echo "</div>";
      }
    }
  }else{
    echo "0 results";
  }
  ?>
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
