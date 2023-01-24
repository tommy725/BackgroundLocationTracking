<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="TravelTimeVR">
        <meta name="author" content="Lance">

        <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/favicon.ico');?>">

        <title>TravelTimeVR</title>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('assets/frontend/css/bootstrap.min.css');?>" rel="stylesheet">

        <!-- Owl Carousel CSS -->
        <link href="<?php echo base_url('assets/frontend/css/owl.carousel.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/frontend/css/owl.theme.default.min.css');?>" rel="stylesheet">

        <!-- Icon CSS -->
        <link href="<?php echo base_url('assets/frontend/css/font-awesome.min.css');?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/frontend/css/style.css');?>" rel="stylesheet">

        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body data-spy="scroll" data-target="#navbar-menu">

        <!-- Navbar -->
        <div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
            <div class="container">

                <!-- Navbar-header -->
                <div class="navbar-header">

                    <!-- Responsive menu button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="index.html">
                        TravelTime<span class="text-custom">VR</span>
                        <img src="./assets/images/logo.jpg?>" style="display: inline-block;">
                    </a>

                </div>
                <!-- end navbar-header -->

                <!-- menu -->
                <div class="navbar-collapse collapse" id="navbar-menu">

                    <!-- Navbar right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li>
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li>
                            <a href="#howtouse" class="nav-link">How to use</a>
                        </li>
                        <li>
                            <a href="#clients" class="nav-link">Contact us</a>
                        </li>
                    </ul>

                </div>
                <!--/Menu -->
            </div>
            <!-- end container -->
        </div>
        <!-- End navbar-custom -->



        <!-- HOME -->
        <section class="home bg-img-1" id="home">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="home-fullscreen">
                            <div class="full-screen">
                                <div class="home-wrapper home-wrapper-alt">
                                    <h2 class="font-light text-white">TravelTimeVR = Android, iOS, HTC VIVE, Oculus Rift, Gear VR</h2>
                                    <h4 class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </h4>

                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <a href="#" target="_blank" class="app_store" style="text-align: right;">
                                                <img src="<?php echo base_url('assets/frontend/images/appstore.png');?>" alt="img" class="mobile_store">
                                            </a>
                                        </div>
                                        <div class="col-sm-4" style="text-align: left;">
                                            <a  href="#" target="_blank" class="google_store">
                                                <img src="<?php echo base_url('assets/frontend/images/googleplay.png');?>" alt="img" class="mobile_store">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->


        <!-- Features -->
        <section class="section" id="features">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title">TraveltimeVR is very good</h3>
                        <p class="text-muted sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br/> incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="fa fa-diamond"></i>
                            <h4>Responsive System</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="fa fa-bicycle"></i>
                            <h4>Good contents</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="fa fa-signal"></i>
                            <h4>Beautiful Design</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        </div>
                    </div>

                </div> <!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end Features -->



        <!-- Features Alt -->
        <section class="section p-t-0">
            <div class="container">

                <div class="row">
                    <div class="col-sm-5">
                        <div class="feat-description m-t-20">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br/> incididunt ut labore et dolore magna aliqua.</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                        </div>
                    </div>

                    <div class="col-sm-6 col-sm-offset-1">
                        <img src="<?php echo base_url('assets/frontend/images/mobile.jpg');?>" alt="img" class="img-responsive m-t-20">
                    </div>

                </div><!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end features alt -->


        <!-- Features Alt -->
        <section class="section">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo base_url('assets/frontend/images/gearvr.jpg');?>" alt="img" class="img-responsive">
                    </div>

                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="feat-description">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                        </div>
                    </div>

                </div><!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end features alt -->


        <!-- Features Alt -->
        <section class="section">
            <div class="container">

                <div class="row">
                    <div class="col-sm-5">
                        <div class="feat-description">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                        </div>
                    </div>

                    <div class="col-sm-6 col-sm-offset-1">
                        <img src="<?php echo base_url('assets/frontend/images/oculus_htc.jpg');?>" alt="img" class="img-responsive">
                    </div>

                </div><!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end features alt -->


        <!-- Testimonials section -->
        <section class="section bg-img-2">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="owl-carousel text-center">
                            <div class="item">
                                <div class="testimonial-box">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                                    <img src="<?php echo base_url('assets/frontend/images/user.jpg');?>" class="testi-user img-circle" alt="testimonials-user">
                                    <p>- TravelTimeVR User</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-box">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                                    <img src="<?php echo base_url('assets/frontend/images/user2.jpg');?>" class="testi-user img-circle" alt="testimonials-user">
                                    <p>- TravelTimeVR User</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-box">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                                    <img src="<?php echo base_url('assets/frontend/images/user3.jpg');?>" class="testi-user img-circle" alt="testimonials-user">
                                    <p>- TravelTimeVR User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Testimonials section -->


        <!-- PRICING -->
        <section class="section" id="howtouse">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title">How to use</h3>
                        <p class="text-muted sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row"  style="text-align: center;">

                            <iframe width="750" height="450" src="https://www.youtube.com/embed/0VwQj3tVbsA" frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div><!-- end col -->
                </div>
                 <!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- End Pricing -->


        <!-- Clients -->
        <section class="section p-t-0" id="clients">
            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-12">
                        <ul class="list-inline client-list">
                            <li><a href="" title="Microsoft"><img src="<?php echo base_url('assets/frontend/images/clients/microsoft.png');?>" alt="clients"></a></li>
                            <li><a href="" title="Google"><img src="<?php echo base_url('assets/frontend/images/clients/google.png');?>" alt="clients"></a></li>
                            <li><a href="" title="Instagram"><img src="<?php echo base_url('assets/frontend/images/clients/instagram.png');?>" alt="clients"></a></li>
                            <li><a href="" title="Converse"><img src="<?php echo base_url('assets/frontend/images/clients/converse.png');?>" alt="clients"></a></li>
                        </ul>
                    </div> <!-- end Col -->

                </div><!-- end row -->
            </div>
        </section>
        <!--End  Clients -->


        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <a class="navbar-brand logo" href="index.html">
                            TravelTime<span class="text-custom">VR</span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-lg-offset-3 col-md-7">
                        <ul class="nav navbar-nav" style="color: white;">
                            <span class="glyphicon fa fa-phone"></span>
                            Call us on +1 7024 066101
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- End Footer -->
        

        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-angle-up"></i> </a>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('assets/frontend/js/jquery-2.1.4.min.js');?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/bootstrap.min.js');?>"></script>

        <!-- Jquery easing -->                                                      
        <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery.easing.1.3.min.js');?>"></script>

        <!-- Owl Carousel -->                                                      
        <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/owl.carousel.min.js');?>"></script>

        <!--sticky header-->
        <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery.sticky.js');?>"></script>

        <!--common script for all pages-->
        <script src="<?php echo base_url('assets/frontend/js/jquery.app.js');?>"></script>

        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay: true,
                autoplayTimeout: 4000,
                responsive:{
                    0:{
                        items:1
                    }
                }
            })
        </script>

    </body>
</html>