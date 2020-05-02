<?php
require_once('functions.php');
$db = getConnection();
//database connection


?>


<!DOCTYPE html>
<html lang="en">		


		<head>
				<meta charset="utf-8">
				<title>Staff Portal</title>
				<link rel="stylesheet" href="CSS/ViewRota.css">
		</head>
		<body>
                
					<div class="navigation-bar">
							<img id = "logo" img src="Images/logo.jpg">
							<ul>
								<li><a href="StaffMenu.php">Home</a></li>
								<li><a href="ViewRota.php" class = "active">View Rotas</a></li>
								<li><a href="RDO.php">Request Day Off</a></li>
								<li><a href="RH.php">Request Holiday</a></li>
								<li><a href="LO.php">Log Out</a></li>
							</ul>
					</div>

<br>
</br>

<h2><Center> Front of House Rota <Center/></h2>

<br>
</br>

<div class=content>

<?php
$sql = "select * from TPFOHRota";

$result = $db->query($sql);

$display  ="<table border=1><tr>";
$display .="<td>RotaID</td>";
$display .="<td>EmployeeID</td>";
$display .="<td>Work Week</td>";
$display .="<td>Monday Start</td>";
$display .="<td>Monday Finish</td>";
$display .="<td>Tuesday Start</td>";
$display .="<td>Tuesday Finish</td>";
$display .="<td>Wednesday Start</td>";
$display .="<td>Wednesday Finish</td>";
$display .="<td>Thursday Start</td>";
$display .="<td>Thursday Finish</td>";
$display .="<td>Friday Start</td>";
$display .="<td>Friday Finish</td>";
$display .="<td>Saturday Start</td>";
$display .="<td>Saturday Finish</td>";
$display .="<td>Sunday Start</td>";
$display .="<td>Sunday Finish</td>";
$display .="<td>Holiday (0 = In Work, 1 = On Holiday) </td></tr>";


while ($row = $result-> fetchObject())
{
	$display .="<tr><td>" . $row->rota_id . "</td>";
	$display .="<td>"     . $row->employee_id . "</td>";
	$display .="<td>"     . $row->workWeek . "</td>";
	$display .="<td>"     . $row->MondayStart . "</td>";
	$display .="<td>"     . $row->MondayFinish . "</td>";	
	$display .="<td>"     . $row->TuesdayStart . "</td>";
	$display .="<td>"     . $row->TuesdayFinish . "</td>";
	$display .="<td>"     . $row->WednesdayStart . "</td>";
	$display .="<td>"     . $row->WednesdayFinish . "</td>";
	$display .="<td>"     . $row->ThursdayStart . "</td>";
	$display .="<td>"     . $row->ThursdayFinish . "</td>";
	$display .="<td>"     . $row->FridayStart . "</td>";
	$display .="<td>"     . $row->FridayFinish . "</td>";
	$display .="<td>"     . $row->SaturdayStart . "</td>";
	$display .="<td>"     . $row->SaturdayFinish . "</td>";
	$display .="<td>"     . $row->SundayStart . "</td>";	
	$display .="<td>"     . $row->SundayFinish . "</td>";
	$display .="<td>"     . $row->isHoliday . "</td>";



	$display .="</tr>";
}
$display .="</table>";
echo $display;
?>

</div>
<?php
?>

<br>
</br>

<h2><Center> Kitchen Rota <Center/></h2>

<br>
</br>

<?php
$sql = "select * from TPKitchenRota";

$result = $db->query($sql);

$display  ="<table border=1><tr>";
$display .="<td>RotaID</td>";
$display .="<td>EmployeeID</td>";
$display .="<td>Work Week</td>";
$display .="<td>Monday Start</td>";
$display .="<td>Monday Finish</td>";
$display .="<td>Tuesday Start</td>";
$display .="<td>Tuesday Finish</td>";
$display .="<td>Wednesday Start</td>";
$display .="<td>Wednesday Finish</td>";
$display .="<td>Thursday Start</td>";
$display .="<td>Thursday Finish</td>";
$display .="<td>Friday Start</td>";
$display .="<td>Friday Finish</td>";
$display .="<td>Saturday Start</td>";
$display .="<td>Saturday Finish</td>";
$display .="<td>Sunday Start</td>";
$display .="<td>Sunday Finish</td>";
$display .="<td>Holiday (0 = In Work, 1 = On Holiday) </td></tr>";


while ($row = $result-> fetchObject())
{
	$display .="<tr><td>" . $row->rota_id . "</td>";
	$display .="<td>"     . $row->employee_id . "</td>";
	$display .="<td>"     . $row->workWeek . "</td>";
	$display .="<td>"     . $row->MondayStart . "</td>";
	$display .="<td>"     . $row->MondayFinish . "</td>";	
	$display .="<td>"     . $row->TuesdayStart . "</td>";
	$display .="<td>"     . $row->TuesdayFinish . "</td>";
	$display .="<td>"     . $row->WednesdayStart . "</td>";
	$display .="<td>"     . $row->WednesdayFinish . "</td>";
	$display .="<td>"     . $row->ThursdayStart . "</td>";
	$display .="<td>"     . $row->ThursdayFinish . "</td>";
	$display .="<td>"     . $row->FridayStart . "</td>";
	$display .="<td>"     . $row->FridayFinish . "</td>";
	$display .="<td>"     . $row->SaturdayStart . "</td>";
	$display .="<td>"     . $row->SaturdayFinish . "</td>";
	$display .="<td>"     . $row->SundayStart . "</td>";	
	$display .="<td>"     . $row->SundayFinish . "</td>";
	$display .="<td>"     . $row->isHoliday . "</td>";



	$display .="</tr>";
}
$display .="</table>";
echo $display;
?>

</div>
<?php
?>

				</div>
		</body>
</html>
