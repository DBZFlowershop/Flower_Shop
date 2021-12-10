<?php
$CustomerID=$_POST['CustomerID'];
$CustomerPW=$_POST['CustomerPW'];
$Email=$_POST['Email'];
$CustomerName=$_POST['CustomerName'];
$PhoneNumber=$_POST['PhoneNumber'];
$CustomerAddress=$_POST['CustomerAddress'];

if($CustomerID==NULL||$CustomerPW==NULL||$Email==NULL||$CustomerName==NULL||$PhoneNumber==NULL||$CustomerAddress==NULL)
{
    echo "빈 칸을 모두 채워주세요";
    echo "<a href=signUp.html>back page</a>";
    exit();
}

$mysql=mysqli_connect("localhost", "root", "123", "test")

$check="SELECT *from Customer WHERE CustomerID='$CustomerID'"
$result=$mysqli->query($check);
if($result->num_rows==1)
{
    echo "중복된 id입니다.";
    echo "<a href=join.html>back page</a>";
    exit();
}

$join=mysqli_query($mysql, "INSERT INTO user_info (userid, userpw, name, email)
                            VALUES ('$CustomerID', '$CustomerPW', '$Email', '$CustomerName', '$PhoneNumber', '$CustomerAddress')";
if($join){
    echo "sign up success";
}

?>