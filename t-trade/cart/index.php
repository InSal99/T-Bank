<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>T-Bank</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================-->
      <link rel="icon" href="../../img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>T-Bank</title>

        <!-- Icon css link -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="../../vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="../../vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="../../vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="../../vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="../../vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="../../css/style.css" rel="stylesheet">
        <link href="../../css/responsive.css" rel="stylesheet">
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <!--================Header Menu Area =================-->
      <header class="main_menu_area">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <a class="navbar-brand" href="#"><img width="150" src="../../img/Main_Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="../about-us.html">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="../service.php">Services</a></li>
                  <!--<li class="nav-item dropdown submenu">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Blog
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                          <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                          <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                      </ul>
                  </li>-->
                  <li class="nav-item"><a class="nav-link" href="../contact.html">Contact</a></li>
                  <li class="nav-item"><a class="nav-link" href="../login/index.php">Login</a></li>
              </ul>
          </div>
        </nav>
    </header>
    <!--================End Header Menu Area =================-->
      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Cart</h1>
              </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-border checkout-table">
                  <tbody>
                    <tr>
                      <th class="hidden-xs">Item</th>
                      <th>Description</th>
                      <th class="hidden-xs">Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Remove</th>
                    </tr>
                    <?php
                      include 'koneksi.php';
                      $total = 0;
                      $autoincreament = 1;
                      foreach($cart as $key => $value){
                        // echo $key ." : ". $value['quantity'] . "<br>";
                        
                        $sql = "SELECT * FROM waste where WasteId = $key";
                        $result = mysqli_query($conn, $sql);
                        
                        $row = mysqli_fetch_assoc($result)
                    ?>
                
                      $autoincreament = 1;
                      $waste = mysqli_query($conn, "SELECT * FROM waste");
                      
                      while($content = mysqli_fetch_array($waste)) {
                    ?>
                    <tr>
                      <td class="hidden-xs"><a href="#"><img src="assets/images/shop/product-14.jpg" alt="Accessories Pack"/></a></td>
                      <td>
                        <h5 class="product-title font-alt"><?php echo $content['WasteDesc']; ?></h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt"><?php echo $content['WastePrice']; ?></h5>
                      </td>
                      <td>
                        <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                      </td>
                      <td>
                        </td>
                      <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <input class="form-control" type="text" id="" name="" placeholder="Coupon code"/>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <button class="btn btn-round btn-g" type="submit">Apply</button>
                </div>
              </div>
              <div class="col-sm-3 col-sm-offset-3">
                <div class="form-group">
                  <button class="btn btn-block btn-round btn-d pull-right" type="submit">Update Cart</button>
                </div>
              </div>
            </div>
            <hr class="divider-w">
            <div class="row mt-70">
              <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                  <h4 class="font-alt">Cart Totals</h4>
                  <table class="table table-striped table-border checkout-table">
                    <tbody>
                      <tr>
                        <th>Cart Subtotal :</th>
                        <td>£40.00</td>
                      </tr>
                      <tr>
                        <th>Shipping Total :</th>
                        <td>£2.00</td>
                      </tr>
                      <tr class="shop-Cart-totalprice">
                        <th>Total :</th>
                        <td>£42.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <button class="btn btn-lg btn-block btn-round btn-d" type="submit" name="placeorder"><a href="placeorder.php">Proceed to Checkout</a></button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Footer Area -->
        <footer class="footr_area">
          <div class="footer_widget_area">
              <div class="container">
                  <div class="row footer_widget_inner">
                      <div class="col-lg-4 col-sm-6">
                          <aside class="f_widget f_about_widget">
                              <img width="200" src="../../img/White_Logo.png" alt="">
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
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="../../js/jquery-3.2.1.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="../../js/popper.min.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
     <!-- Rev slider js -->
     <script src="../../vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
     <script src="../../vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
     <script src="../../vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
     <script src="../../vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
     <script src="../../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
     <script src="../../vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
     <script src="../../vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
     <script src="../../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
     <!-- Extra plugin css -->
     <script src="../../vendors/counterup/jquery.waypoints.min.js"></script>
     <script src="../../vendors/counterup/jquery.counterup.min.js"></script> 
     <script src="../../vendors/counterup/apear.js"></script>
     <script src="../../vendors/counterup/countto.js"></script>
     <script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
     <script src="../../vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
     <script src="../../js/smoothscroll.js"></script>
     <script src="../../vendors/circle-bar/circle-progress.min.js"></script>
     <script src="../../vendors/circle-bar/plugins.js"></script>
     
     <script src="../../js/circle-active.js"></script>
     <script src="../../js/theme.js"></script>
  </body>
</html>