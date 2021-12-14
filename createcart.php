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

  echo $name;

  $sql = "SELECT * FROM Cart; ";
  $result = $conn->query($sql);

  $result->num_rows;
  $row = $result->fetch_assoc();

  $CustomerID = $_SESSION['CustomerID'];
  $Quantity = 1;

  $query = "insert into Cart ()
      values ('$CustomerID', '$FlowerID', '$Quantity')";


  $result = $conn->query($query);

  
?>
<script>
    location.href = 'cart.php'
</script>
