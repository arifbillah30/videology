<?php
session_start();

if (empty($_SESSION['username'])) { ?>


<!doctype html>
<html lang="en-US">
   
<head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Videology - The Video Streaming Platform</title>
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
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
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
                        <a class="navbar-brand" href="index.php"> <img class="img-fluid logo" src="images/logo.png"
                           alt="videology" /> </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <div class="menu-main-menu-container">
                              <ul id="top-menu" class="navbar-nav ml-auto">
                                 <li class="menu-item">
                                    <a href="index.php">Home</a>
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
                                 <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                    data-toggle="search-toggle">
                                 <img src="images/user/user1.jpg" class="img-fluid avatar-40 rounded-circle" alt="user">
                                 </a>
                                 <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body p-0 pl-3 pr-3">
                                          <a href="login.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-login-box-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="mb-0 ">Login</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="sign-up.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-user-fill text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="mb-0 ">Register</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="pricing-plan.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-price-tag-3-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="mb-0 ">Pricing Plan</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="contact-us.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-contacts-fill text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="mb-0 ">Contact US</h6>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>


                              <li class="hover-buttons">
                           <a href="login.php" class="btn btn-hover" tabindex="0">
                              <div class="gen-button-block">
                                 <span class="gen-button-line-left"></span>
                                 <span class="mr-1">SUBSCRIBE</span>
                              </div>
                           </a>
                              </li>

                            </div>
                     
                           </ul>

                        </div>
                     </nav>
                     <div class="nav-overlay"></div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header End -->


      <!-- Slider Start -->
      <section id="home" class="iq-main-slider p-0">
         <div id="home-slider" class="slider m-0 p-0">
            <div class="slide slick-bg s-bg-1">
               <div class="container-fluid position-relative h-100">
                  <div class="slider-inner h-100">
                     <div class="row align-items-center  h-100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                           <a href="javascript:void(0);">
                              <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                 <img src="images/logo.png" class="c-logo" alt="streamit">
                              </div>
                           </a>
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                              data-delay-in="0.6">bushland</h1>
                           <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                              <span class="badge badge-secondary p-2">18+</span>
                              <span class="ml-3">2 Seasons</span>
                           </div>
                           <p data-animation-in="fadeInUp" data-delay-in="1.2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                              dummy text ever since the 1500s.
                           </p>
                           <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                              <a href="show-details.php" class="btn btn-hover"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Play Now</a>
                              <a href="show-details.php" class="btn btn-link">More details</a>
                           </div>
                        </div>
                     </div>
                     <div class="trailor-video">
                        <a href="video/trailer.mp4" class="video-open playbtn">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                              enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10"
                                 points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                              <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                           </svg>
                           <span class="w-trailor">Watch Trailer</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slide slick-bg s-bg-2">
               <div class="container-fluid position-relative h-100">
                  <div class="slider-inner h-100">
                     <div class="row align-items-center  h-100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                           <a href="javascript:void(0);">
                              <div class="channel-logo" data-animation-in="fadeInLeft">
                                 <img src="images/logo.png" class="c-logo" alt="streamit">
                              </div>
                           </a>
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">sail coaster</h1>
                           <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="0.5">
                              <span class="badge badge-secondary p-2">16+</span>
                              <span class="ml-3">2h 40m</span>
                           </div>
                           <p data-animation-in="fadeInUp" data-delay-in="0.7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                              dummy text ever since the 1500s.
                           </p>
                           <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                              <a href="movie-details.php" class="btn btn-hover"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Play Now</a>
                              <a href="movie-details.php" class="btn btn-link">More details</a>
                           </div>
                        </div>
                     </div>
                     <div class="trailor-video">
                        <a href="video/trailer.mp4" class="video-open playbtn">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                              enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10"
                                 points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                              <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                           </svg>
                           <span class="w-trailor">Watch Trailer</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slide slick-bg s-bg-3">
               <div class="container-fluid position-relative h-100">
                  <div class="slider-inner h-100">
                     <div class="row align-items-center  h-100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                           <a href="javascript:void(0);">
                              <div class="channel-logo" data-animation-in="fadeInLeft">
                                 <img src="images/logo.png" class="c-logo" alt="streamit">
                              </div>
                           </a>
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">the army</h1>
                           <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="0.5">
                              <span class="badge badge-secondary p-2">20+</span>
                              <span class="ml-3">3h</span>
                           </div>
                           <p data-animation-in="fadeInUp" data-delay-in="0.7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                              dummy text ever since the 1500s.
                           </p>
                           <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                              <a href="movie-details.php" class="btn btn-hover"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Play Now</a>
                              <a href="movie-details.php" class="btn btn-link">More details</a>
                           </div>
                        </div>
                     </div>
                     <div class="trailor-video">
                        <a href="video/trailer.mp4" class="video-open playbtn">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                              enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10"
                                 points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                              <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                           </svg>
                           <span class="w-trailor">Watch Trailer</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
               fill="none" stroke="currentColor">
               <circle r="20" cy="22" cx="22" id="test"></circle>
            </symbol>
         </svg>
      </section>
      <!-- Slider End -->


      
      <!-- MainContent -->
      <div class="main-content">
         <section id="iq-favorites">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Your Favorites</h4>
                        <a href="movie-category.php" class="text-primary">View all</a>
                     </div>
                     <div class="favorites-contens">
                        <ul class="favorites-slider list-inline  row p-0 mb-0">
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/favorite/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Champions</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">13+</div>
                                          <span class="text-white">2h 30m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/favorite/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Last Race</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">7+</div>
                                          <span class="text-white">2 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/favorite/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Boop Bitty</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">15+</div>
                                          <span class="text-white">2h 30m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/favorite/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Dino Land</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">18+</div>
                                          <span class="text-white">3 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/favorite/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Jaction action</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">10+</div>
                                          <span class="text-white">1 Season</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-upcoming-movie">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Upcoming Movies</h4>
                        <a href="movie-category.php" class="text-primary">View all</a>
                     </div>
                     <div class="upcoming-contens">
                        <ul class="favorites-slider list-inline row p-0 mb-0">
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>The Last Breath</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">5+</div>
                                          <span class="text-white">2h 30m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Last Night</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">22+</div>
                                          <span class="text-white">2h 15m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>1980</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">25+</div>
                                          <span class="text-white">3h</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Looters</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">11+</div>
                                          <span class="text-white">2h 45m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/upcoming/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Vugotronic</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">9+</div>
                                          <span class="text-white">2h 30m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-topten">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title topten-title-sm">Top 10 in India</h4>
                     </div>
                     <div class="topten-contens">
                        <h4 class="main-title topten-title">Top 10 in India</h4>
                        <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                           <li>
                              <a href="movie-details.php">
                              <img src="images/top-10/01.jpg" class="img-fluid w-100" alt="">
                              </a>
                           </li>
                           <li>
                              <a href="movie-details.php">
                              <img src="images/top-10/02.jpg" class="img-fluid w-100" alt="">
                              </a>
                           </li>
                           <li>
                              <a href="movie-details.php">
                              <img src="images/top-10/03.jpg" class="img-fluid w-100" alt="">
                              </a>
                           </li>
                           <li>
                              <a href="movie-details.php">
                              <img src="images/top-10/04.jpg" class="img-fluid w-100" alt="">
                              </a>
                           </li>
                           <li>
                              <a href="movie-details.php">
                              <img src="images/top-10/05.jpg" class="img-fluid w-100" alt="">
                              </a>
                           </li>
                           <li>
                              <a href="movie-details.php">
                              <img src="images/top-10/06.jpg" class="img-fluid w-100" alt="">
                              </a>
                           </li>
                        </ul>
                        <div class="vertical_s">
                           <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                              <li>
                                 <div class="block-images position-relative">
                                    <a href="movie-details.php">
                                    <img src="images/top-10/01.jpg" class="img-fluid w-100" alt="">
                                    </a>
                                    <div class="block-description">
                                       <h5>The Illusion</h5>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">10+</div>
                                          <span class="text-white">3h 15m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="movie-details.php" class="btn btn-hover" tabindex="0">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="block-images position-relative">
                                    <a href="movie-details.php">
                                    <img src="images/top-10/02.jpg" class="img-fluid w-100" alt="">
                                    </a>
                                    <div class="block-description">
                                       <h5>Burning</h5>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">13+</div>
                                          <span class="text-white">2h 20m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="movie-details.php" class="btn btn-hover" tabindex="0">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="block-images position-relative">
                                    <a href="movie-details.php">
                                    <img src="images/top-10/03.jpg" class="img-fluid w-100" alt="">
                                    </a>
                                    <div class="block-description">
                                       <h5>Hubby Kubby</h5>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">9+</div>
                                          <span class="text-white">2h 40m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="movie-details.php" class="btn btn-hover" tabindex="0">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="block-images position-relative">
                                    <a href="movie-details.php">
                                    <img src="images/top-10/04.jpg" class="img-fluid w-100" alt="">
                                    </a>
                                    <div class="block-description">
                                       <h5>Open Dead Shot</h5>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">16+</div>
                                          <span class="text-white">1h 40m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="movie-details.php" class="btn btn-hover" tabindex="0">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="block-images position-relative">
                                    <a href="movie-details.php">
                                    <img src="images/top-10/05.jpg" class="img-fluid w-100" alt="">
                                    </a>
                                    <div class="block-description">
                                       <h5>Jumbo Queen</h5>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">15+</div>
                                          <span class="text-white">3h</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="movie-details.php" class="btn btn-hover" tabindex="0">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="block-images position-relative">
                                    <a href="movie-details.php">
                                    <img src="images/top-10/06.jpg" class="img-fluid w-100" alt="">
                                    </a>
                                    <div class="block-description">
                                       <h5>The Lost Journey</h5>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">20+</div>
                                          <span class="text-white">2h 15m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="movie-details.php" class="btn btn-hover" tabindex="0">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-suggestede" class="s-margin">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Suggested For You</h4>
                        <a href="show-category.php" class="text-primary">View all</a>
                     </div>
                     <div class="suggestede-contens">
                        <ul class="list-inline favorites-slider row p-0 mb-0">
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/suggested/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Blood Block</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">11+</div>
                                          <span class="text-white">2h 30m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/suggested/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Mission Moon</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">9+</div>
                                          <span class="text-white">2 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/suggested/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Unknown Land</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">17+</div>
                                          <span class="text-white">2h 30m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/suggested/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Friends</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">19+</div>
                                          <span class="text-white">3 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="movie-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/suggested/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Inside the Sea</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">13+</div>
                                          <span class="text-white">2h 40m</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="parallex" class="parallax-window">
            <div class="container-fluid h-100">
               <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                  <div class="col-lg-4 r-mb-23">
                     <div class="text-left">
                        <a href="javascript:void(0);">
                        <img src="images/parallax/parallax-logo.png" class="img-fluid" alt="bailey">
                        </a>
                        <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                           <ul
                              class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                              <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o"
                                 aria-hidden="true"></i></a></li>
                           </ul>
                           <span class="text-white ml-3">9.2 (lmdb)</span>
                        </div>
                        <div class="movie-time d-flex align-items-center mb-3">
                           <div class="badge badge-secondary mr-3">13+</div>
                           <h6 class="text-white">2h 30m</h6>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <div class="parallax-buttons">
                           <a href="movie-details.php" class="btn btn-hover">Play Now</a>
                           <a href="movie-details.php" class="btn btn-link">More details</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="parallax-img">
                        <a href="movie-details.php">
                        	<img src="images/parallax/p1.jpg" class="img-fluid w-100" alt="bailey">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-trending" class="s-margin">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Trending</h4>
                        <a href="show-category.php" class="text-primary">View all</a>
                     </div>
                     <div class="trending-contens">
                        <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center">
                           <li>
                              <a href="javascript:void(0);">
                                 <div class="movie-slick position-relative">
                                    <img src="images/trending/01.jpg" class="img-fluid" alt="">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">
                                 <div class="movie-slick position-relative">
                                    <img src="images/trending/02.jpg" class="img-fluid" alt="">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">
                                 <div class="movie-slick position-relative">
                                    <img src="images/trending/03.jpg" class="img-fluid" alt="">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">
                                 <div class="movie-slick position-relative">
                                    <img src="images/trending/04.jpg" class="img-fluid" alt="">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">
                                 <div class="movie-slick position-relative">
                                    <img src="images/trending/05.jpg" class="img-fluid" alt="">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">
                                 <div class="movie-slick position-relative">
                                    <img src="images/trending/06.jpg" class="img-fluid" alt="">
                                 </div>
                              </a>
                           </li>
                        </ul>
                        <ul id="trending-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                           <li>
                              <div class="tranding-block position-relative"
                                 style="background-image: url(images/trending/01.jpg);">
                                 <div class="trending-custom-tab">
                                    <div class="tab-title-info position-relative">
                                       <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                          role="tablist">
                                          <li class="nav-item">
                                             <a class="nav-link active show" data-toggle="pill" href="#trending-data1"
                                                role="tab" aria-selected="true">Overview</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data2" role="tab"
                                                aria-selected="false">Episodes</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data3" role="tab"
                                                aria-selected="false">Trailers</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data4" role="tab"
                                                aria-selected="false">Similar Like This</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="trending-content">
                                       <div id="trending-data1" class="overview-tab tab-pane fade active show">
                                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="res-logo">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="streamit">
                                                   </div>
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                             <div class="d-flex align-items-center text-white text-detail">
                                                <span class="badge badge-secondary p-3">18+</span>
                                                <span class="ml-3">3 Seasons</span>
                                                <span class="trending-year">2020</span>
                                             </div>
                                             <div class="d-flex align-items-center series mb-4">
                                                <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                   class="img-fluid" alt=""></a>
                                                <span class="text-gold ml-3">#2 in Series Today</span>
                                             </div>
                                             <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                             </p>
                                             <div class="p-btns">
                                                <div class="d-flex align-items-center p-0">
                                                   <a href="show-details.php" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                   <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                   List</a>
                                                </div>
                                             </div>
                                             <div class="trending-list mt-4">
                                                <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                   Moura, Boyd Holbrook, Joanna</span>
                                                </div>
                                                <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                   Action, Thriller, Biography</span>
                                                </div>
                                                <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                   Forceful</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data2" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="show-details.php" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                             <div class="iq-custom-select d-inline-block sea-epi">
                                                <select name="cars" class="form-control season-select">
                                                   <option value="season1">Season 1</option>
                                                   <option value="season2">Season 2</option>
                                                   <option value="season3">Season 3</option>
                                                </select>
                                             </div>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data3" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data4" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="tranding-block position-relative"
                                 style="background-image: url(images/trending/02.jpg);">
                                 <div class="trending-custom-tab">
                                    <div class="tab-title-info position-relative">
                                       <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                          role="tablist">
                                          <li class="nav-item">
                                             <a class="nav-link active show" data-toggle="pill" href="#trending-data5"
                                                role="tab" aria-selected="true">Overview</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data6" role="tab"
                                                aria-selected="false">Episodes</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data7" role="tab"
                                                aria-selected="false">Trailers</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data8" role="tab"
                                                aria-selected="false">Similar
                                             Like This</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="trending-content">
                                       <div id="trending-data5" class="overview-tab tab-pane fade active show">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="res-logo">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="streamit">
                                                   </div>
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                             <div class="d-flex align-items-center text-white text-detail">
                                                <span class="badge badge-secondary p-3">15+</span>
                                                <span class="ml-3">2 Seasons</span>
                                                <span class="trending-year">2020</span>
                                             </div>
                                             <div class="d-flex align-items-center series mb-4">
                                                <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                   class="img-fluid" alt=""></a>
                                                <span class="text-gold ml-3">#2 in Series Today</span>
                                             </div>
                                             <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s.
                                             </p>
                                             <div class="p-btns">
                                                <div class="d-flex align-items-center p-0">
                                                   <a href="show-details.php" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                   <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                   List</a>
                                                </div>
                                             </div>
                                             <div class="trending-list mt-4">
                                                <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                   Moura, Boyd Holbrook, Joanna</span>
                                                </div>
                                                <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                   Action, Thriller, Biography</span>
                                                </div>
                                                <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                   Forceful</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data6" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="show-details.php" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                             <div class="iq-custom-select d-inline-block sea-epi">
                                                <select name="cars" class="form-control season-select">
                                                   <option value="season1">Season 1</option>
                                                   <option value="season2">Season 2</option>
                                                </select>
                                             </div>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data7" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data8" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="tranding-block position-relative"
                                 style="background-image: url(images/trending/03.jpg);">
                                 <div class="trending-custom-tab">
                                    <div class="tab-title-info position-relative">
                                       <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                          role="tablist">
                                          <li class="nav-item">
                                             <a class="nav-link active show" data-toggle="pill" href="#trending-data9"
                                                role="tab" aria-selected="true">Overview</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data10" role="tab"
                                                aria-selected="false">Episodes</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data11" role="tab"
                                                aria-selected="false">Trailers</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data12" role="tab"
                                                aria-selected="false">Similar
                                             Like This</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="trending-content">
                                       <div id="trending-data9" class="overview-tab tab-pane fade active show">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="res-logo">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="streamit">
                                                   </div>
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase ">the marshal king</h1>
                                             <div class="d-flex align-items-center text-white text-detail">
                                                <span class="badge badge-secondary p-3">11+</span>
                                                <span class="ml-3">3 Seasons</span>
                                                <span class="trending-year">2020</span>
                                             </div>
                                             <div class="d-flex align-items-center series mb-4">
                                                <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                   class="img-fluid" alt=""></a>
                                                <span class="text-gold ml-3">#11 in Series Today</span>
                                             </div>
                                             <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s.
                                             </p>
                                             <div class="p-btns">
                                                <div class="d-flex align-items-center p-0">
                                                   <a href="show-details.php" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                   <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                   List</a>
                                                </div>
                                             </div>
                                             <div class="trending-list mt-4">
                                                <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                   Moura, Boyd Holbrook, Joanna</span>
                                                </div>
                                                <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                   Action, Thriller, Biography</span>
                                                </div>
                                                <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                   Forceful</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data10" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="show-details.php" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">the marshal king</h1>
                                             <div class="iq-custom-select d-inline-block sea-epi">
                                                <select name="cars" class="form-control season-select">
                                                   <option value="season1">Season 1</option>
                                                   <option value="season2">Season 2</option>
                                                   <option value="season3">Season 3</option>
                                                </select>
                                             </div>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data11" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">the marshal king</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data12" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">the marshal king</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="tranding-block position-relative"
                                 style="background-image: url(images/trending/04.jpg);">
                                 <div class="trending-custom-tab">
                                    <div class="tab-title-info position-relative">
                                       <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                          role="tablist">
                                          <li class="nav-item">
                                             <a class="nav-link active show" data-toggle="pill" href="#trending-data13"
                                                role="tab" aria-selected="true">Overview</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data14" role="tab"
                                                aria-selected="false">Episodes</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data15" role="tab"
                                                aria-selected="false">Trailers</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data16" role="tab"
                                                aria-selected="false">Similar
                                             Like This</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="trending-content">
                                       <div id="trending-data13" class="overview-tab tab-pane fade active show">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="res-logo">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="streamit">
                                                   </div>
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase ">Dark Zone</h1>
                                             <div class="d-flex align-items-center text-white text-detail">
                                                <span class="badge badge-secondary p-3">17+</span>
                                                <span class="ml-3">1 Season</span>
                                                <span class="trending-year">2020</span>
                                             </div>
                                             <div class="d-flex align-items-center series mb-4">
                                                <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                   class="img-fluid" alt=""></a>
                                                <span class="text-gold ml-3">#2 in Series Today</span>
                                             </div>
                                             <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s.
                                             </p>
                                             <div class="p-btns">
                                                <div class="d-flex align-items-center p-0">
                                                   <a href="show-details.php" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                   <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                   List</a>
                                                </div>
                                             </div>
                                             <div class="trending-list mt-4">
                                                <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                   Moura, Boyd Holbrook, Joanna</span>
                                                </div>
                                                <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                   Action, Thriller, Biography</span>
                                                </div>
                                                <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                   Forceful</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data14" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="show-details.php" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Dark Zone</h1>
                                             <div class="iq-custom-select d-inline-block sea-epi">
                                                <select name="cars" class="form-control season-select">
                                                   <option value="season1">Season 1</option>
                                                   <option value="season2">Season 2</option>
                                                </select>
                                             </div>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data15" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Dark Zone</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data16" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Dark Zone</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="tranding-block position-relative"
                                 style="background-image: url(images/trending/05.jpg);">
                                 <div class="trending-custom-tab">
                                    <div class="tab-title-info position-relative">
                                       <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                          role="tablist">
                                          <li class="nav-item">
                                             <a class="nav-link active show" data-toggle="pill" href="#trending-data17"
                                                role="tab" aria-selected="true">Overview</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data18" role="tab"
                                                aria-selected="false">Episodes</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data19" role="tab"
                                                aria-selected="false">Trailers</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data20" role="tab"
                                                aria-selected="false">Similar
                                             Like This</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="trending-content">
                                       <div id="trending-data17" class="overview-tab tab-pane fade active show">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="res-logo">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="streamit">
                                                   </div>
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                             <div class="d-flex align-items-center text-white text-detail">
                                                <span class="badge badge-secondary p-3">7+</span>
                                                <span class="ml-3">2 Seasons</span>
                                                <span class="trending-year">2020</span>
                                             </div>
                                             <div class="d-flex align-items-center series mb-4">
                                                <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                   class="img-fluid" alt=""></a>
                                                <span class="text-gold ml-3">#2 in Series Today</span>
                                             </div>
                                             <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s.
                                             </p>
                                             <div class="p-btns">
                                                <div class="d-flex align-items-center p-0">
                                                   <a href="show-details.php" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                   <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                   List</a>
                                                </div>
                                             </div>
                                             <div class="trending-list mt-4">
                                                <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                   Moura, Boyd Holbrook, Joanna</span>
                                                </div>
                                                <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                   Action, Thriller, Biography</span>
                                                </div>
                                                <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                   Forceful</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data18" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="show-details.php" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                             <div class="iq-custom-select d-inline-block sea-epi">
                                                <select name="cars" class="form-control season-select">
                                                   <option value="season1">Season 1</option>
                                                   <option value="season2">Season 2</option>
                                                </select>
                                             </div>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data19" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data20" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="tranding-block position-relative"
                                 style="background-image: url(images/trending/06.jpg);">
                                 <div class="trending-custom-tab">
                                    <div class="tab-title-info position-relative">
                                       <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                          role="tablist">
                                          <li class="nav-item">
                                             <a class="nav-link active show" data-toggle="pill" href="#trending-data21"
                                                role="tab" aria-selected="true">Overview</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data22" role="tab"
                                                aria-selected="false">Episodes</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data23" role="tab"
                                                aria-selected="false">Trailers</a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="pill" href="#trending-data24" role="tab"
                                                aria-selected="false">Similar
                                             Like This</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="trending-content">
                                       <div id="trending-data21" class="overview-tab tab-pane fade active show">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="res-logo">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="streamit">
                                                   </div>
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                             <div class="d-flex align-items-center text-white text-detail">
                                                <span class="badge badge-secondary p-3">17+</span>
                                                <span class="ml-3">2 Seasons</span>
                                                <span class="trending-year">2020</span>
                                             </div>
                                             <div class="d-flex align-items-center series mb-4">
                                                <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                   class="img-fluid" alt=""></a>
                                                <span class="text-gold ml-3">#2 in Series Today</span>
                                             </div>
                                             <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s.
                                             </p>
                                             <div class="p-btns">
                                                <div class="d-flex align-items-center p-0">
                                                   <a href="show-details.php" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                   <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                   List</a>
                                                </div>
                                             </div>
                                             <div class="trending-list mt-4">
                                                <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                   Moura, Boyd Holbrook, Joanna</span>
                                                </div>
                                                <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                   Action, Thriller, Biography</span>
                                                </div>
                                                <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                   Forceful</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data22" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="show-details.php" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                             <div class="iq-custom-select d-inline-block sea-epi">
                                                <select name="cars" class="form-control season-select">
                                                   <option value="season1">Season 1</option>
                                                   <option value="season2">Season 2</option>
                                                </select>
                                             </div>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data23" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="watch-video.php" target="_blank">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="watch-video.php" target="_blank" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="watch-video.php" target="_blank">Trailer 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="trending-data24" class="overlay-tab tab-pane fade">
                                          <div
                                             class="trending-info align-items-center w-100 animated fadeInUp">
                                             <a href="javascript:void(0);" tabindex="0">
                                                <div class="channel-logo">
                                                   <img src="images/logo.png" class="c-logo" alt="stramit">
                                                </div>
                                             </a>
                                             <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                             <div class="episodes-contens mt-4">
                                                <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">1</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 1</a>
                                                            <span class="text-primary">2.25 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">2</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 2</a>
                                                            <span class="text-primary">3.23 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">3</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 3</a>
                                                            <span class="text-primary">2 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">4</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 4</a>
                                                            <span class="text-primary">1.12 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="e-item">
                                                      <div class="block-image position-relative">
                                                         <a href="show-details.php">
                                                         <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                         </a>
                                                         <div class="episode-number">5</div>
                                                         <div class="episode-play-info">
                                                            <div class="episode-play">
                                                               <a href="show-details.php" tabindex="0"><i
                                                                  class="ri-play-fill"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="episodes-description text-body mt-2">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                            <a href="show-details.php">Episode 5</a>
                                                            <span class="text-primary">2.54 m</span>
                                                         </div>
                                                         <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-tvthrillers" class="s-margin">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">TV Thrillers</h4>
                        <a href="show-category.php" class="text-primary">View all</a>
                     </div>
                     <div class="tvthrillers-contens">
                        <ul class="favorites-slider list-inline row p-0 mb-0">
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/tvthrillers/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Day of Darkness</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">15+</div>
                                          <span class="text-white">2 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/tvthrillers/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>My True Friends</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">7+</div>
                                          <span class="text-white">2 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/tvthrillers/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Arrival 1999</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">11+</div>
                                          <span class="text-white">3 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/tvthrillers/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>Night Mare</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">18+</div>
                                          <span class="text-white">3 Seasons</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="slide-item">
                              <a href="show-details.php">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="images/tvthrillers/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>The Marshal King</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2">17+</div>
                                          <span class="text-white">1 Season</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                       </div>
                                    </div>
                                    <div class="block-social-info">
                                       <ul class="list-inline p-0 m-0 music-play-lists">
                                          <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                          <li><span><i class="ri-heart-fill"></i></span></li>
                                          <li><span><i class="ri-add-line"></i></span></li>
                                       </ul>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
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
               <p class="mb-0 text-center font-size-14 text-body">Videology - 2022 All Rights Reserved</p>
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
      <!-- Slick Animation-->
      <script src="js/slick-animation.min.js"></script>
      <!-- Custom JS-->
      <script src="js/custom.js"></script>
   </body>

</html>

</html>
<?php } else {
    header("Location: login.php");
} 
?>