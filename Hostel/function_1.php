
<?php
require 'db_connect.php';
// session_start();
function Contact(){

if(isset($_POST['send'])){

$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
if(empty($email) || empty($subject) || empty($message)){

    echo "<script type='text/javascript'>window.alert('Please fill in all required input fields')</script>";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($email, FILTER_SANITIZE_EMAIL)){
    echo "<script type='text/javascript'>window.alert('Invalid email address provided. Please provide a valid email.')</script>";

}else{

    $to = "$email";
    $Subject = "$subject";
    $Message = "$message";
    
    $headers = "From: pauldrums32@gmail.com";
    if(mail($to, $Subject, $Message, $headers)){
    echo "<script type='text/javascript'>window.alert('Mail sent successfully! We will send a reply to this email.')</script>";

    }else{
    echo "<script type='text/javascript'>window.alert('Failed to send mail! Please try again later.')</script>";

    }
    
    }
  }

  }

  function pay($connect){
      if(isset($_POST["pay"])){
          $student_email = $_POST["email"];
          $card_num = $_POST["card_number"];
          $expiry = $_POST["expiry"];
          $cvv = $_POST["cvv"];
          $amount = $_POST["amount"];
          $room_num = $_POST["room_number"];
          if(empty($card_num) || empty($expiry) || empty($cvv) || empty($room_num) || empty($amount)){

            echo "<span class='alert alert-danger'>Please fill all the required fields with valid information</span>";

          }elseif(strlen($card_num) <> 16){
            echo "<span class='alert alert-danger text-center'>Invalid card number! Please enter a valid card number</span>";
          
          }elseif(strlen($cvv) <> 3){
          echo "<span class='alert alert-danger'><b>Invalid CVV number! Please enter a valid CVV number</span>";

          }elseif($amount != 15000){
            echo "<span class='alert alert-danger'><b>Amount to be paid is NGN 15000 only</span>";
          }else{
            $_query = $connect->query("SELECT sex FROM students WHERE email = '$student_email';");
            if($_query && mysqli_num_rows($_query) > 0)
            {
             $row = mysqli_fetch_assoc($_query);
              $sex = $row["sex"];
              if($sex == "Male")
              {

                $sql = "SELECT room_number FROM `payment` WHERE room_number = ?;";
                  $stmt = mysqli_stmt_init($connect);
                  if(!mysqli_stmt_prepare($stmt, $sql)){
                
                echo "<span class='alert alert-danger'><b>404 : </b> Sorry, an error occured.</span>";
                
                  }else{
                    mysqli_stmt_bind_param($stmt, "s", $room_num);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $row_count = mysqli_stmt_num_rows($stmt);
                    if($row_count > 0){
                      
                    echo "<div class='alert alert-danger offset-0 w-50'>
                    Sorry! Room number '$room_num' Already taken by another student. Please choose another room number.
                        </div>";
                    }else{
                      $query = "INSERT INTO `payment` (email, amount, card_num, expiry, cvv, room_number) 
                         VALUES ('$student_email', '$amount', '$card_num', '$expiry', '$cvv', '$room_num')";
                        if($connect->query($query) === TRUE){
                      
                      header("Location: payment_reciept.php");
                      
                      }else{
                       echo "<span class='alert alert-danger'><b>404 : </b> Sorry! Failed to handle payment request. <br>
                      Please try again later.</span>";
                      
                       }

                    }
                    }   

              }elseif($sex == "Female")
              {
                $sql = "SELECT room_number FROM `payment-2` WHERE room_number = ?;";
                $stmt = mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt, $sql)){
              
              echo "<span class='alert alert-danger'><b>404 : </b> Sorry, an error occured.</span>";
              
                }else{
                  mysqli_stmt_bind_param($stmt, "s", $room_num);
                  mysqli_stmt_execute($stmt);
                  mysqli_stmt_store_result($stmt);
                  $row_count = mysqli_stmt_num_rows($stmt);
                  if($row_count > 0){
                    
                  echo "<div class='alert alert-danger offset-0 w-50'>
                  Sorry! Room number '$room_num' Already taken by another student. Please choose another room number.
                      </div>";
                  }else{
                    $query = "INSERT INTO `payment-2` (email, amount, card_num, expiry, cvv, room_number) 
                       VALUES ('$student_email', '$amount', '$card_num', '$expiry', '$cvv', '$room_num')";
                      if($connect->query($query) === TRUE){
                    
                    header("Location: payment_reciept.php");
                    
                    }else{
                     echo "<span class='alert alert-danger'><b>404 : </b> Sorry! Failed to handle payment request. <br>
                    Please try again later.</span>";
                    
                     }

                  }
                  }   
              }
            }
          }

           
    }
  }

  function admin_login($connect){

    if(isset($_POST["login"])){

      $id = stripslashes($_POST["id"]);
      $pwd = stripslashes($_POST["pwd"]);
      if(empty($id) || empty($pwd)){
      echo "<div class='alert alert-danger offset-4' style='width:27.5rem'><b>Required : </b>Please fill in all input fields</div>";
  
  
      }else{
        $confirm_query = "SELECT * FROM `admin` WHERE admin_id = '$id' or password = '$pwd'";
        $result = mysqli_query($connect, $confirm_query);
        if($result){
          $row = mysqli_fetch_assoc($result);
          if($id === strtolower($row["admin_id"]) || strtoupper($row["admin_id"]) && $pwd === $row["password"]){
            $_SESSION["admin"] = $row["id"];
            $_SESSION["admin_id"] = $row["admin_id"];
            $_SESSION["admin_pwd"] = $row["password"];
            
            header("Location: admin_dashboard.php");
  
          }else{
            echo "<div class='alert alert-danger  offset-4' style='width:27.5rem'><b>Unmatched : </b>Incorrect ID or password</div>";
  
          }
        }
      }
  
    }
  }


//   $sql = "SELECT room_number FROM `payment` WHERE room_number = ?;";
//   $stmt = mysqli_stmt_init($connect);
//   if(!mysqli_stmt_prepare($stmt, $sql)){

// echo "<span class='alert alert-danger'><b>404 : </b> Sorry, an error occured.</span>";

//   }else{
//     mysqli_stmt_bind_param($stmt, "s", $room_num);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_store_result($stmt);
//     $row_count = mysqli_stmt_num_rows($stmt);
//     if($row_count > 0){
      
//     echo "<div class='alert alert-danger offset-0 w-50'>
//     Sorry! Room number '$room_num' Already taken by another student. Please choose another room number.
//         </div>";

// }else{
//   $query = "INSERT INTO `payment` (email, amount, card_num, expiry, cvv, room_number) 
//   VALUES ('$student_email', '$card_num', '$expiry', '$cvv', '$room_num')";
//   if($connect->query($query) === TRUE){

//   header("Location: payment_reciept.php");

// }else{
// echo "<span class='alert alert-danger'><b>404 : </b> Sorry! Failed to handle payment request. <br>
// Please try again later.</span>";

// }
// }
// }
// }

  

    

  
