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
    $OrderID=0;
    $sql="SELECT MAX(OrderID) AS max_ID FROM forder";
    if($num_result=$conn->query($sql)){
        $num_result=$conn->query($sql); //쿼리문 연결후 결과 받기
      }else{
        echo "Error: " . $sql . " " . $conn->error;
      }
    
    if(!empty($num_result->num_rows) && $num_result->num_rows > 0){
        while($row = $num_result->fetch_assoc()){ //한줄씩
            $OrderID=$row["max_ID"];
        }
    }
    $item= $_GET['id'];
    $quantity=$_GET['quantity'];
    $from_user_sql = "SELECT * FROM flower WHERE FlowerID = $item";
    if($num_result=$conn->query($from_user_sql)){
        $num_result=$conn->query($from_user_sql); //쿼리문 연결후 결과 받기
      }else{
        echo "Error: " . $from_user_sql . " " . $conn->error;
      }
    
    if(!empty($num_result->num_rows) && $num_result->num_rows > 0){
        while($row = $num_result->fetch_assoc()){ //한줄씩
          /*꽃 ID, ID로 참조할 이미지, 이름, 가격 변수 설정 */
          //이름, 가격, 이미지 빼오기
          $flowerInfo_sql = "SELECT FlowerName, FlowerPrice, FlowerImg FROM Flower WHERE FlowerID=$row[FlowerID];";
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
              $price = $row2["FlowerPrice"]*$quantity;
              //테이블만들기

              $query = "insert into orderdetail(OrderID, FlowerID, Quantity)
              values ('$OrderID', '$row[FlowerID]', '$quantity')";

              $result = $conn->query($query);
              
            }
          }
        }
      }
      else{
        echo "<tr><td>0 result</td></tr>";
      }

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
