<?php

include 'config.php';

session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The FoodLog</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">
    <link href='https://css.gg/abstract.css' rel='stylesheet'>

    <!-- Theme CSS -->
    <link href="css/landstyle.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">

        <!-- Container for navigation elements -->
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <!-- ***Button for Menu -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <!-- Content inside cascading menu button -->
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>

                </button>

                <!-- "The FoodLog" in upper left -->
                <a class="navbar-brand page-scroll" href="#page-top">The FoodLog</a>
            </div>

            <!-- Content under dropdown "Menu" button -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Section 1: Landing Page -->
    <header>

        <!-- Outer container of overall landing page -->
        <div class="container">

            <!-- Inner container of overalllanding page -->
            <div class="row">

                <!-- Outer container of landing page content -->
                <div class="col-sm-7">

                    <!-- Middle container of landing page content -->
                    <div class="header-content">

                        <!-- Inner container of landing page content -->
                        <div class="header-content-inner">

                            <!-- Headline -->
                            <h1>FoodLog is a meal app that will help you plan your meals, snacks, and more!</h1>

                            <!-- "Register now for free!" button -->
                            <a href="login.php" class="btn btn-outline btn-xl page-scroll">Register Now for Free!</a>
                        </div>
                    </div>
                </div>

                <!-- Image of landing page -->
                <div class="col-sm-5">

                    <!-- Container for image -->
                    <div class="device-container">
                        <img src="images/demo-screen-1.png" class="img-responsive" alt="">
                    </div> 
                </div>
            </div>
        </div>
    </header>

    <!-- Section 2: Features Page -->
    <section id="features" class="download bg-primary text-center">

        <!-- Container of overall features page -->
        <div class="container">

            <!-- Outer container of features page content -->
            <div class="row">
                
                <!-- Inner container of features page content -->
                <div class="col-md-8 col-md-offset-2">

                    <div class="headline-container">
                        <div class="section-6-text">
                            <!-- Headline -->
                            <p class="section-6-heading">Check out the good stuff!</p>
                            
                            <!-- Subheading -->
                            <p class="section-6-subheading">Our app offers carefully crafted features that will help you organize healthy, customized meals.</p>
                        </div>
                    </div>

                    <!-- Feature list container -->
                    <div class="contact-container-1">
                        <div class="contact-option">
                            <img src="images/choice.png" alt="Bag of fresh goods" class="feature-image">
                            <p class="contact-subheading">Choose a meal type! (breakfast? snack?)</p>
                        </div>
                        <div class="contact-option">
                            <img src="images/foods.png" alt="Bag of fresh goods" class="feature-image">
                            <p class="contact-subheading">Choose a meal from the presented selections</p>
                        </div>
                        <div class="contact-option">
                            <img src="images/groceries.png" alt="Bag of fresh goods" class="feature-image">
                            <p class="contact-subheading">Get the meal's recipe and nutritional facts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Section 3: Download Page ======-->
    <section id="download" class="download bg-primary text-center">

        <!-- Container of overall download page -->
        <div class="container">

            <!-- Outer container of downloading page content -->
            <div class="row">
                
                <!-- Inner container of downloading page content -->
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-6-text">
                        </div>
                        <!-- Headline -->
                        <p class="section-6-heading">Discover the buzz!</p>
                        
                        <!-- Subheading -->
                        <p class="section-6-subheading">Our app is available on any mobile device! Download now to get started!</p>
                        
                        <!-- Container for hyperlink buttons -->
                        <div class="badges">
                            <a class="badge-link" href="#">.<img src="images/google-play-badge.svg" alt=""></a>
                            <a class="badge-link" href="#">.<img src="images/app-store-badge.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Contact Page -->
    <section id="contact" class="download bg-primary text-center">

        <!-- Container of overall contact page -->
        <div class="container">

            <!-- Outer container of contact page content -->
            <div class="row">
                
                <!-- Inner container of contact page content -->
                <div class="col-md-8 col-md-offset-2">

                    <div class="sixth-section-flex" id="contactUs">
                        <div class="section-6-text">
                            <p class="section-6-heading">Contact Us</p>
                            <p class="section-6-subheading">Have any questions? We'd love to hear from you.</p>
                        </div>
                        <div class="contact-container-1">
                            <div class="contact-option">
                                <p class="contact-heading">Help & Support</p>
                                <p class="contact-subheading">Our support team is alert and ready to give you answers fast.</p>
                                <button class="contact-button">Visit Supp. Page</button>
                            </div>
                            <div class="contact-option">
                                <p class="contact-heading">Press</p>
                                <p class="contact-subheading">Are you interested in our latest news or working on a Road Runner story and need to get in touch?</p>
                                <button class="contact-button">Visit Press Page</button>
                            </div>
                            <div class="contact-option">
                                <p class="contact-heading">Sales</p>
                                <p class="contact-subheading">Get in touch with our sales team to see how we can work together.</p>
                                <button class="contact-button">Contact Sales</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2022 The MealGroup. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>
</html>
