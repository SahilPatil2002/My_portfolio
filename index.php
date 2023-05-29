

<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <title>Sahil - Personal Portfolio</title>
  <meta name="description" content="Personal Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
  <!-- Web fonts-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
  <!-- CSS vendors-->
  <link rel="stylesheet" href="css/bootstrap-custom.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/tiny-slider.css">
  <link rel="stylesheet" href="css/lity.min.css">
  <link rel="stylesheet" href="css/simplebar.min.css">
  <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
  <!-- Main CSS-->
  <link rel="stylesheet" href="css/main.css">
  <!-- CSS Color scheme-->
  <link id="color-scheme" rel="stylesheet" href="css/colors/main-darkgreen.css">
  <!-- Custom CSS (Add your custom CSS styles to this file)-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- removeIf(customizerDist)-->
  <link rel="stylesheet" href="../customizer/main.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- endremoveIf(customizerDist)-->
</head>

<?php 
include "_dbconnect.php";
?>


<body class="theme-dark">
  <!-- Preloader-->
  <div class="preloader">
    <div class="preloader-block">
      <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span></div>
    </div>
  </div>
  <div id="overlay-effect"></div>
  <!-- Navbar-->
  <nav class="navbar-expand-md navbar fixed-top" id="navbar"><a class="navbar-brand nav-name" data-scroll="" href="#home-area">
      <!-- Navbar Logo-->
      <img class="img-fluid r-logo" src="img/logo.png" alt="">SAHIL</a>
    <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
    <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
      <!-- Navbar menu-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> -->
        <li class="nav-item"><a class="nav-link" href="#blog">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <!-- Home-->
  <section class="home-area element-cover-bg" id="home" style="background-image:url(img/main.jpg)">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 col-lg-8 home-content text-center">
          <h1 class="home-name">SAHIL <span>PATIL</span></h1>
          <h4 class="cd-headline clip home-headline">I’m a <span class="cd-words-wrapper single-headline"><b class="is-visible">Developer</b><b>Designer</b><b>Freelancer</b></span></h4>
        </div>
      </div>
    </div>
    <div class="fixed-wrapper">
      
      <!-- Social media icons-->
      <div class="fixed-block block-right">
        <ul class="list-unstyled social-icons">
          <li><a href="https://twitter.com/SahilPa22485482"><i class="icon ion-logo-twitter"></i></a></li>
          <li><a href="https://www.facebook.com/profile.php?id=100040868026179"><i class="icon ion-logo-facebook"></i></a></li>
          <li><a href="https://www.linkedin.com/in/sahil2502/"><i class="icon ion-logo-linkedin"></i></a></li>
          <li><a href="https://github.com/SahilPatil2002"><i class="icon ion-logo-github"></i></a></li>
          <li><a href="https://www.instagram.com/sahil.patil25/"><i class="icon ion-logo-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- About lightbox-->
  <div class="lightbox-wrapper" id="about" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Get to know me</p>
                  <h2 class="section-title">About Me</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Info section-->
            <div class="info-section single-section">
              <div class="row align-items-center">
                <!-- Picture part-->
                <div class="col-12 col-lg-5 info-img"><img class="img-fluid img-thumbnail" src="img/photo.jpg" alt="About Picture"></div>
                <!-- Content part-->
                <div class="col-12 col-lg-7 info-content">
                  <div class="content-block">
                    <h2 class="content-subtitle">Who am i?</h2>
                    <h6 class="content-title">I'm Sahil Patil & I am a Web Developer</h6>
                    <div class="content-description">
                      <p>I am a Website Developer and i have been building beautiful and noteworthy websites, which comply with the latest design trends. I help convert a vision and an idea into meaningful and useful products. Having a sharp eye for product evolution helps me prioritize tasks, iterate fast and deliver faster.</p>
                    </div>
                    <address class="content-info">
                      <div class="row">
                        <div class="col-12 col-md-6 single-info"><span>Name:</span>
                          <p>Sahil Patil</p>
                        </div>
                        <div class="col-12 col-md-6 single-info"><span>Email:</span>
                          <p><a href="mailto:sahilpatil1616@gmail.com">sahilpatil1616@gmail.com</a></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6 single-info"><span>Age:</span>
                          <p>21</p>
                        </div>
                        <div class="col-12 col-md-6 single-info"><span>From:</span>
                          <p>Mumbai, India</p>
                        </div>
                      </div>
                    </address>
                    <div class="d-block d-sm-flex align-items-center"><a class="btn content-download button-main button-scheme" href="img/resume final.pdf" download role="button">Download CV</a>
                      <ul class="list-unstyled list-inline content-follow">
                        <li class="list-inline-item"><a href="https://twitter.com/SahilPa22485482"><i class="icon ion-logo-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/sahil.patil25/"><i class="icon ion-logo-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/sahil2502/"><i class="icon ion-logo-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/SahilPatil2002"><i class="icon ion-logo-github"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100040868026179"><i class="icon ion-logo-facebook"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Services section-->
            <div class="services-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">Services i offer to my clients</p>
                    <h2 class="section-title">My Services</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-logo-css3"></i>
                    <h6 class="service-title">Html/Css websites</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-md-images"></i>
                    <h6 class="service-title">PSD Design</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-logo-ionic"></i>
                    <h6 class="service-title">User Friendly UI</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-logo-wordpress"></i>
                    <h6 class="service-title">Wordpress Designs</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-md-move"></i>
                    <h6 class="service-title">Fully Responsive</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-ios-rocket"></i>
                    <h6 class="service-title">Creative</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimonials section-->
            <div class="testimonials-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">What my clients think about me</p>
                    <h2 class="section-title">Testimonials</h2>
                  </div>
                </div>
              </div>
              <div class="my-slider">
                <div class="slider-item">
                  <!-- Single review-->
                  <div class="single-review swiper-slide">
                    <div class="review-header d-flex justify-content-between">
                      <div class="review-client">
                        <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/person.png" alt="Client">
                          <div class="client-details">
                            <h6 class="client-name">Client 1</h6><span class="client-role">Envato Customer</span>
                          </div>
                        </div>
                      </div><i class="icon ion-md-quote review-icon"></i>
                    </div>
                    <p class="review-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quod impedit perspiciatis dolore tempore mollitia inventore placeat molestias. Voluptates aspernatur quisquam veniam quaerat. Omnis dolore ducimus ea labore quae ex?</p>
                  </div>
                </div>
                <div class="slider-item">
                  <!-- Single review-->
                  <div class="single-review swiper-slide">
                    <div class="review-header d-flex justify-content-between">
                      <div class="review-client">
                        <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/person.png" alt="Client">
                          <div class="client-details">
                            <h6 class="client-name">Client 2</h6><span class="client-role">Entrepreneur</span>
                          </div>
                        </div>
                      </div><i class="icon ion-md-quote review-icon"></i>
                    </div>
                    <p class="review-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quod impedit perspiciatis dolore tempore mollitia inventore placeat molestias. Voluptates aspernatur quisquam veniam quaerat. Omnis dolore ducimus ea labore quae ex?</p>
                  </div>
                </div>
                <div class="slider-item">
                  <!-- Single review-->
                  <div class="single-review swiper-slide">
                    <div class="review-header d-flex justify-content-between">
                      <div class="review-client">
                        <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/person.png" alt="Client">
                          <div class="client-details">
                            <h6 class="client-name">Client 3</h6><span class="client-role">Envato Customer</span>
                          </div>
                        </div>
                      </div><i class="icon ion-md-quote review-icon"></i>
                    </div>
                    <p class="review-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quod impedit perspiciatis dolore tempore mollitia inventore placeat molestias. Voluptates aspernatur quisquam veniam quaerat. Omnis dolore ducimus ea labore quae ex?</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pricing section-->
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Resume lightbox-->
  <div class="lightbox-wrapper" id="resume" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Check out my Resume</p>
                  <h2 class="section-title">Resume</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Resume section-->
            <div class="resume-section single-section">
              <div class="row">
                <!-- Education part-->
                <div class="col-12 col-md-6">
                  <div class="col-block education">
                    <h3 class="col-title">Education</h3>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Bachelor Degree</h5><span class="item-details">University of Mumbai / 2019 - 2022</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">HSC (Science)</h5><span class="item-details">Maharashtra State Board / 2018 - 2019</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">SSC </h5><span class="item-details">Maharashtra State Board / 2016 - 2017</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                  </div>
                </div>


                
                <!-- Experience part-->
                <div class="col-12 col-md-6">
                  <div class="col-block experience">
                    <h3 class="col-title">Experience</h3>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Web Developer Intern</h5><span class="item-details">Algoocean tech. / 2022 - 2023</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Web Developer</h5><span class="item-details">Perspectiwitty / 2023</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <!-- <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">UI/UX Designer</h5><span class="item-details">Discord / 2019 - Present</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div> -->
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="col-block education">
                    <h3 class="col-title">Projects</h3>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Movie Info</h5><span class="item-details">Movie Information website</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">To Do List</h5><span class="item-details">To do list website using PHP crud operation</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Architecture Website</h5><span class="item-details">Architecture Website</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="skills-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">My level of knowledge in some tools</p>
                    <h2 class="section-title">My Skills</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="single-skill" data-percentage="85">
                    <div class="skill-info"><span class="skill-name">HTML/CSS</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="60">
                    <div class="skill-info"><span class="skill-name">Wordpress</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="50">
                    <div class="skill-info"><span class="skill-name">JavaScript</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="single-skill" data-percentage="60">
                    <div class="skill-info"><span class="skill-name">PHP</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="75">
                    <div class="skill-info"><span class="skill-name">Bootstrap</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="70">
                    <div class="skill-info"><span class="skill-name">JQuery</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="video-section single-section">
              <div class="row align-items-center">
                <div class="col-12 col-lg-6 content-part">
                  <h3 class="video-title">Take a tour of my office</h3>
                  <p class="video-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia cum quasi assumenda culpa praesentium consectetur voluptatibus expedita. Voluptatem tempore, aspernatur rem facilis, distinctio nemo! Odio velit, nemo dolorem voluptas!</p>
                  <p class="video-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium qui aspernatur unde mollitia, in laborum.</p>
                </div>
                <div class="col-12 col-lg-6 video-part"><a class="media-lightbox" href="https://youtu.be/hY1AjdyKUQI" data-lightbox>
                    <div class="embed-responsive embed-responsive-16by9">
                      <div class="embed-responsive-item element-cover-bg"><span class="play-wrapper"><i class="icon ion-md-play"></i></span></div>
                    </div>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Portfolio lightbox-->
  <!-- <div class="lightbox-wrapper" id="portfolio" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Showcasing some of my best work</p>
                  <h2 class="section-title">Portfolio</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>

            <div class="portfolio-section single-section">
              <div class="row">
                <div class="col-12">
                  <ul class="list-inline filter-control" role="group" aria-label="Filter Control">
                    <li class="list-inline-item tab-active" data-filter="*">All</li>
                    <li class="list-inline-item" data-filter=".brand">Brand</li>
                    <li class="list-inline-item" data-filter=".design">Design</li>
                    <li class="list-inline-item" data-filter=".photos">Photos</li>
                  </ul>
                </div>
              </div>
              <div class="portfolio-grid row">
                <div class="single-item col-6 col-lg-4 design"><a class="portfolio-item" href="img/item-1.jpg" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="img/item-1.jpg">
                      <div class="item-content">
                        <h6 class="content-title">Label Tag Mockup</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>
                <div class="single-item col-6 col-lg-4 photos"><a class="portfolio-item" href="img/item-2.jpg" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="img/item-2.jpg">
                      <div class="item-content">
                        <h6 class="content-title">3D Bag Mockup</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>
                <div class="single-item col-6 col-lg-4 design"><a class="portfolio-item" href="img/item-3.jpg" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="img/item-3.jpg">
                      <div class="item-content">
                        <h6 class="content-title">Modern Bag Design</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>
                <div class="single-item col-6 col-lg-4 brand"><a class="portfolio-item" href="img/item-4.jpg" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="img/item-4.jpg">
                      <div class="item-content">
                        <h6 class="content-title">Coffee Cup Design</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>
                <div class="single-item col-6 col-lg-4 brand"><a class="portfolio-item" href="img/item-5.jpg" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="img/item-5.jpg">
                      <div class="item-content">
                        <h6 class="content-title">T-Shirt Design</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>
                <div class="single-item col-6 col-lg-4 photos"><a class="portfolio-item" href="img/item-6.jpg" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="img/item-6.jpg">
                      <div class="item-content">
                        <h6 class="content-title">Packaging Box Mockup</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!-- Blog lightbox-->
  <div class="lightbox-wrapper" id="blog" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Check out my latest Projects</p>
                  <h2 class="section-title">My Projects</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <div class="blog-section single-section">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="https://github.com/SahilPatil2002/PHP_CRUD"><img class="card-img-top" src="img/php.jpg" alt="Blog post"><span class="content-date">Mar, 2023</span></a>
                    <div class="card-body post-content"><a href="https://github.com/SahilPatil2002/PHP_CRUD">
                        <h5 class="card-title content-title">PHP Crud operation</h5>
                      </a>
                      <p class="card-text content-description">The To do list app by using PHP CRUD operation. task can be added, updated and deleted with the crud operation.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="https://github.com/SahilPatil2002/Movie_Website"><img class="card-img-top" src="img/movie.webp" alt="Blog post"><span class="content-date">Mar, 2023</span></a>
                    <div class="card-body post-content"><a href="https://github.com/SahilPatil2002/Movie_Website">
                        <h5 class="card-title content-title">Movie Info Website</h5>
                      </a>
                      <p class="card-text content-description">The Movie Information website that stores the all information of all movies released and with the help of API we can get the all or required information of any movie.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="https://github.com/SahilPatil2002/Architecture_Website"><img class="card-img-top" src="img/arch.webp" alt="Blog post"><span class="content-date">Feb, 2022</span></a>
                    <div class="card-body post-content"><a href="https://github.com/SahilPatil2002/Architecture_Website">
                        <h5 class="card-title content-title">Architecture Website</h5>
                      </a>
                      <p class="card-text content-description">The Architecture Website which is useful for any architecture designers personal portfolio. the website is clasic and beautiful as well.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="https://github.com/SahilPatil2002/Weather_App"><img class="card-img-top" src="img/weather.jpg" alt="Blog post"><span class="content-date">Dec, 2022</span></a>
                    <div class="card-body post-content"><a href="https://github.com/SahilPatil2002/Weather_App">
                        <h5 class="card-title content-title">Weather App</h5>
                      </a>
                      <p class="card-text content-description">The Weather app that shows the current weather information of any country and its done with the help of Weather API.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="https://github.com/SahilPatil2002/Calculator"><img class="card-img-top" src="img/calcy.webp" alt="Blog post"><span class="content-date">Feb, 2023</span></a>
                    <div class="card-body post-content"><a href="https://github.com/SahilPatil2002/Calculator">
                        <h5 class="card-title content-title">Calculator</h5>
                      </a>
                      <p class="card-text content-description">Simple JavaScript Calculator, user interface is simple and user friendly.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="https://github.com/SahilPatil2002/Books_Website"><img class="card-img-top" src="img/books.jpg" alt="Blog post"><span class="content-date">Jan, 2023</span></a>
                    <div class="card-body post-content"><a href="https://github.com/SahilPatil2002/Books_Website">
                        <h5 class="card-title content-title">Books Website</h5>
                      </a>
                      <p class="card-text content-description">The Books Website that stores the data of customer who wants to purchase any Book from Store.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lightbox-wrapper" id="contact" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Feel free to contact me anytime</p>
                  <h2 class="section-title">Get in Touch</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <div class="contact-section single-section">
              <div class="row">
                <div class="col-12 col-lg-7">


                <?php 
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                  include '_dbconnect.php';
                  $uname = $_POST['name'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $msg = $_POST['message'];

                  $sql = "INSERT INTO `portfolio` (`name`, `email`, `sub`, `description`, `dt`) VALUES ('$uname', '$email', '$subject', '$msg', current_timestamp())";
                  $result = mysqli_query($conn, $sql);
                }
                
                ?>

                  <form action="index.php" method="post">
                    <h4 class="content-title">Message Me</h4>

                    <div class="row">
                      <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-name" type="text" name="name" placeholder="Name" required=""></div>
                      <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-email" type="email" name="email" placeholder="Email" required=""></div>
                      <div class="col-12 form-group"><input class="form-control" id="contact-subject" type="text" name="subject" placeholder="Subject" required=""></div>
                      <div class="col-12 form-group form-message"><textarea class="form-control" id="contact-message" name="message" placeholder="Message" rows="5" required=""></textarea></div>
                      <div class="col-12"><button class="btn button-main button-scheme" type="submit">Send Message</button>
                        <!-- <p class="contact-feedback"></p> -->
                      </div>
                    </div>
                  </form>



                </div>
                <div class="col-12 col-lg-5">
                  <div class="contact-info">
                    <h4 class="content-title">Contact Info</h4>
                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                    <ul class="list-unstyled list-info">
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Name</h6><span class="info-value">Sahil Patil</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Location</h6><span class="info-value">Thane, Mumbai</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Call Me</h6><span class="info-value"><a href="tel:+441632967704">+9326595726</a></span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:sahilpatil1616@gmail.com">sahilpatil1616@gmail.com</a></span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="demo-tool">
    <div class="tool-wrapper">
      <span class="tool-toggler"><i class="icon ion-md-settings"></i></span>
      <div class="tool-box">
        <ul class="list-inline single-block color-switcher">
          <li class="list-inline-item" style="background-color: #2c31ff;" data-path="css/colors/main-blueviolet.css"></li>
          <li class="list-inline-item" style="background-color: #3460D1;" data-path="css/colors/main-nightskyblue.css"></li>
          <li class="list-inline-item" style="background-color: #EE3158;" data-path="css/colors/main-redpink.css"></li>
          <li class="list-inline-item" style="background-color: #007bff;" data-path="css/colors/main-blue.css"></li>
          <li class="list-inline-item" style="background-color: #17a2b8;" data-path="css/colors/main-cyan.css"></li>
          <li class="list-inline-item" style="background-color: #3365b0;" data-path="css/colors/main-darkblue.css"></li>
          <li class="list-inline-item" style="background-color: #a435b7;" data-path="css/colors/main-darkmagenta.css"></li>
          <li class="list-inline-item" style="background-color: #c93e70;" data-path="css/colors/main-darkpink.css"></li>
          <li class="list-inline-item" style="background-color: #bf2a3d;" data-path="css/colors/main-darkred.css"></li>
          <li class="list-inline-item" style="background-color: #28a745;" data-path="css/colors/main-green.css"></li>
          <li class="list-inline-item" style="background-color: #6610f2;" data-path="css/colors/main-indigo.css"></li>
          <li class="list-inline-item" style="background-color: #fd7e14;" data-path="css/colors/main-orange.css"></li>
          <li class="list-inline-item" style="background-color: #e83e8c;" data-path="css/colors/main-pink.css"></li>
          <li class="list-inline-item" style="background-color: #6f42c1;" data-path="css/colors/main-purple.css"></li>
          <li class="list-inline-item" style="background-color: #dc3545;" data-path="css/colors/main-red.css"></li>
          <li class="list-inline-item" style="background-color: #20c997;" data-path="css/colors/main-teal.css"></li>
          <li class="list-inline-item" style="background-color: #333;" data-path="css/colors/main-dark.css"></li>
          <li class="list-inline-item" style="background-color: #78b230;" data-path="css/colors/main-yellowgreen.css"></li>
          <li class="list-inline-item" style="background-color: #E16F7C;" data-path="css/colors/main-tangopink.css"></li>
          <li class="list-inline-item" style="background-color: #6F73D2;" data-path="css/colors/main-moodyblue.css"></li>
          <li class="list-inline-item" style="background-color: #664C43;" data-path="css/colors/main-brown.css"></li>
          <li class="list-inline-item" style="background-color: #4770D9;" data-path="css/colors/main-royalblue.css"></li>
          <li class="list-inline-item" style="background-color: #ffb100;" data-path="css/colors/main-darkyellow.css"></li>
        </ul>
        <div class="single-block buy-btn mb-0">
          <a class="btn btn-success btn-sm" target="_blank" href="https://themeforest.net/item/kitzu-personal-portfolio-template/26075107" role="button">Buy Kitzu</a>
        </div>
      </div>
    </div>
  </div>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/animatedModal.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/lity.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>
  <script src="../customizer/main.js"></script>
</body>


</html>