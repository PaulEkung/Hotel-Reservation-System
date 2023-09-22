<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login_Admin</title>
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
</head>
<body class="bg-primary">
<br>
<br>
<br>
                 <div class="container">
                 <div class="row">
                 <div class="col-md-4"></div>   
                 <div class="col-md-4 shadow p-4 bg-white"> 
                  <div class="header bg-dark text-warning p-3">
                  Admin Login
                  </div>
                  <br>
                  
                      
                        
                        
                 <form action="admin_login.php" method="post">
                  
                <div class="form-group">

                <input type="text" class="form-control" name="id" placeholder="Provide ID" autofocus>
                <br>
                <input type="password" class="form-control" name="pwd" placeholder="Enter Password">
                <br>
                &nbsp;&nbsp;&nbsp;<input type="submit" name="login"  class="btn btn-primary w-25 offset-0">
                <a href="welcomePage.php" class="offset-5 btn btn-dark">Cancel</a>


                </div>

                </form>
                
                </div>
                <?php
                    session_start();
                     require 'function_1.php';
                     $triger_Admin_login = admin_login($connect);
                     ?>
                <div class="col-sm-4"></div>
                </div>
                </div>
</body>
</html>