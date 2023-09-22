<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full info</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
<!-- <br> -->
<?php
require "db_connect.php";
if(isset($_POST["send"]))
{
     $id = $_POST["id"];

    $sql = "SELECT stu.*, ma.* FROM `students`stu, `payment`ma WHERE stu.email = ma.email AND stu.unique_id ='$id'";
    $result = mysqli_query($connect, $sql);
    if($result == true){

        $row = mysqli_fetch_assoc($result);

        $image = $row['image'];
        $name = $row['fullnames'];
        $email = $row['email'];
        $sex = $row['sex'];
        $state = $row['stateOfOrigin'];
        $lga = $row['localGovOrigin'];
        $amount = $row['amount'];
        $payId = $row['unique_id'];
        $Department = $row['department'];
        $room_number = $row['room_number'];
        $status = "Verified";



    echo "<table class='text-center table-bordered alert alert-secondary table'>" . //'table-striped' class can also be added.

    "<thead>" . 
    "<br>" .
    " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='admin_dashboard.php' class='bi bi-arrow-left-circle offset-0 text-secondary fs-1'></a> " .

    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Image</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Applicant ID</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Name</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Sex</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>State Of Origin</th>" .
    "</thead>" .
    "<tbody>" .
    "<tr>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>" .
    "<img src='upload_img/$image' style='width:120px'>" . "".
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>" .
    "" . $payId . "" .
    "</td>" .
    "<td class='bg-light p-3' style='border: 2px solid white'>" .
    "". $name. "" .
    "</td>" .
    "<td class=' p-3 bg-light' style='border: 2px solid white'>" .
    "" . $sex . "" .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $state .
    "</td>" .
    "</tr>" .
    "</tbody>" .
    "<thead>" .
    "<tbody>" .
    "<th class='p-2 alert alert-secondary' style='border: 2px solid white'>LGA</th>" .
    "<th class='p-2  alert alert-secondary' style='border: 2px solid white'>Department</th>" .
    "<th class='p-2  alert alert-secondary' style='border: 2px solid white'>Room Number <span class='fw-lighter'></span></th>" .
    "<th class='p-2 alert alert-secondary' style='border: 2px solid white'>Amount</th>" .
    "<th class='bg-dark p-3 bg-gradient text-warning' style='border: 4px solid white'>Actions</th>" .
    "</thead>" .
    "<tr>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $lga . "" .
    "</td>" .
    "<td class='p-5 w-25 bg-light' style='border: 4px solid white'>" .
    "" . $Department . "" .
    "</td>" .
    "<td class=' p-5 bg-light' style='border: 4px solid white'>" .
    "" . $room_number. "".
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "<b class='text-danger'>" . $amount . "</b>" .

    "</td>" .
    "<td class='bg-light p-4' style='border: 4px solid white'>" .
    "<a href='#delete' data-bs-toggle='modal' class='bi bi-trash-fill text-danger fs-3'></a>" .
    "</td>" .
    "</tr>" .
    "</tbody>" .

    "</table>"; 

    
    }
   
  }
  

?>

<div class="container">
<div class="row">
<div class="modal fade" role="dialog" id="delete">
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form action="set-dept-time.php" method="post" autocomplete="off">
<div class="form-group shadow p-5 bg-light">
<p class="fs-6 lead fw-bold">Are you sure to delete this record?</p>
<a href="#" class="bi bi-x-circle fs-2 offset-2 text-danger" data-bs-dismiss="modal"></a>
<?php 

print("<a href='delete.php?delete=$email' class='bi bi-check-circle fs-2 text-success offset-4'></a>");

?>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-sm-4"></div>
</div>
</div>
</div>
</div>
</div>


<script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script> 
</body>
</html>