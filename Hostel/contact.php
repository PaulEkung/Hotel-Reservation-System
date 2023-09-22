<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

<div class="row">
    
    <div class="container">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header bg-success text-light">
    Contact Us Now <a href="welcomePage.php" class="btn btn-light">Exit</a>
    </div>
    <div class="modal-body">

<form action="welcomePage.php" method="post">
<?php 
 require 'function_1.php';
 $triger_Mailing = Contact($connect);

 ?>
 
    <input type="email" class="form-control" name="email" placeholder="Your Email">
    <p class="text-secondary">Please ensure the Email address is a valid one so that we can get back to you.</p>
    <br>
    <input type="text" class="form-control" name="subject" placeholder="Subject">
    <br>
    <textarea type="text" cols="100" rows="10" class="form-control" name="message" placeholder="Your Message"></textarea>
    <br>
    <input type="submit" class="btn btn-success" name="send">


</form>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-3"></div>
    </div>
    </div>
    </div>
</div>
</div>
    
</body>
</html>