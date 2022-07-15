<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width initial-scale = 1">
	<!-- iconscout css -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<!-- css -->
	<link rel="stylesheet" href="css/login.css">
	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<div class="form">
			<div class="login">
				<span class="title">Login<span>

				<form aciton="#">
					<div class="input-field">
						<input type="text" placeholder="Enter your email" required>
						<i class="uil uil-envelope icon"></i>
					</div>

					<div class="input-field">
						<input type="password" placeholder="Enter your password" required>
						<i class="uil uil-lock-alt icon"></i>
						<i class="uil uil-eye-slash showHidePw"></i>
					</div>

					<div class="checkbox-text">
						<div class="checkbox-content">
							<input type="checkbox" name="logCheck">
							<label for="logCheck" class="logCheck">Remember Me</label>
						</div>
						<a href="#" class="text">Forget password?</a>
					</div>

					<div class="input-field button">
						<input type="button" value="Login now" >
					</div>

					<div class="login-signup">
						<span class="member">Not a member?
							<a href="signup.php" class="text signup-text">Signup now</a>
						</span>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>