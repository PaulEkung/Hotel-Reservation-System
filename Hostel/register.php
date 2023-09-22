<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Registration</title>
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body class="bg-primary">
  <br>
  <br>
<!-- <br> -->
<!-- <a href="welcomePage.php" class="text-light p-2 btn btn-dark">Back to home</a> -->
<!-- <br> -->
                 <div class="container">
                 <div class="row">
                 <div class="col-md-4">
<a href="welcomePage.php" class="bi bi-arrow-left-circle text-light fs-1"></a>

                 </div>   
                 <div class="col-md-4 shadow p-4 bg-white"> 
                
                 <form action="register.php" method="post" enctype="multipart/form-data">
<br>
                  <?php
                
                  require 'function_2.php';
                  $triger_registration = studentRegister($connect);
                  // $message[] ="fool" . "hfhfh";
                
                  ?>
                  <br>
                  <br>
                  <br>
                  
                <div class="form-group">
                <input type="text" class="form-control form-control-md" name="FullNames" placeholder="Full Names" autofocus>
                <br>
              
                <label for="State" class="fw-bold">State Of Origin</label>
                <select style="" type="text" name="State" class="form-control p-2" placeholder="State OF Origin">
                <option value="Abia State">Abia State</option>
                <option value="Adamawa State">Adamawa State</option>
                <option value="Akwa Ibom State">Akwa Ibom State</option>
                <option value="Anambra State">Anambra State</option>
                <option value="Bauchi State">Bauchi State</option>
                <option value="Bayelsa State">Bayelsa State</option>
                <option value="Benue State">Benue State</option>
                <option value="Borno State">Borno State</option>
                <option value="Cross River State">Cross River State</option>
                <!-- <option value="Cross River State">Cross River State</option> -->
                <option value="Delta State">Delta State</option>
                <option value="Ebonyi State">Ebonyi State</option>
                <option value="Edo State">Edo State</option>
                <option value="Ekiti Stat">Ekiti State</option>
                <option value="Enugu State">Enugu State</option>
                <option value="Gombe State">Gombe State</option>
                <option value="Imo State">Imo State</option>
                <option value="Jigawa State">Jigawa State</option>
                <option value="Kaduna State">Kaduna State</option>
                <option value="Kano State">Kano State</option>
                <option value="Katsina State">Katsina State</option>
                <option value="Kebbi State">Kebbi State</option>
                <option value="Kogi State">Kogi State</option>
                <option value="Kwara State">Kwara State</option>
                <option value="Lagos State">Lagos State</option>
                <option value="Nasarawa State">Nasarawa State</option>
                <option value="Niger State">Niger State</option>
                <option value="Ogun State">Ogun State</option>
                <option value="Ondo State">Ondo State</option>
                <option value="Osub State">Osun State</option>
                <option value="Oyo State">Oyo State</option>
                <option value="Rivers State">Rivers State</option>
                <option value="Sokoto State">Sokoto State</option>
                <option value="Taraba State">Taraba State</option>
                <option value="Yobe State">Yobe State</option>
                <option value="Zamfara State">Zamfara State</option>

                </select>
                <br>    
                <input type="text" class="form-control" name="LGA" placeholder="L.G.A">
                <br>
                &nbsp;<label for="Sex" class="fw-bold">Sex</label>
                <select type="text"  name="Sex" class="form-control" placeholder="Sex">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>

                <br>
                <input type="email" name="email" class="form-control" placeholder="Email Address">
                
                <br>
                <input type="text" name="dept" class="form-control" placeholder="Department">
                
                <br>
               
                <label for="image" class="fw-bold">Choose an image of you to upload</label>
                <input type="file" name="image" class="form-control">
                <br>
                <input type="submit" name="done"  class="btn btn-primary w-100 offset-0">
               


                </div>

               
                <br>
                <br>
                <span class="text-black offset-0">Already registered? <a href="login.php" class=""> Click here to login </a></span>
                </div>
                <div class="col-sm-4"></div>
                </div>
                </div>
                <br>
               
                </form>
                <br>
                <br>      

</body>
</html>