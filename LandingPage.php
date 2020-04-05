<?php include('functions.php');
$db = getConnection();
 ?>

<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<title>Landing Page</title>

				<link rel="stylesheet" href="CSS/LandingPage.css">
		</head>

		<body>


                <div class="bg-img">
				<nav>
					<div id="navigation-container">
						<img id = "logo" img src="Images/logo.jpg">

					</div>
				</nav>

					<form action="authenticate.php" method="post" class="container">

						<h1>Login</h1>

						<label for="email"><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>

						<label for="password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
						
						<label for "role"><b>Role</b></label>
						<select name = "role"> <option value = "Staff">Staff</option>
						<option value = "Management">Manager</option><br>
						</select> 
					

						<button type="submit" class="btn" name="login">Login</button>
						
						
							
						
					</form>
				</div>
		</body>
</html>
