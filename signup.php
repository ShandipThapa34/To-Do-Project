<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width initial-scale = 1">
	<!-- iconscout css -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<!-- css -->
	<link rel="stylesheet" href="css/signup.css">
	<title>Signup Form</title>
</head>
<body>
	<div class="container">
		<div class="form">
			<div class="signup">
				<span class="title">SignUp<span>

				<form aciton="#">
					<div class="input-field">
						<input type="text" placeholder="Enter your full name" required>
						<i class="uil uil-user icon"></i>
					</div>					

					<div class="input-field">
						<input type="text" placeholder="Enter your email" required>
						<i class="uil uil-envelope icon"></i>
					</div>

					<div class="input-field">
						<input type="password" placeholder="Enter your password" required>
						<i class="uil uil-lock-alt icon"></i>
						<i class="uil uil-eye-slash showHidePw"></i>
					</div>

					<div class="input-field">
						<input type="password" placeholder="Enter your password again" required>
						<i class="uil uil-lock-alt icon"></i>
						<i class="uil uil-eye-slash showHidePw"></i>
					</div>

					<div class="input-field button">
						<input type="button" value="Signup Now" >
					</div>

					<div class="login-signup">
						<span class="member">Already a member?
							<a href="login.php" class="text signup-text">Login now</a>
						</span>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>