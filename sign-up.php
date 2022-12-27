<!doctype html>
<html lang="en-US">

<head>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Videology - The Video Streaming Platform</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico"/>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style  -->
   <link rel="stylesheet" href="css/style.css"/>
   <!-- Responsive -->
   <link rel="stylesheet" href="css/responsive.css"/>
</head>
<body>
<div id="loading">
   <div id="loading-center">
   </div>
</div>




    <?php

       include "includes/db_connect.php";
            if (isset($_POST['signup'])) {

                   $username = ($_POST['username']);
                  $email = ($_POST['email']);
                  $password = (($_POST['password']));

                  
                  if (empty($username)) {
                     header("Location: sign-up.php?error=Nam is Required.#registration");
                  }  elseif (empty($email)) {
                     header("Location: sign-up.php?error=Email is Required.#registration");
                  } elseif (empty($password)) {
                     header("Location: sign-up.php?error=Password is Required.#registration");
                  } else {

                     $query = "SELECT email FROM users WHERE email='$email'";
                     $result1 = mysqli_query($con, $query) or die("Query faild.");

                     $count = mysqli_num_rows($result1);
                     if ($count > 0) {
                        header("Location: sign-up.php?error= Email Already Exists.");
                     } else {
                        $query1 = "INSERT INTO users (username,email,password) 
                  VALUE ('$username','$email','$password')";
                        $result = mysqli_query($con, $query1) or die("Query Failed.");


                        if ($result) {
                              $last_id = mysqli_insert_id($con);

                              header("Location: login.php?error=Registration is successful.#registration".$last_id);
                        }
                     }
                  }
            }


      ?>







<!-- MainContent -->
<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">                    
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <h3 class="mb-3 text-center">Sign Up</h3>

                     <form class="mt-4" method="POST" action="">
                        <div class="form-group">                                 
                           <input type="text" class="form-control mb-0" name="username" id="exampleInputEmail2" placeholder="Enter Full Name" autocomplete="off" required>
                        </div>
                        <div class="form-group">                                 
                           <input type="email" class="form-control mb-0" name="email" id="exampleInputEmail3" placeholder="Enter email" autocomplete="off" required>
                        </div>
                        <div class="form-group">                                 
                           <input type="password" class="form-control mb-0" name="password" id="exampleInputPassword2" placeholder="Password" required>
                        </div>  
                        <div class="custom-control custom-checkbox mb-3">
                           <input type="checkbox" class="custom-control-input" id="customCheck">
                           <label class="custom-control-label" for="customCheck">I accept <a href="#" class="text-primary"> Terms and Conditions</a></label>
                        </div>                      
                           
                        <button type="submit" name="signup" class="btn btn-hover">Sign Up</button>
                                                            
                     </form>
                  </div>
               </div>    
               <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     Already have an account? <a href="login.php" class="text-primary ml-2">Sign In</a>
                  </div>                        
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- MainContent End-->
<!-- jQuery, Popper JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Slick JS -->
<script src="js/slick.min.js"></script>
<!-- owl carousel Js -->
<script src="js/owl.carousel.min.js"></script>
<!-- select2 Js -->
<script src="js/select2.min.js"></script>
<!-- Magnific Popup-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Slick Animation-->
<script src="js/slick-animation.min.js"></script>
<!-- Custom JS-->
<script src="js/custom.js"></script>
</body>

</html>