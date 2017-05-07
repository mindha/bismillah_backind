<!DOCTYPE html>
<html lang="en">
<?php $message=""?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backind Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= landing_url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= landing_url('vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= landing_url('css/agency.min.css');?>" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Logo</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome Backpacker!</div>
                <div class="intro-heading">Let's Explore Indonesia</div>              
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                     <a class="btn-xl" >Sign Up for Free</a>
                    </div>
                    <br>
                <p class="service-heading text-muted" style="color:white">Already Have Account? 
                 <div class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                <a href="#">Sign In</a></p>
                </div>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">What We Do?</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-credit-card fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Finance</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-automobile fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Transportation</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Homestay</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-faded" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Explore</h2>
                    <h3 class="section-subheading text-muted">Find your place to Backpack!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= landing_url('img/portfolio/01-thumbnail.jpg');?>" alt="">
                    </div>
                    
                    <div class="portfolio-caption">
                        <h4>Threads</h4>
                        <p class="text-muted">Illustration</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= landing_url('img/portfolio/02-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Explore</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= landing_url('img/portfolio/03-thumbnail.jpg');?>") alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Finish</h4>
                        <p class="text-muted">Identity</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= landing_url('img/portfolio/04-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Lines</h4>
                        <p class="text-muted">Branding</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= landing_url('img/portfolio/05-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Southwest</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= landing_url('img/portfolio/06-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Window</h4>
                        <p class="text-muted">Photography</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
                        <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/C8S639jeTEI"></iframe>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Team -->
    <section class="bg-faded" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Backind Team</h2>
                    <h3 class="section-subheading text-muted">We Go We Stay We Life.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= landing_url('img/team/1.jpg');?>" alt="">
                        <h4>Ari Apridana</h4>
                        <p class="text-muted">Co Founder</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= landing_url('img/team/2.jpg');?>" alt="">
                        <h4>Amrizal Nurrahman Syahid</h4>
                        <p class="text-muted">Co Founder</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= landing_url('img/team/3.jpg');?>" alt="">
                        <h4>Mindha Ningrum</h4>
                        <p class="text-muted">Co Founder</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="<?= landing_url('img/logos/envato.jpg');?>" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="<?= landing_url('img/logos/designmodo.jpg');?>" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="<?= landing_url('img/logos/themeforest.jpg');?>" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="<?= landing_url('img/logos/creative-market.jpg');?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-xl" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; BACKIND.COM</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
               
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Register</h2>
                                <form action="<?php echo site_url('register'); ?>" method="POST">
                                <div class="form-group">
                                    <input class="form-control" id="nama" name="nama" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="username" name="username" type="text" placeholder="Username *" required data-validation-required-message="Please enter Username.">
                                    <p class="help-block text-danger"></p>
                                </div>               
                                 <div class="form-group">
                                    <input class="form-control" id="email" name="email" type="text" placeholder="Email *" required data-validation-required-message="Please enter your Email Address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="no_hp" name="no_hp" type="text" placeholder="No handpone" required data-validation-required-message="Please enter your no handpone">
                                    <p class="help-block text-danger"></p>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password address.">
                                    <p class="help-block text-danger"></p>
                                </div>                                
                                <button class="btn btn-primary"  type="submit"></i> Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                               <h2>Login</h2>              
                                 <div class="form-group">
                                   <form action="<?php echo site_url('login/Login'); ?>" method='POST' name="login">
                                    <input class="form-control" id="username" name="username" type="text" placeholder="Username *" required data-validation-required-message="Please enter your username.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password address.">
                                    <p class="help-block text-danger"></p>
                                </div>                                
                                <button class="btn btn-primary" type="submit"></i>Login</button>
                            <a href=""><span style="color:#000000;" class="fontcontent"><?php echo $message; ?></span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?= landing_url('vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= landing_url('vendor/tether/tether.min.js');?>"></script>
    <script src="<?= landing_url('vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= landing_url('vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Contact form JavaScript -->
    <script src="<?= landing_url('js/jqBootstrapValidation.js');?>"></script>
    <script src="<?= landing_url('js/contact_me.js');?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= landing_url('js/agency.min.js');?>"></script>

</body>

</html>
