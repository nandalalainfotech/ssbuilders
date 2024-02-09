<?php
ob_start();
?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$phone = htmlentities($_POST['phone']);
$message = htmlentities($_POST['message']);
$mail = new PHPMailer();
$mail->IsSMTP();  
$mail->SMTPDebug = 0;
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; 
$mail->Username = "noreply.nandalalainfotech@gmail.com";
$mail->Password = "yuntjikzkpxmhdoj"; 
$mail->AddAddress("ssbuilderstrichy01@gmail.com","SSBuilders");
$mail->AddCC("diva@nandalalainfotech.com", "SSBuilders");
$mail->SetFrom($email);
$name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
$services = isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
$subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
$address = isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
$website = isset($_POST['website']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['website']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";
$mail->Subject = 'Enquiry received from ssbuilders.com website';
$mail->Body .= 'Name: ' . $name . "\n";
$mail->Body .= 'Email: ' . $senderEmail . "\n";
$mail->Body .='Phone:' . $phone . "\n";
$mail->Body .= 'Message: ' . "\n" . $message;
$mail->WordWrap = 50;

if(!$mail->Send()) {
echo 'Message was not sent.';
} else {

echo "<script>
    alert('Thanks for contacting us. We will contact you ASAP!');
</script>";
}
 }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SS Builders Trichy | SS Construction Trichy | SS Civil Engineers Trichy | SS Interior Designers Trichy |
        Civil Contractors Trichy | Civil Works Trichy | Leading civil engineers Trichy |</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Const HTML5 Template For Construction Services" />

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/icomoon-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/vegas.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="whatsapp/whatsapp.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="pingback" href="xmlrpc.php" />

    <script type='text/javascript' src='assets/plugins/LayerSlider/static/js/greensock.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript'
        src='assets/plugins/LayerSlider/static/js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='assets/plugins/LayerSlider/static/js/layerslider.transitions.js'></script>
    <script type='text/javascript' src='assets/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript'
        src='assets/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easy-pie-chart.js'></script>
    <script type='text/javascript' src='assets/js/jquery.appear.js'></script>
    <script type='text/javascript' src='assets/js/modernizr.custom.66803.js'></script>
    <script type='text/javascript' src='assets/js/odometer.min.js'></script>
    <script type='text/javascript' src='assets/js/animations.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.1.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='assets/js/jquery.mobilemenu.js'></script>
    <script type='text/javascript' src='assets/js/isotope.js'></script>
    <script type='text/javascript' src='assets/js/layout-mode.js'></script>
    <script type='text/javascript' src='assets/js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.cycle.all.js'></script>
    <script type='text/javascript' src='assets/js/customSelect.jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='assets/fancybox/source/jquery.fancybox.js'></script>
    <script type='text/javascript' src='assets/fancybox/source/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='assets/js/jquery.carouFredSel-6.1.0-packed.js'></script>
    <script type='text/javascript' src='assets/js/tooltip.js'></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/scrollbar.css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11183963419">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-11183963419');
    </script>
    <script>
  gtag('config', 'AW-11183963419/1OsqCOOqmKQYEJv69tQp', {
    'phone_conversion_number': '99528 47709'
  });
</script>

</head>

<body>


    <!--Start Preloader-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--End Preloader-->

    <div class="page-wrapper">

        <!-- Start sidebar widget content -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">X</a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/resources/SS_logo_189x65 .jpg"
                                            alt="SS Builders Trichy" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <div class="inner-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old.
                                        </p>
                                    </div>
                                </div>

                                <div class="form-inner">
                                    <h4>Get a free quote</h4>
                                    <form action="index.html" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message..."></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button class="thm-btn" data-text="Submit Now +" type="submit"
                                                data-loading-text="Please wait...">Submit Now</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="sidebar-contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>
                                            <span class=" icon-maps-and-flags"></span> 11, Palakkarai main Road, Trichy
                                        </li>
                                        <li>
                                            <span class="icon-phone-call-1"></span>
                                            <a href="tel:123456789">+91 99528 47709</a>
                                        </li>
                                        <li>
                                            <span class="icon-email-1"></span>
                                            <a
                                                href="mailto:ssbuilderstrichy01@gmail.com">ssbuilderstrichy01@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="thm-social-link1">
                                    <ul class="social-box">
                                        <li class="facebook">
                                            <a href="#"><i class="icon-facebook-app-symbol" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="icon-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="gplus">
                                            <a href="#"><i class="icon-google-plus-logo" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sidebar widget content -->
        <section>
            <div id="whatsapp">
                <a href="https://wa.me/9952847709" target="_blank" id="toggle1" class="wtsapp">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </div>
        </section>

        <!--Start Main Header One-->
        <header class="main-header main-header-three  clearfix">
            <div class="main-header-three__wrapper">

                <div class="main-header-three__top clearfix">
                    <div class="container">
                        <div class="main-header-three__top-inner">
                            <div class="left">
                                <div class="title">
                                    <p>Welcome to SS Builders Trichy</p>
                                </div>
                            </div>

                            <div class="right">
                                <div class="title">
                                    <p>Get Social With Us!</p>
                                </div>

                                <ul class="social-links">
                                    <li><a target="_blank"
                                            href="https://www.facebook.com/ssbuilderstrichy.620001/?locale=hi_IN"><span
                                                class="icon-facebook-app-symbol"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-google-plus-logo"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-header-three__middle">
                    <div class="container">
                        <div class="main-header-three__middle-inner main-header-three__middle-inner-tab">
                            <div class="logo-box">
                                <a href="index.html"><img src="assets/images/resources/stricky-logo.png" alt="#"></a>
                            </div>

                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text-box">
                                            <h3>Our Location</h3>
                                            <p>11, Palakkarai main Road, Trichy</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text-box">
                                            <h3>Online Support</h3>
                                            <p class="email"><a
                                                    href="mailto:ssbuilderstrichy01@gmail.com">ssbuilderstrichy01@gmail.com</a>
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="text-box">
                                            <h3>Contact Us</h3>
                                            <p class="number"><a href="tel:123456789">+91 99528 47709</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-header-three__bottom">
                    <div class="container">
                        <div class="main-header-three__bottom-inner">

                            <div class="main-header-one__bottom-left">
                                <nav class="main-menu main-menu--1">
                                    <div class="main-menu__inner">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <div class="stricky-one-logo">
                                            <div class="logo">
                                                <a href="index.html"><img src="assets/images/resources/stricky-logo.png"
                                                        alt="SS Builders Trichy"></a>
                                            </div>
                                        </div>

                                        <ul class="main-menu__list">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="contact-us.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!--End Main Header One-->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/Banner-1920x770.jpg);">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-header__wrapper">
                            <div class="page-header__content">
                                <h2>Contact Us</h2>
                                <div class="page-header__menu">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Header-->


        <!--Start Contact Page Google Map-->
        <section class="contact-page-google-map">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.144376356042!2d78.69586048661576!3d10.80854750190061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf5048795b0a5%3A0x96c3334bbef2ff7!2sSS%20Builders%20%26%20Interior%20Designer!5e0!3m2!1sen!2sin!4v1680789315987!5m2!1sen!2sin"
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Page Google Map-->

        <!--Start Contact Page-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <!--Start Contact Page Content-->
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="contact-page__content">
                            <div class="title">
                                <h2>Get In Touch</h2>
                            </div>

                            <div class="contact-page__content-single">
                                <div class="contact-page__content-single-inner">
                                    <div class="icon-box">
                                        <span class="icon-pin"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2>Address</h2>
                                        <p>11, Palakkarai main Road,<br>(Ariyamangalam Zone Office Near),
                                            <br>Tiruchirappalli, <br>Tamil Nadu 620001.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-page__content-single">
                                <div class="contact-page__content-single-inner">
                                    <div class="icon-box">
                                        <span class="icon-phone-call-1"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2>Phone</h2>
                                        <p class="number1"><a href="tel:123456789">+91 99528 47709</a></p>
                                        <p class="number2"><a href="tel:123456789">+91 86108 49494</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-page__content-single">
                                <div class="contact-page__content-single-inner">
                                    <div class="icon-box">
                                        <span class="icon-email"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2>Email </h2>
                                        <p class="email2"><a
                                                href="mailto:ssbuilderstrichy01@gmail.com">ssbuilderstrichy01@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Content-->

                    <!--Start Contact Page Form-->
                    <div class="col-xl-8 col-lg-8 col-md-7">
                        <div class="contact-page__form">
                            <form class="standard-form row-fluid"
                                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"
                                autocomplete="off">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Name" name="name" id="name"
                                                    autocomplete="off" required />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="comment-form__input-box">
                                                <input name="email" placeholder="E-Mail"
                                                    pattern="[^@\s]+@[^@\s]+\.[^@\s]+" type="text" id="email"
                                                    autocomplete="off" required />                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <input name="phone" placeholder="Phone" type="text" id="phone"
                                                autocomplete="off" required pattern="[1-9]{1}[0-9]{9}"  /> 
                                                <br>
                                            <textarea class="comment-form__input-box" placeholder="Message"
                                                name="message" cols="40" rows="7" id="message" autocomplete="off"
                                                required></textarea>
                                            <button class="thm-btn comment-form__btn" data-text="Send Message +"
                                                type="submit" data-loading-text="Please wait...">Send Message +</button>
                                        </div>
                                    </div>

                        </div>
                    </div>
                    <!--End Contact Page Form-->

                </div>
            </div>
        </section>
        <!--End Contact Page-->


        <!--Start Brand One Sec-->
        <section class="brand-one-sec">
            <div class="brand-one__bg" style="background-image: url(assets/images/backgrounds/brand-v1-bg.png);"></div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                            "0": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 1
                                            },
                                            "375": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                            },
                                            "575": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                            },
                                            "767": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 3
                                            },
                                            "991": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 4
                                            },
                                            "1199": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 4
                                            }
                                        }}'>
                    <div class="swiper-wrapper">

                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/Vijaya Plywoods.bmp" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/cropped-rk-metal-trichy-logo-1.png" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/charcoal.jpg" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/mayas.png" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/Radu&Radu_logo.jpg" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/Vijaya Plywoods.bmp" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/cropped-rk-metal-trichy-logo-1.png" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/charcoal.jpg" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/mayas.png" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/Radu&Radu_logo.jpg" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/Vijaya Plywoods.bmp" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/charcoal.jpg" alt="SS Builders Trichy"></a>
                        </div>
                        <!--End Brand One Single-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand One Sec-->


        <!--Start Footer One Sec-->
        <footer class="footer-one-sec">
            <div class="footer-one__pattern"
                style="background-image: url(assets/images/pattern/footer-v1-pattern.png);"></div>
            <div class="footer-one__top">
                <div class="footer-one__top-img"
                    style="background-image:url(assets/images/resources/footer-v1-img3.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__top-inner">
                                <div class="row">

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <div class="footer-widget__column footer-widget__about">
                                            <div class="footer-widget__about-logo">
                                                <a href="index.html"><img
                                                        src="assets/images/resources/SS_logo_189x65 .jpg" alt="SS Builders Trichy"></a>
                                            </div>

                                            <p class="footer-widget__about-text">Er K Sivashanmugam, a highly motivated
                                                civil engineer, established SS Builders with a mission to deliver
                                                superior construction services. His passion for work quality and
                                                attention
                                                to detail are reflected in every project undertaken by the company.</p>

                                            <div class="footer-widget__about-social-link">
                                                <ul>
                                                    <li>
                                                        <a target="_blank"
                                                            href="https://www.facebook.com/ssbuilderstrichy.620001/?locale=hi_IN">
                                                            <span class="first icon-facebook-app-symbol"></span>
                                                            <span class="second icon-facebook-app-symbol"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <span class="first icon-twitter"></span>
                                                            <span class="second icon-twitter"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <span class="first icon-pinterest"></span>
                                                            <span class="second icon-pinterest"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <span class="first icon-linkedin"></span>
                                                            <span class="second icon-linkedin"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                        <div class="footer-widget__column footer-widget__services">
                                            <h2 class="footer-widget__title">Who we are
                                            </h2>
                                            <ul class="footer-widget__services-list">
                                                <li class="footer-widget__services-list-item"><a href="about.html">About
                                                        Us
                                                    </a></li>

                                                <li class="footer-widget__services-list-item"><a
                                                        href="portfolio.html">Portfolio
                                                    </a></li>

                                                <li class="footer-widget__services-list-item"><a
                                                        href="services.html">Our
                                                        Services
                                                    </a></li>

                                                <li class="footer-widget__services-list-item"><a
                                                        href="contact-us.php">Contact Us
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">

                                        <div class="footer-widget__column footer-widget__explore">
                                            <h2 class="footer-widget__title">Services</h2>
                                            <ul class="footer-widget__explore-list">

                                                <li class="footer-widget__explore-list-item"><a href="#">Interior
                                                        Designing
                                                    </a> </li>

                                                <li class="footer-widget__explore-list-item"><a href="#">Renovation
                                                    </a></li>

                                                <li class="footer-widget__explore-list-item"><a href="#">
                                                        Industrial</a></li>

                                                <li class="footer-widget__explore-list-item"><a href="#">
                                                        Garden Works</a></li>

                                                <li class="footer-widget__explore-list-item"><a href="#">
                                                        Swimming Pools</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                                        <div class="footer-widget__column footer-widget__posts">
                                            <h2 class="footer-widget__title">Contact Info</h2>

                                            <div class="footer-widget__posts-list">
                                                <!-- <div class="sidebar-contact-info"> -->
                                                <!-- <h4>Contact Info</h4> -->
                                                <ul>
                                                    <li>
                                                        <div class=" icon-maps-and-flags"
                                                            style="color: #ffffff; font-size: 16px; margin-left: -71px; font-weight: 500;">
                                                            Address:</div>
                                                        <div
                                                            style="margin-left: -45px; color: rgba(255, 255, 255, .7); font-weight: 500;">
                                                            11, Palakkarai main Road,
                                                            (Ariyamangalam Zone Office Near), Tiruchirappalli, Tamil
                                                            Nadu 620001</div>
                                                    </li>
                                                    <li>
                                                        <div class="icon-phone-call-1"
                                                            style="color: #ffffff; font-size: 16px; margin-left: -71px; font-weight: 500;">
                                                            Phone:</div>
                                                        <div
                                                            style="margin-left: -45px; color: rgba(255, 255, 255, .7); font-weight: 500;">
                                                            +91 99528 47709</div>
                                                    </li>
                                                    <li>
                                                        <div class="icon-email-1"
                                                            style="color: #ffffff; font-size: 16px; margin-left: -71px; font-weight: 500;">
                                                            Email:</div>
                                                        <div
                                                            style="margin-left: -45px; color: rgba(255, 255, 255, .7); font-weight: 500;">
                                                            ssbuilderstrichy01@gmail.com
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- </div> -->

                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Start Footer One Bottom-->
            <div class="footer-one__bottom clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-text">
                                    <p>Copyright &copy;2022. All rights reserved</p>
                                </div>

                                <div class="footer-one__bottom-list">
                                    Powered by <a href="https://nandalalainfotech.com/" target="_blank"><img
                                            src="assets/images/resources/nandalalainfotech.png" style="height:28px"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer One Bottom-->
        </footer>
        <!--End Footer One Sec-->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/SS_logo_189x65 .jpg"
                        width="155" alt="SS Builders Trichy" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:ssbuilderstrichy01@gmail.com">ssbuilderstrichy01@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="tel:99528 47709">+91 99528 47709</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a target="_blank" href="https://www.facebook.com/ssbuilderstrichy.620001/?locale=hi_IN"
                        class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.circle-progress.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/jquery-sidebar-content.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script type='text/javascript' src='assets/js/jquery.hoverex.js'></script>
    <script type='text/javascript' src='assets/js/imagesloaded.pkgd.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.parallax.js'></script>
    <script type='text/javascript' src='assets/js/jquery.cookie.js'></script>
    <script type='text/javascript' src='assets/js/main.js'></script>
    <script type='text/javascript' src='assets/includes/js/comment-reply.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.placeholder.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.livequery.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='assets/js/waypoints.min.js'></script>
    <script type='text/javascript' src='assets/js/background-check.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.infinitescroll.js'></script>
    <script type='text/javascript' src='assets/plugins/js_composer/assets/js/js_composer_front.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/ui/widget.min.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/ui/accordion.min.js'></script>
    <script type='text/javascript' src="contact.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("9JfDxk7Rw4WLI8EcW");
        })();
    </script>
    <!-- template js -->
    <script src="assets/js/script.js"></script>



</body>

</html>