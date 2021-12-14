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
    echo("<script>alert(\"Fill in all the blanks!\"); location.href='join.php';</script>");
    exit();
}

$join="insert into customer (CustomerID, CustomerPW, Email, CustomerName, PhoneNumber, CustomerAddress) 
        values ('$CustomerID', '$CustomerPW', '$Email', '$CustomerName', '$PhoneNumber', '$CustomerAddress')";


if($conn->query($join)===TRUE){
    
    echo("<script>alert(\"Success Join!\"); location.href='login.php';</script>"); 
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>