<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm_email</title>
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
</head>
<body class="bg-primary">
<br>
<br>
<br>
                 <div class="container">
                 <div class="row">
                 <div class="col-md-4">

                 <a href="welcomePage.php" class="bi bi-x-circle fs-1 text-light"></a>
                 </div>   
                 <div class="col-md-4 shadow p-4 bg-white"> 
                  <div class="header bg-dark text-warning p-3 text-center">
                  Please provide email to login
                  </div>
                  
                  
                     <br>

                 <form action="login.php" method="post">
                  
                <div class="form-group">

                <input type="email" class="form-control" name="Email" placeholder="Email Address">
                <br>
            <input type="submit" name="ok"  class="btn btn-primary w-100 offset-0">
                <!-- <a href="register.php" class="offset-5 btn btn-danger">Cancel</a> -->


                </div>

                </form>
                <br>
                <br>
                <?php
                     require 'function_2.php';
                     $triger_login = login($connect);
                     ?>
                </div>
                <div class="col-sm-4"></div>
                </div>
                </div>
</body>
</html>