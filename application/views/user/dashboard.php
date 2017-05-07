<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backind Landing Page</title>
    <script src="<?= assets_url('tinymce/tinymce.min.js');?>"></script> 
    <script>
        tinymce.init({selector:'textarea'});
    </script>


    <!-- Bootstrap core CSS -->
    <link href="<?= user('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= user('vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= user('css/agency.min.css');?>" rel="stylesheet">
     <!-- Bootstrap Core CSS -->
   <!--  <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="<?= user('css/stylish-portfolio.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= user('font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


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

<body>
<!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Backpacker</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Category</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Town</a>
            </li>
           
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
            <li>
            <h1><font color="white">-----------</font></h1>
            </li>
            <li>
                <div class="portfolio-link" data-toggle="modal" href="#inputreview">
                <a href="#" onclick=$("#menu-close").click();>Input Review</a>
                </div>
            </li>
            <li>
                <a href="<?php echo base_url();?>" onclick=$("#menu-close").click();>Log Out</a>
                
            </li>
        </ul>
    </nav> 

    

    <!-- Header -->
    <header id="top" class="header masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome USER!</div>
                <div class="intro-heading">Let's Explore Indonesia</div>
                  <div class="col-lg-12 text-center">
               
                    <h2>Find Your Destination Trip!</h2>
                    <form action="<?php echo site_url('user/action/review'); ?>" id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="From" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Desination" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-xl" type="submit">Find</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <!-- Services -->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Bandung - Jakarta</h2>
                    <h3 class="section-subheading text-muted">Review Backpacker</h3>
                </div>
            </div>


    <!-- Page Content -->
    <?php 
               $no = 1;
                foreach($data as $u){ 
    ?>
    <div class="container">
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            
            <div class="col-md-5" data-toggle="modal" href="#portfolioModal2">

                <h3><?php echo $u->judul_review ?></h3>
                <p><?php echo $u->isi_review ?></p>
                <a class="btn btn-primary" href="#">View Project</a>
                <p></p>

                <a>Post by : <?php echo $u->username ?></a>
                <br>
                <a>Destination : <?php echo $u->destination ?></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <?php
        }
        ?>

        <!-- Project Two -->
        

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#">2</a></li>
            <li class="page-item">
                <a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.container -->
            
        </div>
    </section>

      <!-- Portfolio Grid -->
    <section class="bg-faded" >
        <div class="container">
          
                    <h2 class="section-heading">“Wherever you go becomes a part of you somehow.”</h2>
                    <h3 class="section-subheading text-muted">― Anita Desai</h3>
           
        </div>
    </section>

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Category</h2>
                    <h3 class="section-subheading text-muted">Choose your Category</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-credit-card fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Hiking</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-automobile fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Swimming</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Tubing</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Camping</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Beach</h4>
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
                    <h2 class="section-heading">Town</h2>
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
                        <img class="img-fluid" src="<?= user('img/portfolio/01-thumbnail.jpg');?>" alt="">
                    </div>
                    
                    <div class="portfolio-caption">
                        <h4>Bandung</h4>
                        <p class="text-muted">Jawa Barat</p>
                        <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= user('img/portfolio/02-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Yogyakarta</h4>
                        <p class="text-muted">Jawa Tengah</p>
                        <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= user('img/portfolio/03-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Malang</h4>
                        <p class="text-muted">Jawa Timur</p>
                        <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= user('img/portfolio/04-thumbnail.jpg');?>" alt="">

                    </div>
                    <div class="portfolio-caption">
                        <h4>Bali</h4>
                        <p class="text-muted">Pulau Bali</p>
                         <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= user('img/portfolio/05-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Banyuwangi</h4>
                        <p class="text-muted">Jawa Timur</p>
                        <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= user('img/portfolio/06-thumbnail.jpg');?>" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Semarang</h4>
                        <p class="text-muted">Jawa Tengah</p>
                        <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                    </div>
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
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>               
                                 <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Username *" required data-validation-required-message="Please enter your username.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password address.">
                                    <p class="help-block text-danger"></p>
                                </div>                                
                                <button class="btn btn-primary" data-dismiss="modal" type="button"></i> Register</button>
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
                                    <input class="form-control" id="name" type="text" placeholder="Username *" required data-validation-required-message="Please enter your username.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password address.">
                                    <p class="help-block text-danger"></p>
                                </div>                                
                                <button class="btn btn-primary" data-dismiss="modal" type="button"></i>Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="portfolio-modal modal fade" id="inputreview" tabindex="-1" role="dialog" aria-hidden="true">
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
                               <h2>Input Your Review</h2>              
                                 <div class="form-group">
                                   <form onsubmit="alert('Terimakasih,Review sudah tersimpan !')" action="<?php echo site_url('user/action/inputreview'); ?>" method='POST' name="login">
                                    <input class="form-control" id="judul" name="judul" type="text" placeholder="Judul" required data-validation-required-message="judul tidak boleh kosong">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                
                                    <textarea name="isireview">Isi review</textarea>
                                </div>   
                                <div class="form-group">
                                    <input class="form-control" id="destination" name="destination" type="text" placeholder="Tempat Destination" required data-validation-required-message="judul tidak boleh kosong">
                                    <p class="help-block text-danger"></p>
                                </div>                             
                                <button class="btn btn-primary" type="submit"></i>Input Review</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= user('vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= user('vendor/tether/tether.min.js');?>"></script>
    <script src="<?= user('vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= user('vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Contact form JavaScript -->
    <script src="<?= user('js/jqBootstrapValidation.js');?>"></script>
    <script src="<?= user('js/contact_me.js');?>"></script>

    <!-- jQuery -->
    <script src="<?= user('js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= user('js/bootstrap.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>
</body>

</html>
