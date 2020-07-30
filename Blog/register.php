<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
	<!-- Custom Style -->
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
<!--Navigation-->
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<!--End Navigation-->
<div class="auth-content">
	<form action="register.php" method="post">
		<h2 class="form-title">Register</h2>
		<div>
			<label for="">Username</label>
			<input type="text" name="username"  class="text-input">
		</div>
		<div>
			<label for="">Email</label>
			<input type="email" name="email" class="text-input">
		</div>
		<div>
			<label for="">Password</label>
			<input type="password" name="password" class="text-input">
		</div>
		<div>
			<label for="">Password Confirmation</label>
			<input type="password" name="passwordConf" class="text-input">
		</div>
		<div>
			<button type="submit" name="register-btn" class="btn btn-big">Register</button>
		</div>
		<p>Or <a href="<?php echo BASE_URL . '/login.php'?>">Sign In</a></p>
	</form>
</div>


	


	

		<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Custom Jquery -->
	<script src="assets/js/scripts.js"></script>
</body>
</html>