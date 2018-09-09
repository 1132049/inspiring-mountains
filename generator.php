<?php
$continents = isset($_POST['continents']) ? $_POST['continents']:"";
$europe = isset($_POST['europe']) ? $_POST['europe']:"";
$asia = isset($_POST['asia']) ? $_POST['asia']:"";
$samerica = isset($_POST['samerica']) ? $_POST['samerica']:"";
$africa = isset($_POST['africa']) ? $_POST['africa']:"";
$namerica = isset($_POST['namerica']) ? $_POST['namerica']:"";
$australia = isset($_POST['australia']) ? $_POST['australia']:"";
$skiing = isset($_POST['skiing']) ? $_POST['skiing']:"";
$trekking = isset($_POST['trekking']) ? $_POST['trekking']:"";
$mountaineering = isset($_POST['mountaineering']) ? $_POST['mountaineering']:"";
$activities = isset($_POST['activities']) ? $_POST['activities']:"";
$error['asia'] = 'No well-developed ski resorts in 5 highest Asia mountains';


$arrayeurope = array("http://localhost/mountains/mount-elbrus.html" , "http://localhost/mountains/monte-shkhara.html", "http://localhost/mountains/mount-blanc.html", "http://localhost/mountains/mount-rosa.html", "http://localhost/mountains/mount-bazar.dyuzi.html");

$arrayasia = array("http://localhost/mountains/mount-everest.html" , "http://localhost/mountains/annapurna.html", "http://localhost/mountains/mount-khuiten.html", "http://localhost/mountains/mount-kinabalu.html", "http://localhost/mountains/mount-rinjani.html");

$arraysamerica = array('http://localhost/mountains/mount-aconcagua.html' , 'http://localhost/mountains/mount-Ojos-del-Salado.html', 'http://localhost/mountains/Mount-Pissis.html', 'http://localhost/mountains/Mount-Bonete.html', 'http://localhost/mountains/Tres-Cruces-Sur.html');
$arraysamerica_1 = array('http://localhost/mountains/mount-aconcagua.html' , 'http://localhost/mountains/Mount-Bonete.html', 'http://localhost/mountains/Tres-Cruces-Sur.html');

$arrayafrica = array('http://localhost/mountains/mount-kilimanjaro.html' , 'http://localhost/mountains/mount-kenya.html', 'http://localhost/mountains/mount-stanley.html', 'http://localhost/mountains/Semien-mountains.html', 'http://localhost/mountains/Mount-elgon.html');
$arrayafrica = array('http://localhost/mountains/mount-kilimanjaro.html' , 'http://localhost/mountains/mount-stanley.html');


$arraynamerica = array('http://localhost/mountains/mount-denali.html' , 'http://localhost/mountains/mount-logan.html', 'http://localhost/mountains/popocatepetl.html');
$arraynamerica_1 = array('http://localhost/mountains/mount-denali.html' , 'http://localhost/mountains/mount-logan.html', 'http://localhost/mountains/el-pico-de-orizaba.html', 'http://localhost/mountains/Mount-saint-elias.html');


$arrayaustralia = array('http://localhost/mountains/mount-kosciuszko.html' , 'http://localhost/mountains/mount-bogong.html', 'http://localhost/mountains/mount-buller.html', 'http://localhost/mountains/Mount-buffalo.html');
$arrayaustralia_1 = array('http://localhost/mountains/mount-kosciuszko.html' , 'http://localhost/mountains/mount-bogong.html', 'http://localhost/mountains/mount-buller.html', 'http://localhost/mountains/Mount-buffalo.html', 'http://localhost/mountains/mount-bartle-frere.html');

?>

<!doctype html>
<html>
	<head>
		<title>Find out what is your next destination?</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="normalize.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="icon" href="img/logo.png"/>
	</head>

	<body>

			<section id="destination">
				<div class="flex-container">
					<div class="left" id="generator-pic">
						<nav>
							<div class="icons">
								<div class="dropdown">
									<button class="dropbtn">
										<i class="fas fa-bars"></i>
									</button>
									<div class="dropdown-content">
										<a href="index.html">
											<i class="fas fa-home"></i>
										</a>
										<a href="continents.html">
											<i class="fas fa-globe-africa"></i>
										</a>
										<a href="generator.php">
											<i class="fas fa-map-marked-alt"></i>
										</a>
										<a href="contacts.php">
											<i class="fas fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
						</nav>
						<h3>find out </br> what is </br> your next </br> destination?</h3>
					</div>

					<div class="right" id="generator">
						<div class="content-wrapper">
							<div class="select-box">
								<form id="gen" action="generator.php" method="post">
								<select name="continents" required>
						        <option value="" disabled selected> Select a continent </option>
						        <option value="europe">Europe</option>
						        <option value="asia">Asia</option>
						        <option value="samerica">South America</option>
						        <option value="namerica">North America</option>
						        <option value="africa">Africa</option>
						        <option value="australia">Australia</option>
						      </select>
									<select name="activities">
										<option value="" disabled selected> Select an activity </option>
										<option value="skiing">Skiing/Snowboarding</option>
										<option value="trekking">trekking</option>
										<option value="mountaineering">mountaineering</option>
									</select>

						      <button type="submit" value="send" action="generator.php" id="sendbtn"> discover</button>

									<?php
						      	if ($continents == ''){
						      	}
										elseif ($continents == 'europe' && $activities == 'mountaineering') {
						        	$random = mt_rand(0, count($arrayeurope) - 1);
    									header ('Location: '. $arrayeurope[$random]);
										}
										elseif ($continents == 'europe' && $activities == 'trekking') {
						        	$random = mt_rand(0, count($arrayeurope) - 1);
    									header ('Location: '. $arrayeurope[$random]);
										}
										elseif ($continents == 'europe' && $activities == 'skiing') {
						        	$random = mt_rand(0, count($arrayeurope) - 1);
    									header ('Location: '. $arrayeurope[$random]);
										}
										elseif ($continents == 'europe') {
						        	$random = mt_rand(0, count($arrayeurope) - 1);
    									header ('Location: '. $arrayeurope[$random]);
										}
										elseif ($continents == 'asia' && $activities == 'mountaineering'){
											$random = mt_rand(0, count($arrayasia) - 1);
											header ('Location: '. $arrayasia[$random]);
										}
										elseif ($continents == 'asia' && $activities == 'trekking') {
											$random = mt_rand(0, count($arrayasia) - 1);
											header ('Location: '. $arrayasia[$random]);
										}
										elseif ($continents == 'asia' && $activities == 'skiing') {
											echo '<div class="error-wrapper">'.$error['asia'] .'</div>';
						      	}
										elseif ($continents == 'samerica' && $activities == 'mountaineering') {
											$random = mt_rand(0, count($arraysamerica) - 1);
											header ('Location: '. $arraysamerica[$random]);
							      }
										elseif ($continents == 'samerica' && $activities == 'trekking') {
											$random = mt_rand(0, count($arraysamerica) - 1);
											header ('Location: '. $arraysamerica[$random]);
							      }
										elseif ($continents == 'samerica' && $activities == 'skiing') {
											$random = mt_rand(0, count($arraysamerica) - 1);
											header ('Location: '. $arraysamerica[$random]);
							      }
										elseif ($continents == 'africa' && $activities == 'mountaineering') {
											$random = mt_rand(0, count($arrayafrica) - 1);
											header ('Location: '. $arrayafrica_1[$random]);
							      }
										elseif ($continents == 'africa' && $activities == 'trekking') {
											$random = mt_rand(0, count($arrayafrica) - 1);
											header ('Location: '. $arrayafrica_1[$random]);
							      }
										elseif ($continents == 'africa' && $activities == 'skiing') {
											$random = mt_rand(0, count($arrayafrica) - 1);
											header ('Location: '. $arrayafrica[$random]);
							      }
										elseif ($continents == 'namerica' && $activities == 'mountaineering') {
											$random = mt_rand(0, count($arraynamerica) - 1);
											header ('Location: '. $arraynamerica_1[$random]);
							      }
										elseif ($continents == 'namerica' && $activities == 'trekking') {
											$random = mt_rand(0, count($arraynamerica) - 1);
											header ('Location: '. $arraynamerica_1[$random]);
							      }
										elseif ($continents == 'namerica' && $activities == 'skiing') {
											$random = mt_rand(0, count($arraynamerica) - 1);
											header ('Location: '. $arraynamerica[$random]);
							      }
										elseif ($continents == 'australia' && $activities == 'mountaineering') {
											$random = mt_rand(0, count($arraynamerica) - 1);
											header ('Location: '. $arrayaustralia_1[$random]);
							      }
										elseif ($continents == 'australia' && $activities == 'trekking') {
											$random = mt_rand(0, count($arraynamerica) - 1);
											header ('Location: '. $arrayaustralia_1[$random]);
							      }
										else  {
											$random = mt_rand(0, count($arrayaustralia) - 1);
											header ('Location: '. $arrayaustralia[$random]);
							      }
						       ?>
							</form>
							</div>
						</div>
					</div>
				</div>
			</section>
	</body>
</html>
