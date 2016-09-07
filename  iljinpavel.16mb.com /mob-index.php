<?php
session_start();
if (!$_SESSION['page']){
    exit ();
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Pavel Iljin</title>
    <meta name="description" content="Pavel Iljin">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style/bootstrapmin.css">
    <link rel="stylesheet" href="style/min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style/norma.min.css">
    <link rel="stylesheet" href="style/temo_style.css">
    <script src="java/vendor/mode.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

</head>
<body>
    <header class="site-header" id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only"></span>
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
                            <li class="active"><a href="#apie">Apie mane</a></li>
                            <li><a href="#mano_cv">Peržiūriti mano CV</a></li>
                            <li><a href="#mano_portfolio">Mano darbai</a></li>
                            <li><a href="#mano_contact">Kontaktai</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <div id="apie"></div>
    <div class="top-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-holder">
                        <img id="b3radius" src="pictures/1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Apie mane</h3>
                    <h5>Vardas ir pavardė – Pavel Iljin</h5><br />
					<h5>Gimimo data – 1989-05-23</h5><br />
					<h5>Miestas – Vilnius</h5><br />
					<h5>Telefonas +370 679 29 909</h5><br />
					<h5>El. paštas pavel.iljinas@gmail.com</h5>
                    <p>
   Studijuoju programavimą ir internetines technologijas.<br /> Turiu pakankamai darbo kompiuteriu įgūdžių.
                    <br><br>
					  Programuoju su HTML5, CSS3, JS, PHP, C++, SQL.<br />
					  Kuriu tinklalapius su ,,Joomla", ,,Wordpress" , ,,Opencart". <br />
					</p>
                </div>
				<p style="text-align:center;">  Teigiamos savybės: komunikabilumas, lankstumas, draugiškumas, atkaklumas, entuziastingumas, kruopštumas.
					  Žalingų įpročių neturiu, visuomet atsakingai atlieku savo pareigas.</p>
            </div>
        </div>
    </div>
    <div id="products">
        <div class="container">
            <div class="row" id="product-inner">
                <div class="col-md-4 product-item text-center">
                    <div class="image-holder">
                        <img src="pictures/2.png" alt="">
                    </div>
                </div>
                <div id="mano_cv"></div>
                <div class="col-md-4 text-center">
                    <div class="circle">
                 <br /> <br /> <br />
						 <h3><a class='inline' href="#inline_content">Peržiūriti mano CV</a></h3>
                    </div>
                </div>
                <div class="col-md-4 product-item text-center">
                    <div class="image-holder">
                        <img src="pictures/3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio">
        <div class="container" id="Grid">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>Mano darbai</h2>
                    <div id="mano_portfolio"></div>
					<br />
					<br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mix responsive">
                    <div class="work-item">
                        <div class="image-holder" id="b3radius">
                            <img  id="b3radius" src="pictures/gallery/1.jpg" alt="">
                            <div class="overlay">
                                <a href="pictures/gallery/1.jpg" data-rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h4>Aprašymas</h4>
                        <p>Tinklalapis <a href="http://autobalta.lt/" target="_blank">www.autobalta.lt</a> sukurtas šiuolaikinėmis programavimo kalbomis HTML5, CSS3, PHP, JS, JQ, ji galima atsidaryti ir mobiliuoju išmaniuoju telefonu. PHP kalba, naudojantis duomenų baze MySQL, sukurta patogi administratoriaus paskyra, atlikta SEO optimizacija. Tinklalapis per Google randamas kuo puikiausiai.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix nature">
                    <div class="work-item">
                        <div class="image-holder" id="b3radius">
                            <img src="pictures/gallery/2.jpg" alt="http://iljinpavel.16mb.com/" id="b3radius">
                            <div class="overlay">
                                <a href="pictures/gallery/2.jpg" data-rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h4>Aprašymas</h4>
                        <p>Tinklalapis <a href="http://iljinpavel.16mb.com/" target="_blank">www.iljinpavel.16mb.com</a> sukurtas šiuolaikinėmis programavimo kalbomis HTML5, CSS3, PHP, JS, JQ.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix creative illustration">
                    <div class="work-item">
                        <div class="image-holder" id="b3radius">
                            <img src="pictures/gallery/3.jpg" alt="http://www.saitaspigiau.wc.lt/" id="b3radius">
                            <div class="overlay">
                                <a href="pictures/gallery/3.jpg" data-rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
						<br />
                        <h4>Aprašymas</h4>
                        <p>Tinklalapis  <a href="http://www.saitaspigiau.wc.lt/" target="_blank">www.saitaspigiau.wc.lt</a> sukurtas Wordpress kaip pavyzdžiai, ji galima atsidaryti ir mobiliuoju išmaniuoju telefonu.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix graphic">
                    <div class="work-item">
                        <div class="image-holder" id="b3radius">
                            <img src="pictures/gallery/4.jpg" alt="http://www.htmltutorial.wc.lt/" id="b3radius">
                            <div class="overlay">
                                <a href="pictures/gallery/4.jpg" data-rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h4>Aprašymas</h4>
                        <p>Tinklalapis <a href="http://www.htmltutorial.wc.lt/" target="_blank">www.htmltutorial.wc.lt</a>  sukurtas Wordpress kaip pavyzdžiai, ji galima atsidaryti ir mobiliuoju išmaniuoju telefonu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-section">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-form">
                        <div id="mano_contact"></div>
                        <form method="POST" action="mob-index.php">
                            <div class="row">
                                <fieldset class="col-md-6">
                                    <div id="mano_contact"></div>
                                    <input id="b3radius" type="text" name="nameFF" id="name" placeholder="Jūsų vardas arba įstaiga">
                                </fieldset>
                                <fieldset class="col-md-6">
                                    <input id="b3radius" type="email" name="contactFF" id="email" placeholder="El. pašto adresas">
                                </fieldset>
                                <fieldset class="col-md-12">
                                    <textarea  id="b3radius" name="messageFF" id="message" placeholder="Pranešimo tekstas"></textarea>
                                </fieldset>
                                <fieldset class="col-md-12">
                                    <input id="b3radius" type="submit" name="messageFF1" id="button-message" value="Siųsti">
                                </fieldset>
                            </div>
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
                                    $log .= ' Pranešimo tekste įvestas per ilgas žodis (daugiau nei 60 ženklų)!\n';
                                    $error = "yes";
                                    break;
                                }
                            }
                            sleep(2);

                            //Jei nėra klaidos siųsti siųsti
                            if($error=="no"){
                                //Siųsti laišką administratoriui apie naujus komentarus
                                $to_mail = "pavelpages60@gmail.com";//Jūsų elektroninio pašto adresas
                                $mail_sent = "\nPaštas: ".$posEmail;
                                $subject = 'Įmonė "'.$posName.'" atsiuntė jums žinutė';
                                $subject_darb = 'Įmonė '.$posName.' atsiuntė jums darbo pasiūlymą';
                                $name = "\nĮmonė arba žmogus: ".$posName;
                                $mes = "\n\nSiunčiau jums žinutę:\n\n".$posText;

                                mail($to_mail, $subject, $name. $mail_sent. $today."\nIp: ".$_SERVER['REMOTE_ADDR']."\nPort: ".$_SERVER['REMOTE_PORT']. $mes);

                                // OK!!!
                                ?>
                                <script>
                                    function sweetAlert() {
                                        swal({
                                            title: "<p style='color:#4CAF50;'>Jūsų laiškas sėkmingai išsiųstas!</p>",
                                            text: "<p style='color:#4CAF50;'>Ačiū!</p><br><br><a style='background-color:#4CAF50; border:none; color:white; padding:15px 32px; text-align:center; text-decoration:none; display:inline-block; font-size:16px; margin:4px 2px; cursor:pointer;' href='index.php'>Grižti</a>",
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
                                            text: '<?php echo $message; ?><br><br><a style="background-color:red; border:none; color:white; padding:15px 32px; text-align:center; text-decoration:none; display:inline-block; font-size:16px; margin:4px 2px; cursor:pointer;" href="index.php">Grižti</a>',
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
                        ?>                    </div>
                </div>
				</div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>Pavel Iljin © 2015</p>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="java/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="java/bootstrap.min.js"></script>
    <script src="java/plugins.js"></script>
    <script src="java/main.js"></script>

    <link rel="stylesheet" href="colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="style/jquery.colorbox.js"></script>
    <script>
        $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements
            $(".group1").colorbox({rel:'group1'});
            $(".group2").colorbox({rel:'group2', transition:"fade"});
            $(".group4").colorbox({rel:'group4', slideshow:true});
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
            $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
            $(".iframe").colorbox({iframe:true, width:"120%", height:"80%"});
            $(".inline").colorbox({inline:true, width:"120%"});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the exit process'); },
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

    <div>
        <div style='display:none'>
            <div id='inline_content' style='padding:10px; background:#fff;'>
                <h2 style="text-align: center; font-size: 20px;">Norėdami peržiūrėti mano cv reikę užpildyti forma</h2>
                <form method="POST" action="mob-test_cv.php">
                    <br><input type="text" name="darb"  placeholder="Jūsų vardas arba įstaiga">
                    <br><br><input type="email" name="mail"  placeholder="El. pašto adresas">
                    <br><br><input style="border: 0; border-radius: 5px; outline: 0; background: #f55858; color: #fff; padding: 9px 60px; text-transform: uppercase; font-weight: 700;" type="submit" name="cv_test"  value="Peržiūriti">

                    <br><br> <a style="border: 0; border-radius: 5px; outline: 0; background: #f55858; color: #fff; padding: 9px 60px; text-transform: uppercase; font-weight: 700; float: right;" href="mob-index.php">Grižti</a>
                </form>
    </div>
</body>
</html>