<!DOCTYPE html>
<html lang="en">

<head>
  <title>Join</title>
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
</head>
<style media="screen">
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

<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <span>FLOWER SHOP</span>
</div>
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
    </div>
  </nav>

      <h3 style="text-align: center; padding-top: 30px;">Sign-Up</h3><br>
      <form style="text-align:center; padding:10px;" action="join_ck.php" method="POST">
        <table class="j_table">
          <tr class="j_tr">
            <td class="j_td">ID</td>
            <td class="j_td"><input type="text" placeholder="id" name="CustomerID" maxlength="20"></td>
          </tr>
          <tr class="j_tr">
            <td class="j_td">PASSWORD</td>
            <td class="j_td"><input type="password" placeholder="password" name="CustomerPW" maxlength="20"></td>
          </tr>
          <tr class="j_tr">
            <td class="j_td">NAME</td>
            <td class="j_td"><input type="text" placeholder="name" name="CustomerName" maxlength="20"></td>
          </tr>
          <tr class="j_tr">
            <td class="j_td">EMAIL</td>
            <td class="j_td"><input type="text" placeholder="email" name="Email" maxlength="50"></td>
          </tr>
          <tr class="j_tr">
            <td class="j_td">PHONE NUMBER</td>
            <td class="j_td"><input type="text" placeholder="phone number" name="PhoneNumber" maxlength="50"></td>
          </tr>
          <tr class="j_tr">
            <td class="j_td">ADDRESS</td>
            <td class="j_td"><input type="text" placeholder="address" name="CustomerAddress" maxlength="50"></td>
          </tr>
        </table>
        <br>
        <button type="submit">join</button>
      </form>

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
