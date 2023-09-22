<?php 
session_start();
require_once 'db_connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change email</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
   <br>
   <br>
   <br>
   <br>

  
<?php

function adminChangeEmail($connect){

if(isset($_POST["changeId"])){
    if(isset($_SESSION['admin_id'])){

     $id = $_SESSION['admin_id'];
    
    }
  $newId = $_POST["newId"];
  
  if(empty($newId)){
    $message[] = "<div class='alert alert-danger text-center'>Please fill in the input field</div>";
 
  }else{
    $sql = "UPDATE `admin` set admin_id ='$newId' WHERE `admin`.admi_id ='$id'";
    if($connect->query($sql) === true){
        $message[] = "<div class='alert alert-success text-center'>ID update successful</div>";
    }
  }

  foreach($message as $messages){

    echo $messages;
  }

}
}
?>

      <div class="container border-0">
        <div class="row" class=border-0>
        <div class="" id="changePwd">
        <div class="colmd-4"></div>
        <div class="colmd-4 border-0">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-dark text-light">
        Change Email Address
       <a href="admin_dashboard.php" class="btn btn-danger offset-0 bi bi-x-circle-fill fw-bold text-light"></a>
        </div>
        <div class="modal-body text-black">
       <form action="adminChangeEmail.php" method="post" class="shadow p-3">
       <?php $myFunction = adminChangeEmail($connect); ?>
       <div class="form-group">
       <input type="text" name="newId" class="form-control" placeholder="Enter new email">
       <br>
      
       <input type="submit" class="btn btn-primary w-50" value="confirm" name="changeId">
       
       </form>
        </div>
        </div>
        </div>
        </div>
        <div class="colmd-4"></div>
        </div>
        </div>
        </div> 
</body>
</html>