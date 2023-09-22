<?php 
session_start();
require 'db_connect.php';

    if(isset($_SESSION["admin_id"])){
        unset($_SESSION["admin_id"]);
        header("Location: admin_login.php");
    }
