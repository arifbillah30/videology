<?php
session_start();
include "includes/db_connect.php";
if (isset($_SESSION['username']) && isset($_SESSION['email'])) { ?>
  

<!doctype html>
<html lang="en-US">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Videology - The Video Streaming Platform </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
  

<?php

$email = $_SESSION["email"];

$sql = "SELECT password
FROM users
WHERE (email = '$email')";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$password =  $row['password'];


if (isset($_POST['confirm'])) {

    $newpass = ($_POST['pass1']);

    $query = "
        UPDATE users
    SET
        users.password = '$newpass' 
        WHERE (email = '$email')";
        mysqli_query($con, $query) or die("Query Failed.");
        header("Refresh:5 URL = index-2.php");

}

    ?>
      


<script>
function verifyPassword() {

  var pass = document.getElementById("pass").value;
  var pass1 = document.getElementById("pass1").value;
  var pass2 = document.getElementById("pass2").value;
  //check empty password field
  if(pass == "") {
     document.getElementById("message").innerHTML = "**Fill the password please!";
     return false;
  }

  if(pass == <?php echo ($password)?>) {
     document.getElementById("message").innerHTML = "**Password Not matched with your previous data";
     return false;
  }
 
 //minimum password length validation
  if(pass.length < 3) {
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
     return false;
  }

//maximum length of password validation
  if(pass.length > 15) {
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
     return false;
  } else {
    document.getElementById("message").innerHTML = "**Password Successfully Changed";
  }

}


function checkPassword() {

    var pass = document.getElementById("pass").value;
     var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;


    const allNull = [pass, pass1, pass2].some(element => element == "");

    if(allNull) {
     document.getElementById("message").innerHTML = "**Fill the password please!";
     return false;
    }

     if(pass !== "<?php echo ($password) ?>") {
     document.getElementById("message").innerHTML = "**Password Not matched with your previous data";
     return false;
  
     } else {

        if(pass1.length < 5) {
     document.getElementById("message").innerHTML = "**Password length must be atleast 6 characters";
     return false;
            
    }

    else if (pass1.length > 10) {
     document.getElementById("message").innerHTML = "**Password length must not exceed 10 characters";
     return false;
  }

    else if (pass1 != pass2)
  {	
    document.getElementById("message").innerHTML = "**Password didn't Match, Please try again**";
  } else {


    document.getElementById("message").innerHTML = "Password Changed successfully";

  }


}



}
</script>





    <!-- Header -->
    <header id="main-header">
        <div class="main-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <div class="navbar-toggler-icon" data-toggle="collapse">
                                    <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                    <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                    <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                                </div>
                            </a>
                            <a class="navbar-brand" href="index-2.php"> <img class="img-fluid logo" src="images/logo.png"
                                    alt="videology" /> </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="menu-main-menu-container">
                                    <ul id="top-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item">
                                            <a href="index-2.php">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="show-category.php">Tv Shows</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="movie-category.php">Movies</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="navbar-right menu-right">
                                <ul class="d-flex align-items-center list-inline m-0">
                                    <li class="nav-item nav-icon">
                                        <a href="#" class="search-toggle device-search">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <div class="search-box iq-search-bar d-search">
                                            <form action="#" class="searchbox">
                                                <div class="form-group position-relative">
                                                    <input type="text" class="text search-input font-size-12"
                                                        placeholder="type here to search...">
                                                    <i class="search-link ri-search-line"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon">
                                        <a href="#" class="search-toggle" data-toggle="search-toggle">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                                height="22" class="noti-svg">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                            </svg>
                                            <span class="bg-danger dots"></span>
                                        </a>
                                        <div class="iq-sub-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3"
                                                                alt="videology" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">Boot Bitty</h6>
                                                                <small class="font-size-12"> just now</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3"
                                                                alt="videology" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">The Last Breath</h6>
                                                                <small class="font-size-12">15 minutes ago</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3"
                                                                alt="videology" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">The Hero Camp</h6>
                                                                <small class="font-size-12">1 hour ago</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon">
                                        <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                            data-toggle="search-toggle">
                                            <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle"
                                                alt="user">
                                        </a>
                                        
                                        <div class="iq-sub-dropdown iq-user-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body p-0 pl-3 pr-3">
                                                    <a href="manage-profile.php" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-file-user-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Manage Profile</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="setting.php" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-settings-4-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Settings</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="pricing-plan.php" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-settings-4-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Pricing Plan</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="includes/logout.php" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-logout-circle-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Logout</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="nav-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End -->


    <!-- MainContent -->
    <section class="m-profile manage-p">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="sign-user_card">
                        <div class="row">


                            <div class="col-lg-10 device-margin">
                                <div class="profile-from">
                                
                                    <h4 class="mb-3">Change Password</h4>

                                    <form class="mt-4" method="POST" action="" >
                                    <span id = "message" style="color:red"> </span> 



                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control mb-0" id="pass"
                                                placeholder="Enter Your Old Password" autocomplete="off"  >
                                        </div>

                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control mb-0" id="pass1" name="pass1"
                                                placeholder="Enter Your New Password" autocomplete="off"   >
                                        </div>

                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control mb-0" id="pass2"
                                                placeholder="Confirm Your New Password" autocomplete="off"  >
                                        </div>

                                        <div class="d-flex">
                                        <button type="submit" onclick=" return checkPassword()" name="confirm"  class="btn btn-hover" >Confirm</button>
                                         
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="mb-0">
        <div class="container-fluid">
            <div class="block-space">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <ul class="f-link list-unstyled mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="movie-category.php">Movies</a></li>
                            <li><a href="show-category.php">Tv Shows</a></li>
                            <li><a href="#">Coporate Information</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <ul class="f-link list-unstyled mb-0">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <ul class="f-link list-unstyled mb-0">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Cotact Us</a></li>
                            <li><a href="#">Legal Notice</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 r-mt-15">
                        <div class="d-flex">
                            <a href="#" class="s-icon">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="#" class="s-icon">
                                <i class="ri-skype-fill"></i>
                            </a>
                            <a href="#" class="s-icon">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="#" class="s-icon">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-2">
            <div class="container-fluid">
                <p class="mb-0 text-center font-size-14 text-body">VIDEOLOY - 2022 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- MainContent End-->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
    </div>
    <!-- back-to-top End -->
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
    <!-- Flatpickr JavaScript -->
    <script src="js/flatpickr.min.js"></script>
    <!-- Slick Animation-->
    <script src="js/slick-animation.min.js"></script>
    <!-- Custom JS-->
    <script src="js/custom.js"></script>
</body>


</html>

<?php } else {
    header("Location: login.php");
} 
?>