<?php
function checkLoginConn(){
    
require 'db_connect.php';

    if(!isset($_SESSION["admin_id"])){
        
        header("Location: admin_login.php");
    }
}
