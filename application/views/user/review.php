<html>
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
<section class="bg-faded" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Review</h2>
                    <h3 class="section-subheading text-muted">Find your place to Backpack!</h3>
                </div>
            </div>
            
            <div class="row">
            <?php 
               $no = 1;
                foreach($data as $u){ 
   			 ?>
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
                        <div style="height: 200px">
                        <h4><?php echo $u->judul_review ?></h4>
                         <p class="text-muted"><?php echo $u->isi_review?></p> </div>
                        <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                    </div>
                </div>
                <?php
             }
            ?>
            </div>
           

        </div>
    </section>
</body>
</html>