<?php
include_once 'dbconfig.php';
$CustomerID=$_POST['CustomerID'];
$CustomerPW=$_POST['CustomerPW'];
$Email=$_POST['Email'];
$CustomerName=$_POST['CustomerName'];
$PhoneNumber=$_POST['PhoneNumber'];
$CustomerAddress=$_POST['CustomerAddress'];

$dbname = "flowershop";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

if($CustomerID==NULL||$CustomerPW==NULL||$Email==NULL||$CustomerName==NULL||$PhoneNumber==NULL||$CustomerAddress==NULL)
{
    echo "빈 칸을 모두 채워주세요";
    echo "<a href=join.html>back page</a>";
    exit();
}

$join="insert into customer (CustomerID, CustomerPW, Email, CustomerName, PhoneNumber, CustomerAddress) 
        values ('$CustomerID', '$CustomerPW', '$Email', '$CustomerName', '$PhoneNumber', '$CustomerAddress')";


if($conn->query($join)===TRUE){
    echo("sign up success11</br>");
    echo "<a href=login.html>로그인창으로</a>";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>