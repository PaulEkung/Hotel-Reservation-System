<?php 
require 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
<nav class="bg-secondary">
<a href="admin_dashboard.php" class="bi bi-arrow-left-circle fs-1 p-5 text-light "></a>

</nav>
<br>
            <div class="container fw-bold fs-3">
            All avaliable registered students
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
           $sql = $connect->query("SELECT * FROM `students`");
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
                   <form action="full-info.php" method="post">
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
    
       
       echo _recentMaleHostelpayment_($connect);

       ?>
        </table>
    
</body>
</html>