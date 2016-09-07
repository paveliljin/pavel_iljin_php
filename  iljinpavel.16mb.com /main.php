<?php
session_start();
if (!$_SESSION['pc_page']){
    exit ();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pavel Iljin</title>
    <meta name="description" content="Pavel Iljin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="css/normalize.min.css">
    <!-- Main Styles -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/main_style.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

    <!--<script type="text/javascript">
        Cufon.replace('h2',{ textShadow: '1px 1px #000'});
        Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
        Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
    </script>-->
</head>
<!--Menu-->
<body>
<?php
include_once("analyticstracking.php");
?>
<header class="site-header" id="top">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="logo-wrapper">
                        <a class="navbar-brand" href="index.php">
                            <em>Pavel</em> Iljin
                            <span class="logo-s"></span>
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <span class="nav-s"></span>
                        <li class="active"><a href="#mane">Apie mane</a></li>
                        <li><a class='inline' href="#inline_content">PeŽiūrėti mano cv</a></li>
                        <li><a href="#mano">Mano darbai</a></li>
                        <li><a href="#Kontaktai">Kontaktai</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="mane">
    </div>
</header>
<div id="mane2">
</div>
<!--Menu end-->
<!--Apie mane-->
<div class="top-section" id="b3radius">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-holder" >
                    <img id="b3radius" src="images/f4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <br /> <br /> <br />
                <h4>Apie mane</h4><br>
                <h5>Vardas ir pavardė – Pavel Iljin</h5><br>
                <h5>Gimimo data – 1989-05-23</h5><br>
                <h5>Miestas – Vilnius</h5><br>
                <h5>Telefonas +370 679 29 909</h5><br>
                <h5>El. paštas pavel.iljinas@gmail.com</h5>
                <div class="apie">
                    <p>   Studijuoju programavimą ir internetines technologijas. Turiu pakankamai darbo kompiuteriu įgūdžių, aktyviai domiuosi visomis kompiuterinėmis naujovėmis. <br><br>
                        Programuoju su HTML5, CSS3, JS, PHP, C++, SQL.
                        <br />Kuriu tinklalapius su ,,Joomla", ,,Wordpress" , ,,Opencart".
                      <!--  <br />Dirbu su ,,Microsoft Office", ,,Photoshop“, ,,Sony Vegas“, ,,Movie Maker“, ,,Adobe Premiere Pro“, ,,Audacity“ programomis.
                        <br />Moku naudotis ,,Windows“, ,,Linux“, ,,Mac OS X“ operacinėmis sistemomis. --><br><br>
                        Teigiamos savybės: komunikabilumas, lankstumas, draugiškumas, atkaklumas, entuziastingumas, kruopštumas. Žalingų įpročių neturiu, visuomet atsakingai atlieku savo pareigas.<br><br></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Apie end-->
<!--Img-->
<div id="products">
    <div class="container">
        <div class="row" id="product-inner">
            <div class="col-md-4 product-item text-center">
                <div class="image-holder">
                    <img src="images/2.png" alt="">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="circle">
                    <div class="css">
                        <a class="inline button" href="#inline_content">PeŽiūrėti mano cv</a>
                        <img src="images/css.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-item text-center">
                <div class="image-holder">
                    <img src="images/php.png" alt="">
                </div>
                <div id="mano"></div>
            </div>
        </div>
    </div>
</div>
<!--Img end-->
<!--Darbai-->
<div id="portfolio" class="b3radius">
    <div class="container" id="Grid">
        <div class="row">
            <div class="col-md-12 text-center title">
                <br><h2>MANO DARBAI</h2>
            </div>
            <div class="darbai1">
                <div class="darbai0">
                    <a href="http://autobalta.lt/" target="_blank"><img src="images/autobalta.jpg" alt="www.autobalta.lt" ></a>
                    <br><br>
                    <h2>Aprašymas</h2><br>
                    <p> Tinklalapis <a href="http://autobalta.lt/" target="_blank"> <i>www.autobalta.lt</i></a> sukurtas šiuolaikinėmis programavimo kalbomis <i>HTML5, CSS3, PHP, JS, JQ</i>, ji galima atsidaryti ir mobiliuoju išmaniuoju telefonu.
                        <i>PHP</i> kalba, naudojantis duomenų baze <i>MySQL</i>, sukurta patogi administratoriaus paskyra, atlikta <i>SEO</i> optimizacija. Tinklalapis per <i>Google</i> randamas kuo puikiausiai.</p><br />
                </div>
                <div class="darbai0">
                    <a href="http://iljinpavel.16mb.com/" target="_blank"><img src="images/pic1.jpg" alt="www.iljinpavel.16mb.com" ></a>
                    <br><br>
                    <h2>Aprašymas</h2><br>
                    <p>Tinklalapis <a href="http://iljinpavel.16mb.com/" target="_blank"> <i>www.iljinpavel.16mb.com</i></a> sukurtas šiuolaikinėmis programavimo kalbomis <i>HTML5, CSS3, PHP, JS, JQ</i>.</p>
                    <br />
                </div>
                <a href="http://www.saitaspigiau.wc.lt/" target="_blank"><img src="images/pic2.jpg" alt="www.saitaspigiau.wc.lt"></a><br><br>
                <div class="darbai2">
                    <a href="http://www.htmltutorial.wc.lt/" target="_blank"><img src="images/pic4.jpg" alt="www.htmltutorial.wc.lt"></a>
                </div><div id="Kontaktai"></div>
                <br>
                <h2>Aprašymas</h2><br>
                <p>Tinklalapiai <a href="http://www.saitaspigiau.wc.lt/" target="_blank">  <i>www.saitaspigiau.wc.lt</i></a> ir <a href="http://www.htmltutorial.wc.lt/" target="_blank"> <i>www.htmltutorial.wc.lt</i></a> sukurti <i>Wordpress</i> kaip pavyzdžiai, juos galima atsidaryti ir mobiliuoju išmaniuoju telefonu.</p>
            </div>
        </div>
    </div>
</div>
<!--Darbai end-->
<!--MESSAGE-->
<div id="msm" class="b3radius">
    <div class="container" id="contact">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-form">
                    <br>
                    <h2>Kontaktai</h2>
                  <form method="POST" action="main.php" enctype="multipart/form-data" >
                        <div class="row">
                            <fieldset class="col-md-6">
                                <input type="text" name="nameFF" id="name" placeholder="Jūsų vardas arba įstaiga">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="email" name="contactFF" id="email" placeholder="El. pašto adresas">
                            </fieldset>
                            <fieldset class="col-md-12">
                                <textarea name="messageFF" id="message" placeholder="Pranešimo tekstas"></textarea>
                            </fieldset>
                            <br>
                            <div class="mag">
                            <input id="uploadFile" placeholder="Choose File" disabled="disabled">
                            <div class="fileUpload btn btn-primary">
                                <span><b>Prisegti darbo pasiūlymą</b></span>
                                <input id="uploadBtn" type="file" class="upload" name='mail_file' maxlength='64'>
                            </div>

                            <br><br>
                            <script type="text/javascript">
                                document.getElementById("uploadBtn").onchange = function () {
                                    document.getElementById("uploadFile").value = this.value;
                                };
                            </script>
                            </div>
                            <br>
                            <fieldset class="col-md-12">
                                <input type="submit" name="messageFF1" id="button-message" value="Siųsti">
                            </fieldset>
                        </div>
                      <hr>
                        <p style="text-align: center; font-size: 22px; color: red"style="text-align: center"><b>Tel. +370 679 29 909</b></p>
                      <hr>
                    </form>
                    <?php
                    if (isset($_POST['messageFF1'])){
                        $log =="";
                        $error="no"; //Žymėti klaidų buvimas
                        $posName = addslashes(htmlspecialchars(stripslashes(trim($_POST['nameFF']))));
                        $posEmail = addslashes(htmlspecialchars(stripslashes(trim($_POST['contactFF']))));
                        $posText = addslashes(htmlspecialchars(stripslashes(trim($_POST['messageFF']))));
                        //
                        if(!$posName || strlen($posName)<=2 || strlen($posName)>50 ) {
                            $log .= ' Prašome teisingai užpildyti laukelį <i>Jūsų vardas arba įstaiga</i> (turi būti 2-30 simbolių)!\n';
                            $error='yes';
                        }
                        //Iš pavadinimo teisingumą tikrinimas
                        function isEmail($posEmail){
                            return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$posEmail));
                        }
                        if($posEmail == ''){
                            $log .= ' Prašome įvesti savo elektroninio pašto adresą!\n';
                            $error = "yes";
                        }else if(!isEmail($posEmail)){
                            $log .= ' Jūs įvedėte neteisingą elektroninio pašto adresą. Prašome ištaisyti!\n';
                            $error = "yes";
                        }
                        //Tikrinimas komentarą Įvestas tekstas
                        if (empty($posText)){
                            $log .= ' Prašome nurodyti pranešimo tekstą!\n';
                            $error = "yes";
                        }
                        //Patikrinkite Komentaro tekstas ilgio
                        if(strlen($posText)>1010){
                            $log .= ' Tekstas per ilgas, prašome įvesti ne daugiau nei 1000 simbolių!\n';
                            $error = "yes";
                        }
                        //Tikrinimas ilgų žodžių akivaizdoje
                        $mas = preg_split("/[\s]+/",$posText);
                        foreach($mas as $index => $val){
                            if (strlen($val)>60){
                                $log .= ' Pranešimo tekste įvestas per ilgas žodis (daugau nei 60 ženklų)!\n';
                                $error = "yes";
                                break;
                            }
                        }
                        sleep(2);

                        $picture = "";
                        if (!empty($_FILES['mail_file']['tmp_name'])) {
                            $path = $_FILES['mail_file']['name'];
                            if (copy($_FILES['mail_file']['tmp_name'], $path)) $picture = $path;
                        }
                        //Jei nėra klaidos siųsti siųsti
                        if($error=="no"){
                            $fp = fopen($path,"r");
                            $file = fread($fp, filesize($path));
                            fclose($fp);
                            $boundary = "--".md5(uniqid(time()));
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .="Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
                            $multipart .= "--$boundary\n";
                            $kod = 'koi8-r';
                            $multipart .= "Content-Type: text/html; charset=$kod\n";
                            $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";
                            $multipart .= "$html\n\n";
                            $message_part = "--$boundary\n";
                            $message_part .= "Content-Type: application/octet-stream\n";
                            $message_part .= "Content-Transfer-Encoding: base64\n";
                            $message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n";
                            $message_part .= chunk_split(base64_encode($file))."\n";
                            $multipart .= $message_part."--$boundary--\n";

                            //Siųsti laišką administratoriui apie naujus komentarus
                            $to_mail = "pavelpages60@gmail.com";//Jūsų elektroninio pašto adresas
                            $mail_sent = "\nPaštas: ".$posEmail;
                            $subject = 'Įmonė '.$posName.' atsiuntė jums žinutė';
                            $subject_darb = 'Įmonė '.$posName.' atsiuntė jums darbo pasiūlymą';
                            $name = 'Įmonė arba žmogus: '.$posName;
                            $mes = "\n\nSiunčiau jums žinutę:\n\n".$posText;

                            if(empty($picture)) mail($to_mail, "\n".$subject, $name. $mail_sent. $today."\nIp: ".$_SERVER['REMOTE_ADDR']."\nPort: ".$_SERVER['REMOTE_PORT']. $mes);
                            else {
                                mail($to_mail, "\n".$subject, $name. $mail_sent."\nIp: ".$_SERVER['REMOTE_ADDR']."\nPort: ".$_SERVER['REMOTE_PORT']. $mes);
                                mail($to_mail, $subject_darb, $multipart, $headers);
                            }
                            // OK!!!
                            ?>
                            <script>
                                function sweetAlert() {
                                    swal({
                                        title: "<p style='color:#4CAF50;'>Jūsų laiškas sėkmingai išsiųstas!</p>",
                                        text: "<p style='color:#4CAF50;'>Ačiū!</p><br><br><a style='background-color:#4CAF50; border-radius:5px; border:none; color:white; padding: 9px 60px; text-align:center; text-decoration:none; display:inline-block; font-size:16px; margin:4px 2px; cursor:pointer;' href='main.php'>Grižti</a>",
                                        type: "success",
                                        html: true,
                                        showConfirmButton: false
                                    })
                                }
                                sweetAlert();
                            </script>
                        <?php
                        }
                        else{
                        //jei yra klaidų
                        $message = $log;
                        ?>
                            <script>
                                function sweetAlert() {
                                    swal({
                                        title: "<b style='color:red;'>Klaida!</b>",
                                        text: '<?php echo $message; ?><br><br><a style="background-color:#f55858; border-radius:5px; border:none; color:white; padding: 9px 60px; text-align:center; text-decoration:none; display:inline-block; font-size:16px; margin:4px 2px; cursor:pointer;" href="main.php">Grižti</a>',
                                        html: true,
                                        showConfirmButton: false,
                                        type: "error"
                                    })
                                }
                                sweetAlert();
                            </script>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- <div class="row">
             <div class="col-md-9">
                 <div class="map-holder">
                     <div id="map_canvas" class="map-canvas"></div>
                 </div>
             </div>
         </div>-->
    </div>
</div>
<div>
    <!--MESSAGE End-->
    <!--footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p><a href="index.php" alt="Pavel iljin">Pavel Iljin © 2015</a></p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="social">
                        <li><a href="index.php" class="fa fa-facebook"></a></li>
                        <li><a href="index.php" class="fa fa-twitter"></a></li>
                        <li><a href="index.php" class="fa fa-instagram"></a></li>
                        <li><a href="index.php" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
    <!-- Google Map -->
    <div class="map">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/jquery.gmap3.min.js"></script>

        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '54.687220, 25.287101'
                    },
                    map:{
                        options:{
                            zoom: 10,
                            scrollwheel: false,
                            streetViewControl : true
                        }
                    }
                });
            });
        </script>
    </div>

    <link rel="stylesheet" href="colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="style/jquery.colorbox.js"></script>
    <script>
        $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements
            $(".group1").colorbox({rel:'group1'});
            $(".group2").colorbox({rel:'group2', transition:"fade"});
            $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
            $(".group4").colorbox({rel:'group4', slideshow:true});
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
            $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
            $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
            $(".inline").colorbox({inline:true, width:"50%"});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });

            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function(){
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>

    <div style='display:none'>
        <div id='inline_content' style='padding:10px; background:#fff;'>
            <h2 style="text-align: center; font-size: 20px;">Norėdami peržiūrėti mano cv, užpildyte formą</h2>
            <form method="POST" action="test_cv.php">
                        <br><input type="text" name="darb"  placeholder="Jūsų vardas arba įstaiga">
                        <br><br><input type="email" name="mail"  placeholder="El. pašto adresas">
                        <br><br><input style="border: 0; border-radius: 5px; outline: 0; background: #f55858; color: #fff; padding: 9px 60px; text-transform: uppercase; font-weight: 700;" type="submit" name="cv_test"  value="Peržiūrėti">

                       <br><br> <a style="border: 0; border-radius: 5px; outline: 0; background: #f55858; color: #fff; padding: 9px 60px; text-transform: uppercase; font-weight: 700; float: right;" href="main.php">Grižti</a>
            </form>
        </div>
    </div>
</body>
</html>