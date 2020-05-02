<?php include('functions.php');
$db = getConnection();
 ?>

<!DOCTYPE html>
<html lang="en">		


		<head>
				<meta charset="utf-8">
				<title>Staff Portal</title>
				<link rel="stylesheet" href="CSS/ViewRota.css">
		</head>
		<body>
                <div class="bg-img">
					<div class="navigation-bar">
							<img id = "logo" img src="Images/logo.jpg">
							<ul>
								<li><a href="StaffMenu.php">Home</a></li>
								<li><a href="ViewRota.php">View Rotas</a></li>
								<li><a href="RDO.php" class = "active" >Request Day Off</a></li>
								<li><a href="RH.php">Request Holiday</a></li>
								<li><a href="logout.php">Log Out</a></li>
							</ul>
<br>
</br>
<br>
</br>

<h2><Center> Day Off Request Form <Center/></h2>

<br>
</br>

<form onsubmit="return confirm('Are you sure you want to request a day off?, once submitted your request will be sent to a admin and the page will refresh')" 
				         action ="insert2.php" method = "post">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="Name" required></td>
   </tr>
   <tr>
    <td>Employee_ID :</td>
    <td><input type="number" name="Employee_ID" required></td>
   </tr>
   <tr>
    <td>Department :</td>
    <td><input type="text" name="Department" required></td>
   </tr>
   <tr>
    <td>StartingDate :</td>
    <td><input type="date" name="StartingDate" required></td>
   </tr>
   <tr>
    <td>EndingDate :</td>
    <td><input type="date" name="EndingDate" required></td>
   </tr>
   <tr>
  <td>
  <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>
