<?php 
   require_once('assets/config/mail.php');
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="keywords" content="ecom" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Naqsh |Stor</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://jthemes.net/favicon.ico" />

    <!-- Google Webfont -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900" rel="stylesheet"
        type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900" rel="stylesheet"
        type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="js/vendors/isotope/isotope.css" />
    <link rel="stylesheet" href="js/vendors/slick/slick.css" />
    <link rel="stylesheet" href="js/vendors/rs-plugin/css/settings.css" />
    <link rel="stylesheet" href="js/vendors/select/jquery.selectBoxIt.css" />
    <link rel="stylesheet" href="css/subscribe-better.css" />
    <link rel="stylesheet"
        href="../../../../../ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css" />
    <link rel="stylesheet" href="css/style.css" />


</head>

<body>
    <!-- PRELOADER -->
    <div id="loader"></div>

    <div class="body">
        <!-- TOPBAR -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tb_left pull-left">
                            <p>Welcome to our naqsh online store !</p>
                        </div>
                        <div class="tb_center pull-left">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i> Hotline:
                                    <a href="#">(+91)9477895396</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="#">online support@naqsh.in</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tb_right pull-right">
                            <ul>
                                <li>
                                    <div class="tbr-info">
                                        <span>Account <i class="fa fa-caret-down"></i></span>
                                        <div class="tbr-inner">
                                            <a href="index.php">My Account</a>

                                            <a href="login.php">Login</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tbr-info">
                                        <span><img src="images/basic/flag1.png" alt="" />&nbsp;English <i
                                                class="fa fa-caret-down"></i></span>
                                        <div class="tbr-inner">
                                            <a href="#"><img src="images/basic/flag1.png" alt="" />English</a>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tbr-info">
                                        <span>INR <i class="fa fa-caret-down"></i></span>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADER -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.php"><img src="images/basic/logo.png"
                                    class="img-responsive" alt="" /></a>
                        </div>
                        <!-- Cart & Search -->
                        <div class="header-xtra pull-right">
                            <div class="topcart">
                                <span><i class="fa fa-shopping-cart"></i></span>
                                <div class="cart-info">
                                    <small>You have <em class="highlight">3 item(s)</em> in your
                                        shopping bag</small>
                                    <div class="ci-item">
                                        <img src="images/products/fashion/8.jpg" width="80" alt="" />
                                        <div class="ci-item-info">
                                            <h5>

                                            </h5>
                                            <p>2 x 250.00</p>
                                            <div class="ci-edit">
                                                <a href="#" class="edit fa fa-edit"></a>
                                                <a href="#" class="edit fa fa-trash"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ci-item">
                                        <img src="images/products/fashion/15.jpg" width="80" alt="" />
                                        <div class="ci-item-info">
                                            <h5>
                                                <a href="index.php">Product fashion</a>
                                            </h5>
                                            <p>2 x 250.00</p>
                                            <div class="ci-edit">
                                                <a href="#" class="edit fa fa-edit"></a>
                                                <a href="#" class="edit fa fa-trash"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ci-total">Subtotal: $750.00</div>
                                    <div class="cart-btn">
                                        <a href="#">View Bag</a>
                                        <a href="#">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="topsearch">
                                <span>
                                    <i class="fa fa-search"></i>
                                </span>
                                <form class="searchtop">
                                    <input type="text" placeholder="Search entire store here." />
                                </form>
                            </div>
                        </div>
                        <!-- Navmenu -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="index.php">Home</a>
                                </li>

                                <li class="dropdown">
                                    <a href="index.php">Shop</a>
                                </li>


                                <li class="dropdown">
                                    <a href="contact.php">Contact us</a>


                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- BREADCRUMBS -->
        <div class="bcrumbs">
            <div class="container">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>

        <div class="space10"></div>

        <!-- BLOG CONTENT -->
        <div class="blog-content">
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <aside class="col-sm-4">
                        <div class="contact-info space50">
                            <h5 class="heading space40"><span>Contact Us</span></h5>
                            <div class="media-list">
                                <div class="media">
                                    <i class="pull-left fa fa-home"></i>
                                    <div class="media-body">
                                        <strong>Address:</strong><br />
                                        Kolkata
                                    </div>
                                </div>
                                <div class="media">
                                    <i class="pull-left fa fa-phone"></i>
                                    <div class="media-body">
                                        <strong>Telephone:</strong><br />
                                        (+91)9477895396
                                    </div>
                                </div>
                                <div class="media">
                                    <i class="pull-left fa fa-envelope-o"></i>
                                    <div class="media-body">
                                        <strong>Fax:</strong><br />
                                        9477895396
                                    </div>
                                </div>
                                <div class="contact-details">
                                    <p>
                                        Naqsh Your stor.
                                    </p>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <strong>Customer Service:</strong><br />
                                        <a href="mailto:hello@naqsh.in">hello@naqsh.in</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <strong>Returns and Refunds:</strong><br />
                                        <a href="mailto:hello@naqsh.in">hello@naqsh.in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="col-sm-8 space70">
                        <h5 class="heading space40"><span>Contact Form</span></h5>
                        <form method="post" action="assets/config/mail.php" id="form" role="form" class="form">
                            <div class="row">
                                <div class="col-md-6 space20">
                                    <input name="fullname" id="fullname" class="input-md form-control"
                                        placeholder="Name *" maxlength="100" required="" type="text" />
                                </div>
                                <div class="col-md-6 space20">
                                    <input name="email" id="email" class="input-md form-control" placeholder="Email *"
                                        maxlength="100" required="" type="email" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 space20">
                                    <input name="phone" id="phone" class="input-md form-control" placeholder="phone *"
                                        maxlength="100" required="" type="text" />
                                </div>
                                <div class="col-md-6 space20">
                                    <input name="website" id="website" class="input-md form-control"
                                        placeholder="website " maxlength="100" type="text" />
                                </div>
                            </div>
                            <div class="space20">
                                <input class="input-md form-control" placeholder="Subject" maxlength="100" required=""
                                    type="text" />
                            </div>
                            <div class="space20">
                                <textarea name="text" id="text" class="input-md form-control" rows="6"
                                    placeholder="Message" maxlength="400"></textarea>
                            </div>
                            <button id="submit" name="submit" type="submit" class="btn-black">Send a Message</button>
                        </form>
                    </aside>

                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="google-map">
                            <div id="map-canvas"></div>
                        </div>
                        <div class="space60"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix space20"></div>
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 widget-footer">
                        <h5>About Store</h5>
                        <img src="images/basic/logo-lite.png" class="img-responsive space10" alt="" />
                        <p>Naqsh</p>
                        <div class="clearfix"></div>
                        <ul class="f-social">
                            <li>
                                <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="https://feedburner.google.com/" class="fa fa-rss"></a>
                            </li>
                            <li>
                                <a href="mailto:email@website.com" class="fa fa-envelope"></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" class="fa fa-pinterest"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 widget-footer">
                        <h5>Latest Tweets</h5>
                        <div class="tweet-info">
                            <div id="twitterfeed"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 widget-footer">
                        <h5>Product tags</h5>
                        <ul class="widget-tags">
                            <li><a href="index.php">fashion</a></li>
                            <li><a href="index.php">sports</a></li>
                            <li><a href="index.php">business</a></li>
                            <li><a href="index.php">news</a></li>
                            <li><a href="index.php">night</a></li>
                            <li><a href="index.php">freedom</a></li>
                            <li><a href="index.php">design</a></li>
                            <li><a href="index.php">miracle</a></li>
                            <li><a href="index.php">gallery</a></li>
                            <li><a href="index.php">collection</a></li>
                            <li><a href="index.php">pen</a></li>
                            <li><a href="index.php">pants</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <ul class="flinks">
                            <li><a href="index.php">Site Map</a></li>
                            <li><a href="index.php">Search Terms</a></li>
                            <li><a href="index.php">Advanced Search</a></li>
                            <li><a href="index.php">Orders and Returns</a></li>
                            <li><a href="index.php">Customer Service</a></li>
                        </ul>
                        <br />
                        <p>
                            Copyright 2025 &middot; Designed & Developed by Subhranil
                            <a href="#">Subhranil</a> All rights reserved
                        </p>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <img src="images/basic/payment.png" class="pull-right img-responsive payment" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STYLE SWITCHER 
        ============================================= -->
    <div class="b-settings-panel">
        <div class="settings-section">
            <span>Boxed</span>
            <div class="b-switch">
                <div class="switch-handle"></div>
            </div>
            <span>Wide</span>
        </div>

        <hr class="dashed" style="margin: 15px 0px" />

        <h5>Main Background</h5>
        <div class="settings-section bg-list">
            <div class="bg-wood_pattern"></div>
            <div class="bg-shattered"></div>
            <div class="bg-vichy"></div>
            <div class="bg-random-grey-variations"></div>
            <div class="bg-irongrip"></div>
            <div class="bg-gplaypattern"></div>
            <div class="bg-diamond_upholstery"></div>
            <div class="bg-denim"></div>
            <div class="bg-crissXcross"></div>
            <div class="bg-climpek"></div>
        </div>

        <hr class="dashed" style="margin: 15px 0px" />

        <h5>Color Scheme</h5>
        <div class="settings-section color-list">
            <div data-src="css/color-scheme/grass-green.css" style="background: #64be33"></div>
            <div data-src="css/color-scheme/green.css" style="background: #2bba57"></div>
            <div data-src="css/color-scheme/turquoise.css" style="background: #2eafbb"></div>
            <div data-src="css/color-scheme/blue.css" style="background: #5489de"></div>
            <div data-src="css/color-scheme/klein-blue.css" style="background: #4874cd"></div>
            <div data-src="css/color-scheme/purple.css" style="background: #7e47da"></div>
            <div data-src="css/color-scheme/pink.css" style="background: #ea5192"></div>
            <div data-src="css/color-scheme/red.css" style="background: #e34735"></div>
            <div data-src="css/color-scheme/orange.css" style="background: #ff6029"></div>
        </div>

        <a href="#" data-src="css/style.css" class="reset"><span class="bg-wood_pattern">Reset</span></a>

        <div class="btn-settings"></div>
    </div>
    <!-- END STYLE SWITCHER 
        ============================================= -->

    <!-- Javascript -->
    <script src="js/jquery.js"></script>

    <!-- ADDTHIS -->
    <script type="text/javascript"
        src="../../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
    <script type="text/javascript">
    // Call this function once the rest of the document is loaded
    function loadAddThis() {
        addthis.init();
    }
    // Google map
    // ---------------------------------------------------------------------------------------

    jQuery(document).ready(function() {
        if (typeof google === "object" && typeof google.maps === "object") {
            if ($("#map-canvas").length) {
                var map;
                var marker;
                var image = "images/icon-google-map.png"; // marker icon
                google.maps.event.addDomListener(window, "load", function() {
                    var mapOptions = {
                        scrollwheel: false,
                        zoom: 12,
                        center: new google.maps.LatLng(40.9807648, 28.9866516), // map coordinates
                    };

                    map = new google.maps.Map(
                        document.getElementById("map-canvas"),
                        mapOptions
                    );
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(41.0096559,
                            28.9755535), // marker coordinates
                        map: map,
                        icon: image,
                        title: "Hello World!",
                    });
                });
            }
        }
    });
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bs-navbar.js"></script>
    <script src="js/vendors/isotope/isotope.pkgd.js"></script>
    <script src="js/vendors/slick/slick.min.js"></script>
    <script src="js/vendors/tweets/tweecool.min.js"></script>
    <script src="js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.subscribe-better.js"></script>
    <script src="../../../../../code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/vendors/select/jquery.selectBoxIt.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>


</html>