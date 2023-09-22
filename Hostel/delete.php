<?php
require_once 'db_connect.php';
if(isset($_GET["delete_id"])){
    $id = $_GET["delete_id"];
    $sql = "DELETE FROM `students` WHERE unique_id = '$id'";
    if($connect->query($sql) === true){
        header("Location: admin_dashboard.php?User+deleted+successfully");
    }else{
        header("Location: admin_dashboard.php?Failed+to+delete+user");
    }
}
elseif(isset($_GET["delete"]))
{
    $email = $_GET["delete"];
    $sql = "DELETE FROM `payment` WHERE email = '$email'";
    if($connect->query($sql) === true){
        header("Location: admin_dashboard.php?User+deleted+successfully");
    }else{
        header("Location: admin_dashboard.php?Failed+to+delete+user");
    }
}
elseif(isset($_GET["deleteEmail"]))
{
    $email = $_GET["deleteEmail"];
    $sql = "DELETE FROM `payment-2` WHERE email = '$email'";
    if($connect->query($sql) === true){
        header("Location: admin_dashboard.php?User+deleted+successfully");
    }else{
        header("Location: admin_dashboard.php?Failed+to+delete+user");
    }
}