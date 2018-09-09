<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$empty = isset($_POST['empty']) ? $_POST['empty'] : null;
$check = isset($_POST['check']) ? $_POST['check'] : '';
$error = array("name" => "", "email" => "","message" => "","check" =>"","empty"=>"", "database" => "");

if($_POST) {
	if($check != 4 || strlen($name) == 0 || strlen($name) > 255 || strlen($email) == 0 || strlen($email) > 255 ||
	   strlen($email) > 255 || !strpos($email, '@') ||  strlen($message) == 0 || $empty!=null) {
		if(strlen($name) == 0) {
			$error['name'] = 'Please insert your name';
		}
		if(strlen($name) > 255) {
			$error['name'] = 'Name is too long';
		}
		if(strlen($email) == 0) {
			$error['email'] = 'Please insert your email';
		}
		if(strlen($email) > 0 || !strpos($email,'@')) {
			$error['email'] = 'Email must contain the @ symbol';
		}
		if(strlen($email) > 255) {
			$error['email'] = 'Email is too long';
		}
		if(strlen($message) == 0) {
			$error['message'] = 'Please insert your message';
		}
		if($check != 4) {
			$error['check'] = 'Wrong answer';
		}


		if($empty != null) {
		 $error['empty'] = 'Error: empty must be empty';
		}
	}
	else {
		$conn = new mysqli('localhost','root','','inspiring_mountains');
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$name = $conn->real_escape_string($name);
		$email = $conn->real_escape_string($email);
		$message = $conn->real_escape_string($message);
		$saved = $conn->query("INSERT INTO contact_us_messages (name, email, message)
		VALUES ('$name','$email','$message')");
		if($saved){
			header('Location: ' . 'contacts.php');
		}
		else{
			$error['database'] = "Error when saving";
		}
	}
}
?>

<!doctype html>
<html>
	<head>
		<title>Contact us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="normalize.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="icon" href="img/logo.png"/>
	</head>

	<body>
			<section>
				<div class="flex-container">
					<div class="left"  id="contacts-2">
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
						<h3>Contact us</h3>
					</div>

					<div class="right" id="contacts">
						<div class="content-wrapper">
							<form id="con" method="post" action="<?php echo 'contacts.php' ?>">
								<div class="input-box">
									<input type="text" placeholder="name" name="name" value="<?php echo $name; ?>"/>
									<div class="error-wrapper"><p><?php echo $error['name']; ?></p></div>
								</div>

								<div class="input-box">
									<input type="text" placeholder="email" name = "email" value="<?php echo $email; ?>"/>
									<div class="error-wrapper"><p><?php echo $error['email']; ?></p></div>
								</div>

								<div class="input-box">
									<input type="text" placeholder="2 + 2" name = "check" value="<?php echo $check; ?>"/>
									<div class="error-wrapper"><p>
										<?php echo $error['check']; ?></p>
									</div>
								</div>

								<textarea name="message" placeholder="message" id="message" ><?php echo $message; ?></textarea>

								<div class="error-wrapper">
									<p><?php echo $error['message']; ?></p>
								</div>

								<div class="error-wrapper">
									<p><?php echo $error['empty']; ?></p>
								</div>

								<input type="hidden" id = "empty" name = "empty"/>

								<input type="submit" value="send" id="sendbtn">
									<div class="error-wrapper">
										<p><?php echo $error['database']; ?></p>
									</div>
							</form>
						</div>
					</div>
				</div>
			</section>
	</body>
</html>
