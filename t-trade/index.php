<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="../img/fav-icon-fix.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>T-Bank</title>

        <!-- Icon css link -->
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="../vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="../vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="../vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="../vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="../vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                <a class="navbar-brand" href="#"><img height="35" src="../img/Main_Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <?php if(isset($_SESSION['auth_cust'])) : ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link"><?= $_SESSION['auth_cust']['cek_name'];?></li>
                                <li class="nav-item"><a class="nav-link" href="LogOut.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php else : ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login\index.php">Login</a></li>
                    </ul>
                </div>
                <?php endif ; ?>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
        
        <!--================End Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>T-Trade</h2>
                    <p>Pilih kategori sampah anda</p>
                </div>
            </div>
        </section>
        <section class="service_feature">
            <div class="container">
                <div class="row feature_inner">
                <?php
                    include 'koneksi.php';
                    $autoincreament = 1;
                    $waste = mysqli_query($conn, "SELECT * FROM wastetype");

                    while($content = mysqli_fetch_array($waste)) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img width="120" src="../img/image-soon.png" alt="">
                            </div>
                            <h4><?php echo $content['WasteTypeName']; ?></h4>
                            <p><?php echo $content['WasteTypeDesc']; ?> </p>
                            <a class="more_btn" href="product.php">Pilih Sampah</a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Live Chat Area =================-->
        <script>
            (function(d, w, c) {
                w.ChatraID = 'PKTeeCjXLic8WE8N4';
                var s = d.createElement('script');
                w[c] = w[c] || function() {
                    (w[c].q = w[c].q || []).push(arguments);
                };
                s.async = true;
                s.src = 'https://call.chatra.io/chatra.js';
                if (d.head) d.head.appendChild(s);
            })(document, window, 'Chatra');
        </script>
        <!--================End Live Chat Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img width="200" src="../img/White_Logo.png" alt="">
                                <p>Tukar sampah anda dan dapatkan uang!</p>
                            </aside>
                        </div>
                        <!--<div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_insta_widget">
                                <div class="f_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-7.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-8.jpg" alt=""></a></li>
                                </ul>
                            </aside>
                        </div>-->
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Subscribe to newsletter</h3>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </h5>
                    </div>
                    <div class="float-sm-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>-->
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="../vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="../vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="../vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="../vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="../vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="../vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="../vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="../vendors/counterup/apear.js"></script>
        <script src="../vendors/counterup/countto.js"></script>
        <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="../js/smoothscroll.js"></script>
        <script src="../vendors/circle-bar/circle-progress.min.js"></script>
        <script src="../vendors/circle-bar/plugins.js"></script>
        
        <script src="../js/circle-active.js"></script>
        <script src="../js/theme.js"></script>
    </body>
</html>