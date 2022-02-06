<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meal Main</title>

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
    <link href="css/welcomes.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">The FoodLog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#download">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Plan Meal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>

        <!-- ==== SECTION 1: LANDING PAGE ==== -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            
                            <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
                            <a href="index.html" class="btn btn-outline btn-xl page-scroll">View Meal Plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <img src="img/demo-screen-1.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==== SECTION 2: HOME PAGE ==== -->
    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="about-heading">Discover what all the buzz is about!</p>
                    <p class="home-subheading">Our app is available on any mobile device! Download now to get started!</p>
                    <div class="badges">
                        <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt="">.</a> <!-- added '.' inside the a -->
                        <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt="">.</a> <!-- added '.' inside the a -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== SECTION 3: PLAN MEAL PAGE ==== -->
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Container for headlines -->
                    <div class="headline-container">
                        <div class="section-6-text">
                            <!-- Headline -->
                            <p class="section-6-heading">What do you want to eat?</p>
                            
                            <!-- Subheading -->
                            <p class="section-6-subheading">Let us help you make your desired meal or snack!</p>
                        </div>
                    </div>
                    
                    <!-- Feature list container -->
                    <div class="contact-container-1">
                        <div class="contact-option">
                            <img src="images/choice.png" alt="Bag of fresh goods" class="feature-image">
                            <p class="contact-subheading">Choose a meal type! (breakfast? lunch? snack?)</p>
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

    <!-- ==== SECTION 4: ABOUT PAGE ==== -->
    <section class="cta" id = "about">
        <div class="cta-content">
            <div class="container">
                <p class="about-heading">About FoodLog</p>
                <p class="about-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat hendrerit congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus egestas purus quis eleifend aliquam. Proin sollicitudin urna erat, quis mattis tortor ultricies sed. Praesent non tristique ante. Ut at libero velit. Aenean egestas nisl tortor, non sagittis tortor ullamcorper ut. Phasellus aliquam enim a ante semper elementum. Mauris magna dolor, malesuada at viverra venenatis, tristique a felis. Nam turpis tortor, sagittis eget nunc a, pulvinar finibus ex. Vestibulum aliquam, ligula sit amet pellentesque congue, velit justo ultricies tellus, quis rutrum erat magna in libero. In sed risus pulvinar, laoreet ligula id, sodales lectus. Praesent ultricies pharetra dapibus. Duis semper sem id dolor sodales sodales. Aliquam accumsan vehicula augue, at elementum erat.</p>
                <!--<a href="#contact" class="btn btn-outline btn-xl page-scroll">Contact Us!</a>-->
            </div>
        </div>
    </section>

    <!-- ==== SECTION 5: CONTACT PAGE ==== -->
    <section class="contact bg-primary">
        <div class="container">
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter">.</i></a> <!-- added '.' inside the a -->
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook">.</i></a> <!-- added '.' inside the a -->
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus">.</i></a> <!-- added '.' inside the a -->
                </li>
            </ul>
        </div>
    </section>

    <!-- ==== SECTION 6: FOOTER ==== -->
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


<?php echo "<h4>Welcome " . $_SESSION['username'] . "</h4>"; ?>