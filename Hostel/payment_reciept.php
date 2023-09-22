<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <style>
     #preloader{
                    background: #fff  url("img/Color-Loading-2.gif") no-repeat center center;
                    height: 100vh;
                    width: 100%;
                    position:absolute;
                    z-index: 100;
                    margin-top: -2rem;
                    
                    
                    } 
    </style>
</head>
<body>
<nav class="bg-dark p-3">
<a href="payment_page.php" class="bi bi-x-circle text-light fs-1"></a>
</nav>
<div id="preloader"> 
<center>
<p style="margin-top: 25rem;color: rgba(240, 232, 232, 0.877)">
                   
                    <p class="text-dark fw-bold">Verifying Payment</p>
                    
                      &nbsp;&nbsp;&nbsp; <txt class="font-monospace text-dark">Please wait...</txt> 
                   </p>
                   </center>
                   </div>
    <?php
    session_start();
    // require 'header.html';
    require 'db_connect.php';
  
?>
    <div class="container">
    <div class="row">
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    
    <?php 
      if(isset($_SESSION['id'])){

        $student_Email = $_SESSION["email"];

        echo  "<div class='alert alert-success offset-0 w-100 text-center'><b>Congratulations! :</b> Payment Sucessful 
         <br>
          You are advised to print and keep a hard or soft copy of this reciept for reference purposes
        </div>";
    }
    ?>
    </div>
    <div class="col-md-6 ">
    <div class="modal-dialog shadow p-3">
    <div class="modal-content border-3">
    <div class="modal-header bg-secondary text-light fw-bold">
    Polyunawana<span class="bg-dark text-warning p-3">Hostel Payment Reciept</span>
    
    </div>
    <div class="modal-body">
   
    <?php 
    $query = $connect->query("SELECT * FROM students WHERE email = '$student_Email'");
    if($query)
    {
        $rowFetch = mysqli_fetch_assoc($query);
        if($rowFetch["sex"] == "Male")
        {
            $sql = "SELECT stu.*, pa.* FROM `students` stu,`payment` pa WHERE stu.email = pa.email AND pa.email = '$student_Email'";

    $result = mysqli_query($connect, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $image = $row["image"];
        $unique_id = $row["unique_id"];
        $fullname = $row["fullnames"];
        $state = $row["stateOfOrigin"];
        $email = $row["email"];
        $payment_status = "VERIFIED";
        $room_number = $row["room_number"];
        $date = $row["date"];
        $section = "Male Hostel";
        $amount = "NGN 15,000";
        

        echo "
        <form>
        <img src='./upload_img/$image' class='offset-5 mt-1 rounded-circle' style='width:90px; border-radius:3px'/>
        <br>
        <br>
        
        
        <b>Reciept Id :</b> <span class='text-success offset-2'>$unique_id</span> 
        <br>
        <br>
        <b>Full Name :</b> <span class='text-success offset-2'>$fullname</span> 
       <br>
       <br>
       <b>State Of Origin :</b> <span class='text-success offset-1'>$state</span> 
       <br>
       <br>
       <b>Email Address :</b> <span class='text-success offset-1'>&nbsp; $email</span>
       <br>
       <br>
       <b>Hostel Section :</b><span class='text-success offset-2'>$section</span> 
       <br>
       <br>
       <b>Room Number :</b><span class='text-success offset-2'>$room_number</span> 
       <br>
       <br>
       
       <b class='offset-0'>Amount Paid :</b><span class='text-success offset-2'>$amount</span>
       <br>
       <br>
       <b>Payment Status : <span class='text-success offset-1'>VERIFIED</span></b> 
        <br>
        
       <div class='modal-footer'>
       As approved by : <b>Polyunwana Microfinance Bank</b>
       <br>
       <img src='img/signature.jpg' style='width: 150px' alt='...'>
       <p>Akanu Ibiam Federal Polytechnic Unwana</p>
       </div>
       </form>
       
       ";
    }else{
        
        echo "No invoce avaliable";
    }

        }elseif($rowFetch["sex"] == "Female"){
            $sql = "SELECT stu.*, pa.* FROM `students` stu,`payment-2` pa WHERE stu.email = pa.email AND pa.email = '$student_Email'";

            $result = mysqli_query($connect, $sql);
            if($result){
                $row = mysqli_fetch_assoc($result);
                $image = $row["image"];
                $unique_id = $row["unique_id"];
                $fullname = $row["fullnames"];
                $state = $row["stateOfOrigin"];
                $email = $row["email"];
                $payment_status = "VERIFIED";
                $room_number = $row["room_number"];
                $date = $row["date"];
                $section = "Female Hostel";
                $amount = "NGN 15,000";
                
        
                echo "
                <form>
                <img src='./upload_img/$image' class='offset-5 mt-1 rounded-circle' style='width:90px; border-radius:3px'/>
                <br>
                <br>
                
                
                <b>Reciept Id :</b> <span class='text-success offset-2'>$unique_id</span> 
                <br>
                <br>
                <b>Full Name :</b> <span class='text-success offset-2'>$fullname</span> 
               <br>
               <br>
               <b>State Of Origin :</b> <span class='text-success offset-1'>$state</span> 
               <br>
               <br>
               <b>Email Address :</b> <span class='text-success offset-1'>&nbsp; $email</span>
               <br>
               <br>
               <b>Hostel Section :</b><span class='text-success offset-2'>$section</span> 
               <br>
               <br>
               <b>Room Number :</b><span class='text-success offset-2'>$room_number</span> 
               <br>
               <br>
               <b class='offset-0'>Amount Paid :</b><span class='text-success offset-2'>$amount</span>
               <br>
               <br>
               <b>Payment Status : <span class='text-success offset-1'>VERIFIED</span></b> 
                <br>
               <div class='modal-footer'>
               As approved by : <b>Polyunwana Microfinance Bank</b>
               <br>
               <img src='img/signature.jpg' style='width: 150px' alt='...'>
               <p>Director of New Jerusalem Lodge Unwana</p>
               </div>
               </form>
               
               ";
            }else{
                
                echo "No invoice avaliable";
            }
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class='btn btn-primary offset-4 w-25' onclick="window.print(); return(false);">Click to print reciept</button>
    
    <!-- Script to print only a specific portion of the webPage -->

    <!-- <button class='btn btn-primary offset-4 w-25' onclick="print_div('print-reciept')">Click To Print Out Reciept</button> -->
    <!-- <script type="text/javascript">
    function print_div(divName){
        var printContent = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContent);
        w.prnt();
        w.close();
    }
    </script> -->
    <br>
    <br>
    <script type="text/javascript">
    var x = document.getElementById("preloader");
    window.addEventListener("load", function(){
        x.style.display = "none";
    })
    
    </script>
     <?php 
     include 'iframe.html';
     ?>
</body>
</html>