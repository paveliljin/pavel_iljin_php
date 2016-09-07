<?php
session_start();
if (!$_SESSION['pc_page']){
    exit ();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="lt" xml:lang="lt">
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="destripion" content="Pavel Iljin">
    <meta name="author" content="Pavel" >
    <title>Pavel Iljin</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Meta Data -->
    <!-- Stlylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <!-- Skin Color -->
    <link rel="stylesheet" href="css/colors/red.css" id="color-skins"/>
    <!-- Stlylesheet -->
</head>
<body>
<?php
include_once("analyticstracking.php");
?>
<!--Baners-->

<div id="preloader">
    <div class="loader">
        <img src="img/assets/preloader-logo.png" alt="Pavel Iljin">
    </div>
</div>
<section id="home-revolution-slider">
    <div class="hero">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg-home-fullscreen.jpg" data-delay="10000"  data-saveperformance="on" data-title="Pavel Iljin">
                        <img src="img/backgrounds/bg-home-fullscreen.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption sft"
                             data-x="center"
                             data-y="260"
                             data-speed="1200"
                             data-start="1100"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300">
                            <div class="h"><p "id="b3radius"><b>Sveiki atvyk&#281; &#303; mano tinklalap&#303;!</b></p></div>
                        </div>
                        <div class="tp-caption home-button sft fadeout"
                             data-x="center"
                             data-y="400"
                             data-speed="1200"
                             data-start="1550"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;>
						<div class="op-1"><a href="main.php" class="btn btn-primary btn-scroll", id="b3radius">Apie mane</a></div>
        </div>

        </li>
</section>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/plugins/jquery.min.js"></script>
<script src="js/plugins/moderniz.min.js"></script>
<script src="js/plugins/revslider.min.js"></script>
<script src="js/plugins/waypoints.min.js"></script>
<script src="js/plugins/parallax.min.js">
</script><script src="js/plugins/easign1.3.min.js"></script>
<script src="js/plugins/cubeportfolio.min.js"></script>
<script src="js/plugins/owlcarousel.min.js"></script>
<script src="js/plugins/tweetie.min.js"></script>
<script src="js/plugins/gmap3.min.js"></script>
<script src="js/plugins/wow.min.js"></script>
<script src="js/plugins/counterup.min.js"></script>
<script src="js/scripts.js"></script>
<!---->
</body>
</html>