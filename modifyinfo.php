<?php  
include_once 'dbconfig.php';?>
<?php
session_start();
if(isset($_SESSION['CustomerID']))
{
  $user = 'href=logout.php>Logout';
}
else{
  $user = 'href=login.php>Login';
}
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    $dbname = "flowershop";
    mysqli_select_db($conn, $dbname) or die('DB selection failed');

    $sql = "SELECT * FROM Customer; ";
    $result = $conn->query($sql);
  
    $result->num_rows;
    $row = $result->fetch_assoc();

    $PhoneNumber = $_POST['PhoneNumber'];
    $CustomerAddress = $_POST['CustomerAddress'];
    $CustomerID = $_SESSION['CustomerID'];
    //입력받은 데이터를 DB에 저장
    mysqli_query($conn,"UPDATE Customer SET PhoneNumber=$PhoneNumber, CustomerAddress='$CustomerAddress' WHERE CustomerID = '$CustomerID'"); 

    $sql = "SELECT * FROM Card; ";
    $result = $conn->query($sql);
  
    $result->num_rows;
    $row = $result->fetch_assoc();

    $CardNumber = $_POST['CardNumber'];
    $CustomerID = $_SESSION['CustomerID'];
    $CardPW = $_POST['CardPW'];
    $ValidThru = $_POST['ValidThru'];
    $CVC = $_POST['CVC'];

    $query = "insert into Card
        values ('$CustomerID', '$CardNumber', '$ValidThru', '$CardPW', '$CVC')";


    $result = $conn->query($query);

    $sql = "SELECT * FROM FOrder; ";
    $result = $conn->query($sql);
  
    $CustomerID = $_SESSION['CustomerID'];
    $OrderDate = date("Y-m-d", time());
    $Delivery = $_POST['Delivery'];
    $PaymentMethod = $_POST['PaymentMethod'];

    $query = "insert into FOrder(CustomerID, OrderDate, Delivery, PaymentMethod)
        values ('$CustomerID', '$OrderDate', '$Delivery', '$PaymentMethod')";

    $result = $conn->query($query);

    if($result) {
        ?>
<script>
    alert('Payment is complete.');
    location.href = 'main.php'
</script>
<?php   }
        else{
?>
<script>

    alert("fail");
</script>
<?php   }
 
        mysqli_close($conn);
?>
