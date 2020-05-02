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
					<form action="RequestLink.php">
    <input type="submit" value="View Rota" />
    </form>
	</div>
	<div class=link">
					<form action="approvals.php">
    <input type="submit" value="View approved requests" />
    </form>
	</div>
					<h2><Center> Holiday Requests <Center/></h2>
					<div class=content>

<?php
$sql = "select * from TPHoliday1";

$result = $db->query($sql);

$display  ="<table border=1><tr>";
$display .="<td>Name</td>";
$display .="<td>Employee ID</td>";
$display .="<td>Department</td>";
$display .="<td>Start date</td>";
$display .="<td>End date</td>";
$display .="<td>Approval</td></tr>";


while ($row = $result-> fetchObject())
{
	$display .="<tr><td>"     . $row->Name . "</td>";
	$display .="<td>"     . $row->Employee_ID . "</td>";
	$display .="<td>"     . $row->Department . "</td>";
	$display .="<td>"     . $row->StartingDate . "</td>";
	$display .="<td>"     . $row->EndingDate . "</td>";
	$display .="</tr>";
}

$display .="</table>";
echo $display;
?>
<br>
<h2><Center> Day Off Requests <Center/></h2>
<?php
$sql = "select * from TPDayOff5";

$result = $db->query($sql);

$display  ="<table border=1><tr>";
$display .="<td>Name</td>";
$display .="<td>Employee ID</td>";
$display .="<td>Department</td>";
$display .="<td>Start date</td>";
$display .="<td>End date</td>";
$display .="<td>Approval</td></tr>";


while ($row = $result-> fetchObject())
{
	$display .="<tr><td>"     . $row->Name . "</td>";
	$display .="<td>"     . $row->Employee_ID . "</td>";
	$display .="<td>"     . $row->Department . "</td>";
	$display .="<td>"     . $row->StartingDate . "</td>";
	$display .="<td>"     . $row->EndingDate . "</td>";
	$display .="</tr>";
}
$display .="</table>";
echo $display;
?>

</div>		
		</body>
</html> 
