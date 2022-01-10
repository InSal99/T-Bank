<?php
include "login/koneksi.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon-fix.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>T-Bank</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img height="35" src="img\Main_Logo.png" alt=""></a>
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
        
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','left','15','center']" 
                            data-hoffset="['0','80','80','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['400','400','400','250','180','180']" 
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Simpan sampah anda <br />dan mulai berkontribusi</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','left','15','center']" 
                                data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['575','575','575','400','320','300']"  
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">Mari pilah dan kumpulkan!
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['670','670','670','480','370','350']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="more_btn" href="#">Apa itu T-Bank?</a>
                            </div>
                            <div class="tp-caption tp-resizeme single_img" 
                            data-x="['right','right','right','right','right','right']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['180','180','180','180','0']" 
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['right','right','right','right','right','center']">
                                <img src="img\trash_bin.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','left','15','center']" 
                            data-hoffset="['0','80','80','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['400','400','400','250','180','180']" 
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Simpan sampah anda<br />dan mulai berkontribusi</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','left','15','center']" 
                                data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['575','575','575','400','320','300']"  
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">Mari pilah dan kumpulkan!
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['670','670','670','480','370','350']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="more_btn" href="#">Apa itu T-Bank?</a>
                            </div>
                            <div class="tp-caption tp-resizeme single_img" 
                            data-x="['right','right','right','right','right','right']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['180','180','180','180','0']" 
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['right','right','right','right','right','center']">
                                <img src="img\trash_bin.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','left','15','center']" 
                            data-hoffset="['0','80','80','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['400','400','400','250','180','180']" 
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Simpan sampah anda <br />dan mulai berkontribusi</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','left','15','center']" 
                                data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['575','575','575','400','320','300']"  
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">Mari pilah dan kumpulkan!
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['670','670','670','480','370','350']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="more_btn" href="#">Apa itu T-Bank?</a>
                            </div>
                            <div class="tp-caption tp-resizeme single_img" 
                            data-x="['right','right','right','right','right','right']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['180','180','180','180','0']" 
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['right','right','right','right','right','center']">
                                <img src="img\trash_bin.png" alt="">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area">
            <div class="container">
                <div class="c_title">
                    <img width = "75" src="img\Icon.png" alt="">
            
                    <h6>Apa itu T-Bank?</h6>
                    <h2>Isi dompet anda dengan mengumpulkan sampah </h2>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img width="110" src="img\T-Diary_Icon.png" alt="">
                            </div>
                            <h4>T-Diary</h4>
                            <p>Pilah tabungan sampah yang anda miliki dan catat perkembangannya. </p>
                            <a class="more_btn" href="comingsoon.html">Baca Lebih</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img\Find_Bank_Icon.png" alt="">
                            </div>
                            <h4>Find Bank</h4>
                            <p>Temukan bank sampah terdekat untuk mengolah sampah anda. </p>
                            <a class="more_btn" href="comingsoon.html">Baca Lebih</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img\T-Trade_Icon.png" alt="">
                            </div>
                            <h4>T-Trade</h4>
                            <p>Kirim Tabungan sampah yang telah dikumpulkan dan dapatkan e-cash! </p>
                            <a class="more_btn" href="comingsoon.html">Baca Lebih</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================The best slider Area =================-->
        <section class="best_3d_area">
            <div class="left_3d">
                <div class="shap_slider_inner owl-carousel">
                    <div class="item">
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_text">
                <div class="right_text_inner">
                    <div class="text_3d">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h6>Discover the features</h6>
                            <h2>We don’t hide, we stand tall in front of chalenge</h2>
                        </div>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
                    </div>
                    <div class="shap_mobile">
                        <img src="img/trash-bin2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--================End The best slider Area =================-->
        
        <!--================Team People Area =================-->
        <section class="team_people_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team_people_text">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Discover the features</h6>
                                <h2>We build a strong team of great people</h2>
                            </div>
                            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra.</p>
                            <ul>
                                <li><a href="#">Nunc nec maximus dui, </a></li>
                                <li><a href="#">Aenean pellentesque elit vitae</a></li>
                                <li><a href="#">Aenean pellentesque elit vitae</a></li>
                                <li><a href="#">Ex mauris, ornare eget pretium </a></li>
                                <li><a href="#">Cras ex mauris, ornare eget preti</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team_img_inner">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Team People Area =================-->
        
        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Punya Pertanyaan?</h6>
                                <h2>Hubungi Kami Melalui E-mail Atau Telepon</h2>
                            </div>
                            <p>Pertanyaan terkait operasional T-Bank maupun penjemputan sampah, silahkan menghubungi kami melalui e-mail dan telepon.</p>
                            <a href="#"><h5>Hubungi kami</h5></a>
                            <a href="#"><h4>+62123456789</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->
        
        <!--================Map Area =================-->
        <section class="contact_map_area">
            <div id="mapBox1" class="mapBox1 row m0" 
                data-lat="-7.9399095" 
                data-lon="112.6809031" 
                data-zoom="15" 
                data-marker="" 
                data-info=""
                data-mlat=""
                data-mlon="">
            </div>
            <div class="map_location_box">
                <div class="container">
                    <div class="map_1_box_inner">
                        <div class="bd-callout">
                            <h3>T-Bank Office</h3>
                            <p>Araya Mansion No. 8-22 <br /> Kab. Malang Jawa timur</p>
                            <h4><a href="#">+62823456789</a> <a href="#">TBank@info.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->

        <!--================Live Chat Area =================-->
        <script>
            window.ChatraSetup = {
                colors: {
                    buttonText: '#f0f0f0', /* chat button text color */
                    buttonBg: '#FFA8C6'    /* chat button background color */
                }
            };
            </script>
            
        
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
                                <img width="200" src="img/White_Logo.png" alt="">
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
                                    <h3>Dapatkan informasi terbaru mengenaiT-Bank</h3>
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
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>

        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>