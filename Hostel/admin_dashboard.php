<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin</title>
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">

<link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.json">
<style type="text/css">

.sidenav{
height: 80%;
/* background: black; */
width: 0;
position: fixed;
z-index: 1;
top: 30px;
left: 0;
overflow-x: hidden;
padding-top: 120px;
transition: 0.3s;

}

.sidenav a{
    
    display: block;
    padding: 8px 8px 8px 30px;
    text-decoration: none;
    font-size: 22px;
    transition: 0.3s;
    color: #333;
    font-family: 'Courier New', Courier, monospace;
    /* font-weight: bold; */
    text-transform: capitalize;
    font-weight: 700;

    }

    /* .sidenav a:hover{
        background-color: rgba(4, 48, 56, 0.781);
        color:gold;
        transform: scale(1.1);
        font-weight: 500;
    } */

    .sidenav .closebtn{
        position: absolute;
        /* background: black; */
        color: black;
        top: 45px;
        right: 20px;
        font-size: 36px;
        margin-left: 50px;
        cursor: pointer;
        color: aliceblue;

    }
        *{
            box-sizing: border-box;
            margin:0;
            padding:0;
            /* outline: 1px solid limegreen !important; */
        }
</style>
</head>
<script type="text/javascript">
        function openNav(){
            document.getElementById("mySideNav").style.width ="320px";
        }
        function closeNav(){
            document.getElementById("mySideNav").style.width ="0";
        }

    

        
        </script>
<body>

<?php 
session_start();
require 'db_connect.php';
require 'admin_login_check.php';
$checkLoginConn = checkLoginConn($connect);
if(isset($_SESSION["admin_id"])){
    $admin_name = $_SESSION["admin_id"];
}
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark py-3 fixed-top">
<div class="container">
<h4 class="m-2 font-monospace text-light">
Welcome <?php echo "<span class='text-warning'>" .  $_SESSION["admin_id"] . "</span>" ?>
</h4>
<!-- <ul class="navbar-nav ms-auto"> -->

        
            &nbsp;
            &nbsp;
            &nbsp;
           
                <span class="bi bi-list fs-2 text-light btn" onclick="openNav()"></span>
       
        </div>
        </nav>
        <br>
        <div class="container">
                <div class="row">
                <div class="container">

                    <div id="mySideNav" class="sidenav" style="background:rgba(0,0,0,0.70)">
                    <span class="closebtn" onclick="closeNav()">&times;</span>
                    <!-- <ul class="text-warning"> -->
                    <!-- <br>
                    <li> -->

                        <div class="accordion accordion-flush bg-dark" id="" style="">
                    <div class="accordion-item">
                    <!-- <h5 class="accordion-header" id="flush-headingTwo"> -->
                    <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-two"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo" >
                    
                    <a href="#" data-bs-toggle="modal">
                    
                    <span class="bi bi-person-fill text-dark"></span> More actions
                    
                    </a>
                    
                    </button>

                    <!-- </h5> -->

        <div id="question-two" class="accordion-collapse collapse"
        aria-labelledby="flush-headingTwo"
        data-bs-parent="#questions">
        <div class="accordion-body">
        

        <a href="adminChangePwd.php" class="fw-normal">Update Pasword</a>
        <a href="adminChangeId.php" class="fw-normal">Update ID</a>
        

        </div>

        </div>
        
                   <br> 
                    
                    <a href="#delete" data-bs-toggle="modal">
                    &nbsp;&nbsp;<span class="bi bi-search text-dark"></span> Search Record</a>
                    </li>
                    <br>
                    <li>
                    
                        <a href="#logout" data-bs-toggle="modal">
                        &nbsp; <span class="bi bi-lock-fill text-dark"></span> Logout</a>
                    
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    <br>
    <br>
    <br>
<!-- <div class="container"> -->

    <div class="row g-1">
        <div class="col-md-6 col-lg-3">
            <div class="card border-3 bg-secondar shadow p-4">
                <div class="card-body text-center">
                   <i class="bi bi-people-fill fs-1"></i>
                   <br>
                   <span class="fw-bold fs-4">Total Applicants</span>
                   <br>
                   <?php 
                   $query = $connect->query("SELECT count(*) FROM `students`;");
                   if($query)
                   {
                       $result = mysqli_fetch_array($query);
                       echo "<b class='text-secondary fw-bold fs-1'>$result[0]</b>";
                   }
                   ?>
                   <br>
                   <a href="total-users.php" class="btn btn-warning w-50">View</a>
        </div>
    </div>
</div>
        <div class="col-md-6 col-lg-3">
            <div class="card border-3 bg-secondary text-light shadow p-4">
                <div class="card-body text-center">
                   <i class="bi bi-bank fs-1"></i>
                   <br>
                   <span class="fw-bold fs-4">Total Payments</span>
                   <br>
                   <?php 
                   $query = $connect->query("SELECT sum(table_count.Output) FROM (SELECT count(*) AS Output FROM `payment` UNION ALL SELECT count(*) AS Output FROM `payment-2`) table_count");
                 
                   if($query)
                   {
                       $result = mysqli_fetch_array($query);
                       echo "<b class='text-secondary fw-bold fs-1'>$result[0]</b>";
                   }
                   ?>
                   <br>
                   <a href="total-payment.php" class="btn btn-warning w-50">View</a>
        </div>
    </div>
</div>
        <div class="col-md-6 col-lg-3">
            <div class="card border-3 shadow p-4">
                <div class="card-body text-center">
                   <i class="bi bi-door-open-fill fs-1"></i>
                   <br>
                   <span class="fw-bold fs-4">Female Hostel Occupants</span>
                   <br>
                   <?php 
                   $query = $connect->query("SELECT count(*) FROM `payment` ");
                 
                   if($query)
                   {
                       $result = mysqli_fetch_array($query);
                       echo "<b class='text-secondary fw-bold fs-1'>$result[0]</b>";
                   }
                   ?>
                   <br>
                   <a href="total-payment.php" class="btn btn-primary w-50">Verify</a>
        </div>
    </div>
</div>
        <div class="col-md-6 col-lg-3">
            <div class="card border-3 shadow p-4">
                <div class="card-body text-center">
                   <i class="bi bi-door-open fs-1"></i>
                   <br>
                   <span class="fw-bold fs-4">Male Hostel Occupants</span>
                   <br>
                   <?php 
                   $query = $connect->query("SELECT count(*) FROM `payment-2`");
                 
                   if($query)
                   {
                       $result = mysqli_fetch_array($query);
                       echo "<b class='text-secondary fw-bold fs-1'>$result[0]</b>";
                   }
                   ?>
                   <br>
                   <a href="total-payment.php" class="btn btn-primary w-50">Verify</a>
        </div>
    </div>
</div>
</div>
            </div>
            <br>
            <div class="container fw-semibold fs-3">
            <span class=" offset-3">
            Recently Added Occupants for Hostels
            </span>
            </div>

                     <table class='table table-bordered p-5 table-condensed table-lg text-center table-responsive alert alert-secondary'>
        <tr>
        <th class="p-3">Image</th>
        <th class="p-3">Application ID</th>
        <th class="p-3">Name</th>
        <th class="p-3">Sex</th>
        <th class="p-3">Email</th>
        <th class="p-3">Date</th>
        <th class="p-3">Payment Status</th>
        <th class="p-3 bg-secondary text-light">Action</th>
        </tr>
       <?php
       
       function recentGuests($connect)
       {
           $sql = $connect->query("SELECT stu.*, fe.* FROM `students` stu, `payment-2` fe WHERE stu.email = fe.email AND fe.id > (SELECT count(*) FROM `payment-2`) - 3");
           if($sql){
               while($row = mysqli_fetch_assoc($sql))
               {
                   $id = $row['id'];
                   $name = $row['fullnames'];
                   $email = $row['email'];
                   $image = $row['image'];
                   $sex = $row['sex'];
                   $payId = $row['unique_id'];
                   $date = $row['date'];
                   $status = "Verified";
                   ?>
                   <tr>
                   <td class="bg-light"><?php echo "<img src='upload_img/$image' style='width:120px'>" ?></td>
                   <td class="bg-light"><?php echo $payId ?></td>
                   <td class="bg-light"><?php echo $name ?></td>
                   <td class="bg-light"><?php echo $sex ?></td>
                   <td class="bg-light"><?php echo $email ?></td>
                   <td class="bg-light"><?php echo $date ?></td>
                   <td class="bg-light"><?php echo "<b class='text-success'>$status</b>" ?></td>
                   <td>
                   <form action="full-view-female-hostel.php" method="post">
                   <input type="hidden" name="id" value="<?php echo $payId ?>">
                   <input type="submit" name="submit" value="View all" class="btn btn-primary">
                   </form>
                   </td> 
                   </tr>
       
                   <?php
               }
            }else{
               echo "<div class='text-center alert alert-warning offset-0 w-50'>No recently added guest</div>";
           }
       }
    
       
       echo recentGuests($connect);

       ?>
        </table>
        
            <div class="container fw-bold fs-3">
            <!-- Recently Added Payments for Male Hostel -->
            </div>

                     <table class='table table-bordered p-5 table-condensed table-lg text-center table-responsive alert alert-secondary'>
        <tr>
        <th class="p-3">Image</th>
        <th class="p-3">Application ID</th>
        <th class="p-3">Name</th>
        <th class="p-3">Sex</th>
        <th class="p-3">Email</th>
        <th class="p-3">Date</th>
        <th class="p-3">Payment Status</th>
        <th class="p-3 bg-secondary text-light">Action</th>
        </tr>
       <?php
       
       function _recentMaleHostelpayment_($connect)
       {
           $sql = $connect->query("SELECT stu.*, ma.* FROM `students` stu, `payment` ma WHERE stu.email = ma.email AND ma.id > (SELECT count(*) FROM `payment`) - 3");
           if($sql){
               while($row = mysqli_fetch_assoc($sql))
               {
                   $id = $row['id'];
                   $name = $row['fullnames'];
                   $email = $row['email'];
                   $image = $row['image'];
                   $sex = $row['sex'];
                   $payId = $row['unique_id'];
                   $date = $row['date'];
                   $status = "Verified";
                   ?>
                   <tr>
                   <td class="bg-light"><?php echo "<img src='upload_img/$image' style='width:120px'>" ?></td>
                   <td class="bg-light"><?php echo $payId ?></td>
                   <td class="bg-light"><?php echo $name ?></td>
                   <td class="bg-light"><?php echo $sex ?></td>
                   <td class="bg-light"><?php echo $email ?></td>
                   <td class="bg-light"><?php echo $date ?></td>
                   <td class="bg-light"><?php echo "<b class='text-success'>$status</b>" ?></td>
                   <td>
                   <form action="full-view-male-hostel.php" method="post">
                   <input type="hidden" name="id" value="<?php echo $payId ?>">
                   <input type="submit" name="send" value="View all" class="btn btn-primary">
                   </form>
                   </td> 
                   </tr>
       
                   <?php
               }
            }else{
               echo "<div class='text-center alert alert-warning offset-0 w-50'>No recently added guest</div>";
           }
       }
    
       
       echo _recentMaleHostelpayment_($connect);

       ?>
        </table>

<div class="container">
<div class="row">
<div class="modal fade" id="paid">
<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-success text-light">
Successfull Payments <span class="text-light" style="cursor:pointer" data-bs-dismiss="modal">Exit</span>
</div>
<div class="modal-body">

<?php 
    $query = "SELECT te.*, pa.* FROM `tenants` te, `payments` pa WHERE te.email = pa.email";
    $result = mysqli_query($connect, $query);
    if($result && mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

    $image = $row["image"];
    $email = $row["email"];
    $room_number = $row["room_number"];
    $date = $row["date"];
    $verified = "<span class='fw-bold text-warning'>Verified</span>";

    echo "
                    
<div class=\"container bg-secondary p-3\">
<img src='./upload_img/$image' class='offset-0 mt-0 rounded-circle' style='width:50px;'/>
&nbsp; <span class='fw-bold text-light'>$email</span>
    <span class=\"bg-primary p-2 offset-1 text-light\">Room $room_number</span> &nbsp;&nbsp; $verified
    &nbsp;&nbsp;  <b class='text-light'> Date :</b> <i class='text-light'>$date</i> 


<br>
</div>
<br>

";
    
    }
} 

?>

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

<div class="container">
<div class="row">
<div class="modal fade" id="logout">
<div class="colmd-4"></div>
<div class="colmd-4">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body text-black">
<h4 class="text-center"> Are you sure you want to logout?</h4>
<p class="font-monospace text-center">This will exit the recent page your working on.</p>
<br>
<br>
<a href="" class="text-light btn btn-dark btn-md offset-4" data-bs-dismiss="modal">No</a>
<a href="logout.php" class="text-light btn btn-danger btn-md offset-2">Yes</a> 
</div>
</div>
</div>
</div>
<div class="colmd-4"></div>
</div>
</div>
</div>
<!-- Remove tenant -->
<div class="container">
<div class="row">
<div class="modal fade" id="delete">
<div class="colmd-4"></div>
<div class="colmd-4">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body text-black">
<form action="full-info.php" method="post">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter student's name">
<br>
<input type="submit" name="search" class="btn btn-primary w-50">
<span class="btn btn-dark offset-0 bi bi-x-circle-fill fw-bold text-light" data-bs-dismiss="modal"></span>
</form>
</div>
</div>
</div>
</div>
<div class="colmd-4"></div>
</div>
</div>
</div>
<!-- Change password -->



<script src="bootstrap-5.1.3/jquery/bootstrap.js"></script>
<script src="bootstrap-5.1.3/jquery/bootstrap.min.js"></script>
<script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>