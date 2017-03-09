<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Unisearchity</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/mypreset.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/other/bangalore-1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Unisearchity</span></h1>
            <p class="animated fadeInRightBig">Search - Compare - Find counselling</p>

            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#service-header">Take the first step</a>
          </div>

        </div>
        <!-- <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Unisearchity</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div> -->
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#service-header"><i class="fa fa-angle-down"></i></a>
    </div><!--/#home-slider-->

    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <div class="logo"><div class="helper"><img src="images/other/owl2.png" alt="logo"></div></div>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#service-header">Service</a></li> 
            <li class="scroll"><a href="#about-header">About Us</a></li>
            <li class="scroll"><a href="#portfolio-header">Portfolio</a></li>
            <li class="scroll"><a href="#team-header">Team</a></li>
            <li class="scroll"><a href="#contact-header">Contact</a></li>       
            <li class="scroll">
            <!-- <button data-toggle="modal" data-target="#login-modal" onclick="$('#signupbox').hide(); $('#forgotbox').hide(); $('#loginbox').show();">Login</button> -->
              <a class="show-login" href="#" data-toggle="modal" data-target="#login-modal" onclick="$('#signupbox').hide(); $('#forgotbox').hide(); $('#loginbox').show();">Log in</a>
            </li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <section id="service-header">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h1>Our Services</h1>
            
              <div style="display: inline-block;">
                Enter user email here to test sessions:
                <div style="background-color: #aaaaaa; border: 1px solid black; line-height: 2em; border-radius: 10px; width: 40em; display: inline-block;"> <?php echo $SOME_VARIABLE; ?> 
                </div>
              </div>
              <p> Link to pg to see if it works: <a href="testsession.php">testsession</a></p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">

      </div>
    </div>
  </section><!--/#services-head -->

<!-- New services section -->
  <section id="services" class="parallax">
  <div class="picture-overlay">
    <div class="container">
      <div class="service-listings">
        <div class="row">
          <div class="col-sm-4">
            <div class="service-listing wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="service-icon">
              <i class="fa fa-star fa-fw"></i>
              </div>
              <div class="service-info">
                <h3>RANK</h3>
                <p>Knowing where to go is an important decision. Compare rankings and ratings from various schools with a single click and find the places that best suit your needs here.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service-listing wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="service-icon">
                <i class="fa fa-search fa-fw"></i>
              </div>
              <div class="service-info">
                <h3>SEARCH</h3>
                <p>Whether you're a counsellor, hiring manager, or concerned parent, find all the information you need with our search tools. Let us help you find info on all the top schools before making a decision</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service-listing wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="service-icon">
                <i class="fa fa-handshake-o fa-fw"></i>
              </div>
              <div class="service-info">
                <h3>SEEK COUNSELLING</h3>
                <p>Our experienced counsellors are here to help you make a decision on where to look for the best schools. Talk to our counselors for career guidance and help choosing schools.</p>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>

  </div>
  </section>

<!-- TODO: Have an adding effect where it counts up to 3000 etc? -->
  <!-- <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">4000</h3>
          <p>Happy Clients</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer">200</h3>                    
          <p>Modern Websites</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">10</h3>                    
          <p>WINNING AWARDS</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>                 
      </div>
    </div>
  </section> -->
  <!--/#features-->


  <section id="about-header" class="heading">
   <div class="container">
      <div class="row">
        <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about-us" class="parallax">
  <div class="picture-overlay">
    <div class="container">
      <div class="row">
        <!-- <div class="col-sm-6"> -->
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            
            <p>Unisearchity.com is a one-stop solution for school searches based on courses and location for high-school and graduate students in India and abroad. It is an easily-navigable, user-friendly forum for valuable quests regarding programs offered by some of the best schools in India.  It was put in motion in 2012 and belongs to Valonia Consultancy LLP, who is the owner of esteemed firms likes Job99.com, Unify.org, and more. With this strong brand thoroughbred, Unisearchity.com offers an exclusive privilege of helping the students in decision making at a very crucial point in their lives coupled with individual counseling. </p>
          
            <p>Our website is a repository for real-time reliable information for over 100 institutions, 50 and over courses offered by the schools and is certified with database of  2 million students. We offer information for students interested in undergraduate and graduate programs in fields like engineering, law and business administration. </p>

            <p>Diligent education seekers get exemplified experience based on their existing skill-set, educational background and career interest. It is not just a forum for students but also caters to hiring managers of established brands who would want to hire creme of students graduating from top-notch colleges. We provide rankings, reviews and fees details of the schools for people to make a wise decision taking into account all the major desired criteria. We already have counseling as a major feature to enhance personalized experience for students and their families and in future we plan to incorporate a dialogue cafe open to students for discussion amongst themselves.</p>

            <p>Unisearchity.com is one of the leading gateways of India that amalgamates higher education concerned information with creativity and technology to offer students credible insights into their domain of interests.</p>

          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio-header" class="heading">
    <div class="container">
      <div class="row">
        <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Top Schools</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div> 
    </div>
  </section>

  <section id="portfolio">
    <div class="container-fluid">
      <div class="row" style="margin-bottom: 2em">
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iima.png" alt=""></div>
            </div>
            <!--<div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iimb.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iim-calcutta.png" alt=""></div>
            </div>
            <!-- <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iit-delhi.jpg" alt=""></div>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iit-guwahati.png" alt=""></div>
            </div>

          </div>
        </div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iit-kanpur.png" alt=""></div>
            </div>

          </div>
        </div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iit-roorkee.png" alt=""></div>
            </div>

          </div>
        </div>
        <div class="col-sm-2">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <div class="helper"><img src="images/university/iit-k.png" alt=""></div>
            </div>

          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="team-header" class="heading">
   <div class="container">
      <div class="row">
        <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Meet Our Team</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
  </section>

  <section id="team" class="parallax">
    <div class="picture-overlay">
    <div class="container">
      <div class="team-members">
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/noperson_f.png" alt="">
              </div>
              <div class="member-info">
                <h3>Lindsay Hefton</h3>
                <h4>CEO &amp; Founder</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/noperson_m.png" alt="">
              </div>
              <div class="member-info">
                <h3>Sahil Kakroo</h3>
                <h4>Personnel Manager</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/noperson_m.png" alt="">
              </div>
              <div class="member-info">
                <h3>Pratik Iyer</h3>
                <h4>Helpy Helperton</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:2em;">
          <div class="col-sm-4 col-sm-offset-2">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/noperson_f.png" alt="">
              </div>
              <div class="member-info">
                <h3>Palak Kalra</h3>
                <h4>Marketing and Communications</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/noperson_m.png" alt="">
              </div>
              <div class="member-info">
                <h3>Koundi N</h3>
                <h4>Developer</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
    </div>
  </section>

  <section id="contact-header" class="heading">
    <div class="container">
      <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h2>Contact Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    
    <div id="contact-us" class="parallax">
      <div class="picture-overlay">

      <div class="container">
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +928 336 2000  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> support@Unisearchity.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>        
  </section><!--/#contact-->

  <section class="white-space">
    <div></div>
  </section>

  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><div class="logo"><div class="helper"><img src="images/other/owl2.png" alt="logo"></div></div></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 Unisearchity.</p>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Login/register modal  -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="padding-container">

            <!-- Log in section -->
            <div class="mainbox " id="loginbox">
                <div class="panel panel-info">

                  <!-- heading -->
                  <div class="panel-heading">
                      <div class="panel-title">
                          Sign In
                      </div>
          
                  </div>

                  <!-- body -->
                  <div class="panel-body">
                      <div class="alert alert-danger col-sm-12" id="login-alert" style="display:none">
                      </div>

                      <form class="form-horizontal" id="loginform" name="loginform" role="form">
                          <label> Username or email </label>
                          <div class="input-group" >
                              <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span> <input class="form-control" id="login-username" name="username" type="text" value="">
                          </div>

                          <label> Password </label>
                          <div class="input-group" >
                              <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span> <input class="form-control" id="login-password" name="password" type="password">
                          </div>

                          <div class="input-group" style="margin-bottom: 0px;">
                              <div class="checkbox">
                                  <label><input id="login-remember" name="remember" type="checkbox" value="1"> Remember me</label>
                              </div>
                          </div>

                          <!-- buttons -->
                          <div class="form-group form-btn-group">
                              <div class="col-sm-12">
                                  <a class="btn btn-info" href="#" id="btn-login">Login</a> <a class="btn btn-primary" href="#" id="btn-signup" onclick="$('#loginbox').hide(); $('#forgotbox').hide(); $('#signupbox').show()">Sign up</a>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-12 modal-footer">
                                  <a href="#" id="btn-forgot" onclick="$('#signupbox').hide(); $('#loginbox').hide(); $('#forgotbox').show()">Forgot password?</a>
                              </div>
                          </div>
                      </form>
                  </div>
                </div>
            </div>

            <!-- Sign up section -->
            <div class="mainbox" id="signupbox" style="display:none;">
                <div class="panel panel-info">

                  <!-- heading -->
                  <div class="panel-heading">
                    <div class="panel-title">
                        Sign Up
                    </div>                
                  </div>

                  <!-- body -->
                  <div class="panel-body">
                      <form class="form-horizontal" id="signupform" name="signupform" role="form">
                          <div class="alert alert-danger" id="signupalert" style="display:none">
                              <p>Error:</p>
                              <span></span>
                          </div>

                              <label> Email </label>
                              <div class=" input-group">
                                  <span class="input-group-addon"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
                                  <input class="form-control" name="email" placeholder="Email Address" type="text">
                              </div>

                              <label> First name </label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
                                  <input class="form-control" name="firstname" placeholder="First Name" type="text">
                              </div>
                     
                              <label> Last name </label>
                              <div class=" input-group">
                                  <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
                                  <input class="form-control" name="lastname" placeholder="Last Name" type="text">
                              </div>
                   
                              <label> Password </label>
                              <div class=" input-group">
                                  <span class="input-group-addon"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>
                                  <input class="form-control" name="passwd" placeholder="Password" type="password">
                              </div>

                          <!-- buttons -->
                          <div class="form-group form-btn-group">
                              <div class="col-md-9" style="display: inline-block;">
                                  <button class="btn btn-info" id="btn-signup" type="button">Sign Up! </button> <a class="btn btn-primary" href="#" id="loginlink" onclick="$('#signupbox').hide(); $('#forgotbox').hide(); $('#loginbox').show()">Back to Log In</a>
                              </div>
                          </div>
                        </form>
                  </div>
                </div>
            </div>

            <!-- Forgot password section -->
            <div class="mainbox " id="forgotbox" style="display:none;">
              <div class="panel panel-info">

                <!-- heading -->
                <div class="panel-heading">
                    <div class="panel-title">
                        Password Reset
                    </div>
                </div>

                <!-- body -->
                <div class="panel-body">
                  <div class="alert alert-danger col-sm-12" id="forgot-alert" style="display:none">
                  </div>

                  <form class="form-horizontal" id="forgotform" name="forgotform" role="form">
                    <label> Last name </label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span> <input class="form-control" id="fp-name" name="fp-name" type="text">
                    </div>

                    <label> Email </label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span> <input class="form-control" id="fp-email" name="fp-email" type="text">
                    </div>
                    
                    <!-- buttons -->
                    <div class="form-group form-btn-group">
                      <div class="col-sm-12">
                          <a class="btn btn-danger" href="#" id="btn-sendemail">Send email</a> <a class="btn btn-primary" href="#" id="btn-forgot" onclick="$('#signupbox').hide(); $('#forgotbox').hide(); $('#loginbox').show()">Back to Log In</a>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div> <!-- padding-container -->
      </div> <!-- modal-dialog -->
  </div> <!-- modal fade -->

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>