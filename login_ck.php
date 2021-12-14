<?php
session_start();
include_once 'dbconfig.php';
$CustomerID=$_POST['CustomerID'];
$CustomerPW=$_POST['CustomerPW'];

$dbname = "flowershop";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$check="SELECT *from customer WHERE CustomerID='$CustomerID'";
$result=$conn->query($check);

if($CustomerID==NULL||$CustomerPW==NULL)
{
    echo("<script>alert(\"Fill in all the blanks!\"); location.href='login.php';</script>");
    exit();
}

if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['CustomerPW']==$CustomerPW){
        $_SESSION['CustomerID']=$CustomerID;
        if(isset($_SESSION['CustomerID'])){
            header('Location: main.php');
        }
        else{
            echo("<script>alert(\"The ID or password is not correct!\"); location.href='login.php';</script>");
        }
    }
    else{
        echo("<script>alert(\"The ID or password is not correct!\"); location.href='login.php';</script>");
    }
}
else{
    echo("<script>alert(\"The ID or password is not correct!\"); location.href='login.php';</script>");
}
?>