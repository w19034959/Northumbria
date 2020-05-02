<?php include('functions.php');
$db = getConnection();
 ?>

<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<title>Staff Portal</title>
				<link rel="stylesheet" href="CSS/StaffMenu.css">
		</head>
		<body>
                <div class="bg-img">
					<div class="navigation-bar">
							<img id = "logo" img src="Images/logo.jpg">
							<ul>
								<li><a href="#" class = "active">Home</a></li>
								<li><a href="ViewRota.php">View Rotas</a></li>
								<li><a href="RDO.php">Request Day Off</a></li>
								<li><a href="RH.php">Request Holiday</a></li>
								<li><a href="logout.php">Log Out</a></li>
							</ul>
					</div>
				</div>
		</body>
</html>
