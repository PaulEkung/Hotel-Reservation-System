<?php
session_start();
require 'db_connect.php';

function studentRegister($connect){
 if(isset($_POST["done"]) && isset($_FILES["image"]["name"])){

    $fullname = $_POST["FullNames"];
    $state = $_POST["State"];
    $lga = $_POST["LGA"];
    $sex = $_POST["Sex"];
    $email = $_POST["email"];
    $dept = $_POST["dept"];
   

    $unique_id = bin2hex(random_int(666, 999));
    $img_name = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $img_size = $_FILES["image"]["size"];
    $img_error = $_FILES["image"]["error"];
    if($img_error === 0){
      $img_extension = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_extension_to_lc = strtolower($img_extension);
      $allowed_extensions = array('jpg', 'jpeg', 'png');
      if(in_array($img_extension_to_lc, $allowed_extensions)){
        $new_img_name = uniqid("$fullname", true) . '.' . $img_extension_to_lc;
        $img_upload_path = './upload_img/'. $new_img_name;
        if($img_size > 4000000){
          $message[]= "<span class='alert alert-danger'>The image file size is too large!</span>";
        }elseif(file_exists($new_img_name)){

          $message[] = "<span class='alert alert-danger'>The image file has alredy been uploaded!</span>";

        }else{
          move_uploaded_file($tmp_name, $img_upload_path);
        }
      }else{
        $message[] = "<span class='alert alert-danger'>You cannot upload images of this type '$allowed_extensions'</span>";

      }
    }else{
      // echo "<span class='alert alert-danger'><b>Error</b> Unknown image error :</span>";

    }
    }
   if(empty($fullname) || empty($state) || empty($lga) || empty($sex) || empty($email)
 || empty($img_name) || empty($dept)){

    $message[] = "<span class='alert alert-danger offset-1'><b>Required : </b>Please fill in all required inputs</span>";

   }else{

        $sql = "SELECT email FROM `students` WHERE email = ?;";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt, $sql)){

      $message[] = "<span class='alert alert-danger'><b>404 : </b> Sorry, an error occured.</span>";

        }else{
          mysqli_stmt_bind_param($stmt, "s", $email);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $row_count = mysqli_stmt_num_rows($stmt);
          if($row_count > 0){
          echo "<span class='alert alert-danger'>'$email' has already exist</span>";

          }else{
            $query = "INSERT INTO `students` (unique_id, fullnames, stateOfOrigin, localGovOrigin, sex, email, department, image) 
            VALUES ('$unique_id', '$fullname', '$state', '$lga', '$sex', '$email', '$dept', '$new_img_name')";
            if($connect->query($query) === TRUE){

              
            // $_SESSION["session_message"] = "<span class='alert alert-success'><b>Success : Form submitted successfully </b></span>";
            header("Location: login.php");

            }else{

            $message[] = "<span class='alert alert-danger'><b>Failed : </b>Failed to handle request!</span>";
              // header("Location: welcomePage.php");
            }
            
          }
        }
        
      }
      foreach($message as $alert){
        echo $alert;
      }
    }


function login($connect){
  if(isset($_POST["ok"])){
    
   
    $confirm_email = stripslashes($_POST["Email"]);
    if(empty($confirm_email)){
    echo "<div class='alert alert-danger '><b>Required : </b>Please fill in all input fields</div>";


    }else{
      $confirm_query = "SELECT * FROM `students` WHERE email = '$confirm_email'";
      $result = mysqli_query($connect, $confirm_query);
      if($result){
        $row = mysqli_fetch_assoc($result);
        if($row["email"] === $confirm_email){
          $_SESSION["id"] = $row["id"];
          $_SESSION["email"] = $row["email"];

          if($row["sex"] == "Male"){
          header("Location: rooms-2.php");
          }elseif($row["sex"] == "Female"){
           header("Location: rooms.php");
          }

        }else{
          echo "<span class='alert alert-danger'><b>Unmatched : </b>Incorrect email address</span>";

        }
      }
    }

  }
}
 



