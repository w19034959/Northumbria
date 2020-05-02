<?php
include('functions.php');
$db = getConnection();
//database connection
?>
<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<title>Requests</title>
				
				<link rel="stylesheet" href="CSS/requests.css">
		</head>
		
		<body>
				
					<div class="navigation-bar">
						
							<img id = "logo" img src="Images/logo.jpg">

							<ul>
								<li><a href="ManagerMenu.php" >Home</a></li>
								<li><a href="CreateRota.php" >Create Rota</a></li>
								<li><a href="AlterRota.php">Alter Rota</a></li>
								<li><a href="requests.php" class = "active">Requests</a></li>
								<li><a href="admin.php">Admin</a></li>
								<li><a href="logout.php">Log Out</a></li>
							</ul>
					</div>
						<br>
					<div class=link">
					<form action="requests.php">
    <input type="submit" value="Back to Requests" />
    </form>
	</div>
						<div class=link">
					<form action="RequestLink.php">
    <input type="submit" value="View Rota" />
    </form>
	</div>
	<h2><Center> Approved requests <Center/></h2>

<div class=content>

<?php
$sql = "select * from TPapprovals";

$result = $db->query($sql);

$display  ="<table border=1><tr>";
$display .="<td>Employee ID</td>";
$display .="<td>Start Date</td>";
$display .="<td>End Date</td></tr>";


while ($row = $result-> fetchObject())
{
	$display .="<tr><td>"     . $row->employee_id . "</td>";
	$display .="<td>"     . $row->start_date . "</td>";
	$display .="<td>"     . $row->end_date . "</td>";
	$display .="</tr>";
}

$display .="</table>";
echo $display;
?>
</div>		
		</body>
</html> 
