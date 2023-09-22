<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome page</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">

</head>
<body class="bg-light">
   
    <section class="text-center shadow-1-strong" 
    style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.8)),
    url('img/lodge1.jpg'); background-size: cover;
    background-repeat: no-repeat;height: 100vh; background-attachment: fixed">
    <?php 
    session_start();
    include 'header.html';

    ?>
    <br>
    <br>
    <br>
    <br>
   <br>
   <br>
   <br>
   <br>
    <br>
    <span class="mt-5 text-warning bg-gradient-2 fs-1 lead fw-bold p-2" style="font-family:bondolos">

   <b>Akanu Ibiam Federal Polytechnic Unwana</b>

    </span>

   <p class="font-monospace text-light lead">Students' Hostel Allocation Services </p>
   <br>
   <!-- <p class="text-light">We ensure our customers get the best of accomodative expirience..</p> -->
<a href="register.php" class="mt-5 p-2 fw-semibold btn btn-light fw-bold w-25" style="width:">Apply Now </a>

</section>




<!-- Question Accordion -->
<section id="questions" class="p-5">
<div class="container">
<h2 class="text-center mb-4">Frequently Asked Questions</h2>
<div class="accordion accordion-flush" id="questions">
<!-- item 1 -->
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne">
<button class="accordion-button collapsed" type="button"
data-bs-toggle="collapse"
data-bs-target="#question-one">

<h3 class="lead"><b>Where exactly are you located?</b></h3>

</button>

</h2>
<div id="question-one" class="accordion-collapse collapse"
aria-labelledby="flush-headingOne"
data-bs-parent="#questions">
<div class="accordion-body">
<Address>
    <b>Address:</b> Cathedral road, Number 34 Ayodele<br>
    3937 New Campus Road , MO Unwana.

</Address>
<b>Or simply call:</b> +23470564454967, +2349067476827.
</div>
</div>

</div>

<!-- Item 2 -->

<div class="accordion-item">
<div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#question-two"
            aria-expanded="false"
            aria-controls="flush-collapseTwo" >
            
            <h3 class="lead"><b>How much is a room in your lodge?</b></h3>
            
            </button>

            </h2>

<div id="question-two" class="accordion-collapse collapse"
aria-labelledby="flush-headingTwo"
data-bs-parent="#questions">
<div class="accordion-body">
A room or Selve contain is 70,000 naira only. However, 65,000 normal payment fee and 5000 for caution fee. <br>
Note that the caution fee is refundable only when you exit from the lodge without damaging any of the lodge property.
</div>

</div>

</div>

<!-- Item 3 -->

<div class="accordion-item">
    <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-three"
                aria-expanded="false"
                aria-controls="flush-collapseThree" >
                
                <h3 class="lead"><b>Do you collect payments instalmentally?</b></h3>
                
                </button>

                </h2>

<div id="question-three" class="accordion-collapse collapse"
aria-labelledby="flush-headingThree"
data-bs-parent="#questions">
<div class="accordion-body">
  We do not accomodate customers or tenants with half payment. Only full payment is required.
    </div>

</div>

</div>

<div class="accordion-item">
        <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-four"
                    aria-expanded="false"
                    aria-controls="flush-collapseFour" >
                    
                    <h3 class="lead"><b>How do I book a room?</b></h3>
                    
                    </button>

                    </h2>

    <div id="question-four" class="accordion-collapse collapse"
    aria-labelledby="flush-headingTwo"
    data-bs-parent="#questions">
    <div class="accordion-body">
       Kindly click the BOOK NOW button above to register an apply for accomodation. 
        </div>

    </div>

    </div>


</div>
    
</div>
</div>

</section>

<section class="w-100">

                    <footer class="footer p-1 text-light position-fixed fixed-bottom" style="background:rgb(63, 5, 5);">
                    <code> <span class="fs-3">&copy;</span> 2023 Akanu Ibiam Federal Polytechnic Unwana.
                    <!-- <a href="about.php" class ='btn btn-primary offset-7 text-light'>About System and Developer</a>   -->
                    </code>
                    </footer>

                    </section> 

                    <script src="bootstrap-5.1.3/jquery/bootstrap.js"></script>
                    <script src="bootstrap-5.1.3/jquery/bootstrap.min.js"></script>
                    <script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>

  </body>                  
</html>