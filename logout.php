<?php
include_once 'dbconfig.php';
session_start();
$res=session_destroy();
if($res){
    header('Location: main.php');
}
?>