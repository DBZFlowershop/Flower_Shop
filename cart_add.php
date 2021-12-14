<?php
include_once 'dbconfig.php';
$CustomerID= (string)$_GET['cid'];
$FlowerID=$_GET['fid'];
$Quantity=$_GET['quantity'];

$dbname = "flowershop";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$cart =	"insert into cart(CustomerID, FlowerID, Quantity) 
        values('$CustomerID', '$FlowerID', '$Quantity')";

      if($conn->query($cart) === TRUE){
        echo("<script>alert(\"Success cart!\"); location.href='cart.php';</script>"); 
      }else{
         echo "Error: " . $cart . "<br>" . $conn->error;
      }
     $conn->close();
?>