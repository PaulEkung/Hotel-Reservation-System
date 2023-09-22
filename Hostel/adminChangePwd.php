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
    <title>Change password</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
   <br>
   <br>
   <br>
   <br>

   <script>
    function showPwd(){
                 var x = document.getElementById("pwd1");
                 var z = document.getElementById("pwd2");

                 if(x.type === "password"){
                     x.type = "text";
                 }else{
                     x.type ="password";
                 }

                 if(z.type === "password"){
                     z.type ="text";
                 }else{
                     z.type = "password";
                 }
             }
   </script>
<?php
function adminChangePwd($connect){

if(isset($_POST["changePwd"])){
    if(isset($_SESSION['admin_id'])){

     $pwd = $_SESSION['admin_pwd'];
    }
  $newPwd = $_POST["pwd1"];
  $confirmPwd = $_POST["pwd2"];
  $emptyFields = $newPwd . $confirmPwd;
  if(empty($emptyFields)){
    $message[] = "<div class='alert alert-danger text-center'>Please fill in all inputs fields</div>";
  }else if($newPwd <> $confirmPwd){
    $message[] = "<div class='alert alert-danger text-center'>The two passwords did not match</div>";
  }else{
    $sql = "UPDATE `admin` set password ='$newPwd' WHERE `admin`.password ='$pwd'";
    if($connect->query($sql) === true){
        $message[] = "<div class='alert alert-success text-center'>Password update successful</div>";
    }
  }

  foreach($message as $errors){

    echo $errors;
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
        Change your Password
       <a href="admin_dashboard.php" class="btn btn-danger offset-0 bi bi-x-circle-fill fw-bold text-light"></a>
        </div>
        <div class="modal-body text-black">
       <form action="adminChangePwd.php" method="post" class="shadow p-3">
       <?php $myFunction = adminChangePwd($connect); ?>
       <div class="form-group">
       <input type="password" name="pwd1" class="form-control" placeholder="Enter new password" id="pwd1">
       <br>
       <input type="password" name="pwd2" class="form-control" placeholder="Confirm Password" id="pwd2">
       <br>
       <input type="submit" class="btn btn-primary w-50" value="confirm" name="changePwd">
       <span type="checkbox" onclick="showPwd()" class="offset-2 bi bi-eye-fill fs-2" style="cursor:pointer"></span>
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