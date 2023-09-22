<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <style>
    ::placeholder{
      font-weight: 500;
    }
    </style>

</head>
<body>
<?php
session_start();
 
include "header.html";
 include "db_connect.php";

  ?>
  <?php 
  if(isset($_SESSION["id"])){
    $student_Email = $_SESSION["email"];
  }

  ?>

  <?php 
  $sql = "SELECT * FROM `students` WHERE email = '$student_Email'";
  $result = mysqli_query($connect, $sql);
  if($result && mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $img = $row["image"];
    $fullname = $row["fullnames"];
  }
  ?>

   <br>
   <br>
   <div class="offset-4">
     <br>
    <?php 
    require 'function_1.php';
    $payment = pay($connect);
    ?>
    </div>
   <div class="container">
    <div class="row">
    <div class="container">
    <div class="row">
    <div class="col-md-4">
<br>
    <div class="alert alert-primary w-50 offset-3">
   Hi! <?php echo  $student_Email ?>. You are about to make payment inoder to secure an accomodation in the school hostel.
   Please ensure that you have made an appropriate choice in viewing and choosing your room number.
   However, the tagged price for a room is 15.000 naira.
   <br>
   <br>
   Click here to read
   <a href="" class="text-danger">Rules and regulations</a> 
   </div>
    </div>
    <div class="col-md-4" style="margin-left:-3rem">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header bg-secondary text-light fw-bold">
    <!-- Make Payment Now <span class="btn btn-danger" data-bs-dismiss="modal">Exit</span> -->
   <span class="text-center offset-2">

     Polyunwana Hostel Payment Form
   </span> 

   
    </div>
    <div class="modal-body">
   

<form action="payment_page.php" method="post">
 
    <input type="hidden" class="form-control" name="email" value="<?php  echo $_SESSION['email']; ?>" placeholder="Enter Card Number">

    <input type="number" class="form-control" name="amount"  placeholder="Amount" value="15000">
    <br>
    <input type="number" class="form-control" name="card_number"  placeholder="Enter Card Number">
    <br>
    <label for="EXPIRY" class="text-secondary fw-bold">EXPIRY <b class="text-danger">*</b></label>
    <input type="date" class="form-control form-control-md" name="expiry">
    <br>
    <input type="number" class="form-control form-control-md" name="cvv" placeholder="CVV">
    <br>
    <input type="number" class="form-control form-control-md" name="room_number" placeholder="Room Number">
    <br>
    <input type="submit" class="btn btn-success w-50 offset-3" value="Pay" name="pay">
    <!-- <a href="login.php" class="offset-5 btn btn-danger">Cancel</a> -->


</form>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <br>
    <br>
    <img src="img/card1.jpg" class="w-50" alt="">
    <br>
    <img src="img/card2.jpg" class="w-50" alt="">
    <br>
    <img src="img/visa.jpg" class="w-50" style="" alt="">
    </div>
    </div>
    </div>
    </div>
</div>
  
<br>
<br>
<br>
<br>
<?php 
$sql = $connect->query("SELECT ma.email, fe.email FROM `payment`ma, `payment-2`fe WHERE ma.email = '$student_Email' OR fe.email = '$student_Email';");
if($sql)
{
  echo "
  <a href=\"payment_reciept.php\" class=\"offset-5 btn btn-primary\">Check direct invoice</a>
    
  ";
}else{
  echo NULL;
}

?>

</body>
</html>