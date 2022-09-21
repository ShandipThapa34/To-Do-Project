<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About To-Do List</title>
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
<header>
	<nav>
		<div class="logo">
			<h2>To Do</h2>
		</div>

		<div class="menu" id="navLinks">
			<i class="uil uil-times-circle" onclick="hideMenu()"></i>
			<a href="index.php">Home</a>
			<a href="about.php">About</a>
			<a href="login.php">Login</a>
			<a href="signup.php">Signup</a>
		</div>
		<i class="uil uil-list-ul" onclick="showMenu()"></i>
	</nav>

	<main>
		<div>
			
		</div>
	</main>
</header>
<script type="text/javascript">
	
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