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
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script src="dist/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>
<body>
	<?php
if (isset($_POST['cv_test'])){
	$log =="";

	$error="no"; //Žymėti klaidų buvimas

	$posName = addslashes(htmlspecialchars(stripslashes(trim($_POST['darb']))));
	$posEmail = addslashes(htmlspecialchars(stripslashes(trim($_POST['mail']))));

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
	sleep(2);

	//Jei nėra klaidos siųsti siųsti
	if($error=="no"){
		//Siųsti laišką administratoriui
		$to = "pavelpages60@gmail.com";//Jūsų elektroninio pašto adresas
		$mail_sent = "\nPaštas: ".$posEmail;
		$subject = 'Jūsų CV peržiūrėjo '.$posName;
		$name = $posName.' peržiūrėjo jūsų CV.';

		mail($to, $subject, $name. $mail_sent."\nIp: ".$_SERVER['REMOTE_ADDR']."\nPort: ".$_SERVER['REMOTE_PORT']);

		// OK!!!
		$file = 'images/PavelIljinCV.pdf';
		$filename = 'images/PavelIljinCV.pdf';
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename =" ' . $filename . ' " ');
		header('Content-Transfer-Encoding: bytes');
		@readfile($file);
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
</body>
</html>
