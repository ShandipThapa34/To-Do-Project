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
<header>
	<nav>
		<div class="logo">
			<h2>To Do</h2>
		</div>

		<div class="menu">
			<i class="uil uil-times-circle" onclick="hideMenu()"></i>
			<a href="index.php">Home</a>
			<a href="about.php">About</a>
			<a href="login.php">Login</a>
			<a href="signup.php">Signup</a>
		</div>
		<i class="uil uil-list-ul" onclick="showMenu()"></i>
	</nav>

	<main>
	<div class="container">
			<div class="login">
				<span class="title">Login<span>

				<form aciton="#">
					<div class="input-field">
						<input type="text" placeholder="Enter your email" required>
						<i class="uil uil-envelope icon"></i>
					</div>

					<div class="input-field">
						<input type="password" class="password" placeholder="Enter your password" required>
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
	</main>
</header>
<script type="text/javascript">

	const container = document.querySelector(".container"),
		  pwShowHide = document.querySelectorAll(".showHidePw"),
		  pwFields = document.querySelectorAll(".password");

		pwShowHide.forEach(eyeIcon =>{
			eyeIcon.addEventListener("click", ()=>{
				pwFields.forEach(pwField =>{
					if(pwField.type === "password"){
						pwField.type = "text";

						pwShowHide.forEach(icon =>{
							icon.classList.replace("uil-eye-slash", "uil-eye");
						})

					}else{
						pwField.type = "password";

						pwShowHide.forEach(icon =>{
							icon.classList.replace("uil-eye", "uil-eye-slash");
						})
					}
				})
			})
		})

	
	var navLinks = document.getElementById("navLinks");

	function showMenu(){
		navLinks.style.right = "0";
	}

	function hideMenu(){
		navLinks.style.right = "-200px";
	}

</script>
</body>
</html>