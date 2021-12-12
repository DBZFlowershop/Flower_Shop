<?php
session_start();
include_once 'dbconfig.php';
$CustomerID=$_POST['CustomerID'];
$CustomerPW=$_POST['CustomerPW'];

$dbname = "flowershop";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$check="SELECT *from customer WHERE CustomerID='$CustomerID'";
$result=$conn->query($check);

if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['CustomerPW']==$CustomerPW){
        $_SESSION['CustomerID']=$CustomerID;
        if(isset($_SESSION['CustomerID'])){
            header('Location: main.php');
        }
        else{
            echo "세션 저장 실패";
        }
    }
    else{
        echo "아이디 또는 패스워드가 틀렸습니다.";
    }
}
else{
    echo "아이디 또는 패스워드가 틀렸습니다.";
}
?>