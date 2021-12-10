<?php
session_start();
$CustomerID=$_POST['CustomerID'];
$CustomerPW=$_POST['CustomerPW'];

$mysql=mysqli_connect("localhost", "root", "123", "test")

$check="SELECT *from Customer WHERE CustomerID='$CustomerID'"
$result=$mysqli->query($check);
if(result->num_rows==1){
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