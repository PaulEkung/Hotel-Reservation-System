<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>All rooms</title>
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">

</head>
<body>
<?php 
include 'header.html';
require 'db_connect.php';

?>
<section id="instructor" class="p-3 bg-secondary">
    <!-- <a href="welcomePage.php" class="btn btn-primary">Home</a> -->
    <div class="container">
        <h2 class="text-center text-white">
            All Avalaible Rooms For Male Hostel.
        </h2>
        <a href="rooms.php" class="position-absolute text-decoration-none btn btn-info">View Rooms For Female Hostel</a>
        <p class="lead text-center text-white mb-4">
            We have <b class="fs-3">24</b> Avalaible rooms each for both male and female hostels
            
            <a href="payment_page.php" class="position-absolute text-decoration-none btn btn-warning offset-1">Make Payments</a>
        </p>
        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                        YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                        class="rounded-circle mb-3" alt=""> -->
            <img src="Nac_images/62f379723539a7.98217037.jpg" class="rounded-circle w-50 " alt="">
           
            <h4 class="card-title mb-3"> Room 1</h4>
            <p class="card-text">
                
            </p>
            <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "1")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
           

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                        YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                        class="rounded-circle mb-3" alt=""> -->
            <img src="Nac_images/62f379723539a7.98217037.jpg" class="rounded-circle w-50 " alt="">
            
            <h4 class="card-title mb-3"> Room 2</h4>
            <p class="card-text">
                
            </p>
            <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "2")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                            YOU CAN ALSO USE "WOMEN"(portraits/women/13.jpg)
                        class="rounded-circle mb-3" alt=""> -->
            <img src="Nac_images/631651a76a3748.29221817.jpg" style="" class="rounded-circle w-50" alt="">
           
            <h4 class="card-title mb-3 ">Room 3</h4>
            <p class="card-text">
                
            </p>
            <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "3")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                            YOU CAN ALSO USE "WOMEN"(portraits/women/13.jpg)
                        class="rounded-circle mb-3" alt=""> -->
            <img src="Nac_images/631651a76a3748.29221817.jpg" style="" class="rounded-circle w-50" alt="">
           
            <h4 class="card-title mb-3 ">Room 4</h4>
            <p class="card-text">
                
            </p>
            <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "4")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                            class="rounded-circle mb-3" alt=""> -->
                <img src="Nac_images/62f379b074cff9.87921147.jpg" style="" class="rounded-circle w-50" alt="">
           
                <h4 class="card-title mb-3">Room 5</h4>
                <p class="card-text">
                    
                </p>
                <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "5")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                        </div>
                    </div>
                </div>

            <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                            class="rounded-circle mb-3" alt=""> -->
                <img src="Nac_images/62f379b074cff9.87921147.jpg" style="" class="rounded-circle w-50" alt="">
           
                <h4 class="card-title mb-3">Room 6</h4>
                <p class="card-text">
                
                </p>
                <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "6")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 7</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "7")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
            
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 8</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "8")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>

                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">


                    <h4 class="card-title mb-3">Room 9</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "9")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 10</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "10")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>

                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 11</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "11")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 12</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "12")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 13</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "13")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">

                    <h4 class="card-title mb-3">Room 14</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "14")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>

                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 15</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "15")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 16</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "16")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>

                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 17</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "17")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 18</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "18")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 19</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "19")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 20</h4>
                    <p class="card-text">
                    
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "20")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
           
                    <h4 class="card-title mb-3">Room 21</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "21")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 22</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "22")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>

                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 23</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "23")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                    <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
            
                    <h4 class="card-title mb-3">Room 24</h4>
                    <p class="card-text">
                        
                    </p>
                    <?php 
            $result;
            $sql = $connect->query("SELECT room_number FROM payment;");
            if($sql)
            {
                $row = mysqli_fetch_array($sql);

                if($row["room_number"] == "24")
                {
                    $result = "<b class='text-danger'>Occupied</b>";
                }else{
                    $result = " <a href=\"img/1.jpg\" class=\"btn btn-dark text-light mx-1\">view room</a>";
                }
                // return $result;
                echo $result;
                
            }
            ?>

                            </div>
                        </div>
                    </div>
            
        </div>
    </div>
</section>

</body>
</html>