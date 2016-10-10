<?php
session_start();
include_once 'php/Constants.php';
if ((empty($_SESSION['token'])) || ($_SESSION['token'] == "")) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo WEB_NAME; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel='stylesheet' href='css/google.css'>
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/gallery.css">
        <link rel="stylesheet" href="css/lightgallery.css">

        <script src="js/jquery.js"></script>
    </head>
    <body>
    <!-- preloader -->
    <div class="preloader">
        <div class="sk-spinner sk-spinner-rotating-plane"></div>
    </div>
    <!-- end preloader -->
    <!-- menu -->
    <nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <p class="navbar-brand">Club motociclista</p>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right text-uppercase">
                    <li><a href="privacy.php">Aviso de privacidad</a></li>
                    <li><a href="tos.php">Términos & condiciones</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.6s">
                    <h2>Mi cuenta</h2>
                    <div class="demo-gallery">
                        <ul id="lightgallery" class="list-unstyled row">
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="images/motorcycle-1163779_1920.jpg 375, images/motorcycle-1163779_1920.jpg 480, images/motorcycle-1163779_1920.jpg 800" data-src="images/motorcycle-1163779_1920.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                <a href="">
                                    <img class="img-responsive" src="images/motorcycle-1163779_1920.jpg">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800" data-src="img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                <a href="">
                                    <img class="img-responsive" src="images/smartphone-655342_1920.png">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/13-375.jpg 375, img/13-480.jpg 480, img/13.jpg 800" data-src="img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                <a href="">
                                    <img class="img-responsive" src="images/software-img.png">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/4-375.jpg 375, img/4-480.jpg 480, img/4.jpg 800" data-src="img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                <a href="">
                                    <img class="img-responsive" src="img/thumb-4.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <?php echo COPYRIGHT . " | " . WEB_NAME; ?>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/tools.js"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script src="js/lg-fullscreen.js"></script>
    <script src="js/lg-thumbnail.js"></script>
    <script src="js/lg-video.js"></script>
    <script src="js/lg-autoplay.js"></script>
    <script src="js/lg-zoom.js"></script>
    <script src="js/lg-hash.js"></script>
    <script src="js/lg-pager.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    </body>
    </html>
    <?php
} else {
    header("Location: events.php");
}
?>