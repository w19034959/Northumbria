<?php
require_once('functions.php');
$db = getConnection();
//database connection

?>

<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<title>Create Rota</title>
				
				<link rel="stylesheet" href="CSS/CreateRota.css">
		</head>
		
		<body>
				
					<div class="navigation-bar">
						
							<img id = "logo" img src="Images/logo.jpg">

							<ul>
								<li><a href="ManagerMenu.php" >Home</a></li>
								<li><a href="CreateRota.php" class = "active">Create Rota</a></li>
								<li><a href="#">Alter Rota</a></li>
								<li><a href="#">Requests</a></li>
								<li><a href="admin.php">Admin</a></li>
								<li><a href="logout.php">Log Out</a></li>
							</ul>
					</div>
					
					<div class = "tabs">
					<button class="tablink" onclick="openPage('FrontOfHouse', this, '#EAAE62')"id="defaultOpen">Front of House</button>
					
					<button class="tablink" onclick="openPage('Kitchen', this, '#EAAE62')">Kitchen</button>
					</div>
					<div id="FrontOfHouse" class="tabcontent">
					
					<form onsubmit="return confirm('Are you sure you want to publish this rota? All staff members will be published even if incomplete')" 
						onreset="return confirm('Are you sure you want to clear this rota? All progress will be deleted')" action ="insertFOH.php" method = "post">
					<table>
						<tr>
							<th colspan="10" id="FoHTitle">Front of House Rota</th>
						</tr>
						<tr>
							<th colspan="6" id="date"><label>Please select the week you would like to rota: </label><input type = "date" name="workWeek"></th>
							<th colspan="4" id="FoHPublish"><input type="submit" value="Publish"/><input type="reset" value="Clear"/></th>
						</tr>
						<tr>
							<th> Name </th>
							<th> Monday </th>
							<th> Tuesday </th>
							<th> Wednesday </th>
							<th> Thursday </th>
							<th> Friday </th>
							<th> Saturday </th>
							<th> Sunday </th>
							<th> Weeks Holiday</th>
						</tr>
						
					<?php
						$query ="SELECT forename, surname, employee_id FROM TPUsers WHERE department='FOH' OR department = 'Management' ORDER BY surname"; //TODO return TPUsers

						$result = $db->query($query);

						$value = 0;

						while ($row = $result-> fetchObject()) { //creates a start and finish table for each user returned

						    $id = $row->employee_id;

                            echo "<tr><td name=" . $row->employee_id . ">" . $row->forename . " " . $row->surname . "</td>";
                            echo '<td><label>Start &nbsp</label><input type="time" name="mondayStart'.$id.'"
											><br><label>Finish </label><input type="time" name="mondayEnd'.$id.'"></td>
										<td><label>Start &nbsp</label><input type=time name="tuesdayStart'.$id.'"
											><br><label>Finish </label><input type=time name="tuesdayEnd'.$id.'"></td>
										<td><label>Start &nbsp</label><input type=time name="wednesdayStart'.$id.'"
										><br><label>Finish </label><input type=time name="wednesdayEnd'.$id.'"></td>
										<td><label>Start &nbsp</label><input type=time name="thursdayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="thursdayEnd'.$id.'"></td>
										<td><label>Start &nbsp</label><input type=time name="fridayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="fridayEnd'.$id.'"></td>
										<td><label>Start &nbsp</label><input type=time name="saturdayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="saturdayEnd'.$id.'"></td>
										<td><label>Start &nbsp</label><input type=time name="sundayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="sundayEnd'.$id.'"></td>
											<td><label>Holiday</label><input type=checkbox name="isHoliday'.$id.'" value=1></td></tr>';
                            $value = $value + 1; //increase the value for each row returned
                        }
						?>
					</table>

					</form>
					</div>
					
				
					
					<div id="Kitchen" class="tabcontent">
					<form onsubmit="return confirm('Are you sure you want to publish this rota? All staff members will be published even if incomplete')" 
						onreset="return confirm('Are you sure you want to clear this rota? All progress will be deleted')" action ="insertKitchen.php" method = "post">
					<table>
						<tr>
							<th colspan="10" id="KitchenTitle">Kitchen Rota</th>
						</tr>
						<tr>
							<th colspan="6" id="date"><label>Please select the week you would like to rota: </label><input type = "date" name="workWeek"></th>
							<th colspan="4" id="FoHPublish"><input type="submit" value="Publish"/><input type="reset" value="Clear"/></th>
						</tr>
						<tr>
							<th> Name </th>
							<th> Monday </th>
							<th> Tuesday </th>
							<th> Wednesday </th>
							<th> Thursday </th>
							<th> Friday </th>
							<th> Saturday </th>
							<th> Sunday </th>
							<th> Weeks Holiday</th>
						</tr>
						
					<?php
						$query ="SELECT forename, surname, employee_id FROM TPUsers WHERE department='Kitchen' ORDER BY surname"; //TODO return TPUsers

						$result = $db->query($query);

						$value = 0;

						while ($row = $result-> fetchObject()) { //creates a start and finish table for each user returned

						    $id = $row->employee_id;

                            echo "<tr><td name=" . $row->employee_id . ">" . $row->forename . " " . $row->surname . "</td>";
                            echo '<td><label>Start </label><input type="time" name="mondayStart'.$id.'"
											><br><label>Finish </label><input type="time" name="mondayEnd'.$id.'"></td>
										<td><label>Start </label><input type=time name="tuesdayStart'.$id.'"
											><br><label>Finish </label><input type=time name="tuesdayEnd'.$id.'"></td>
										<td><label>Start </label><input type=time name="wednesdayStart'.$id.'"
										><br><label>Finish </label><input type=time name="wednesdayEnd'.$id.'"></td>
										<td><label>Start </label><input type=time name="thursdayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="thursdayEnd'.$id.'"></td>
										<td><label>Start </label><input type=time name="fridayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="fridayEnd'.$id.'"></td>
										<td><label>Start </label><input type=time name="saturdayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="saturdayEnd'.$id.'"></td>
										<td><label>Start </label><input type=time name="sundayStart'.$id.'"
										    ><br><label>Finish </label><input type=time name="sundayEnd'.$id.'"></td>
											<td><label>Holiday</label><input type=checkbox name="isHoliday'.$id.'" value=1></td></tr>';
                            $value = $value + 1; //increase the value for each row returned
                        }
						?>
					</table>

					</form>
					</div>
					

					
					
					
					
					
					
					<script>
							function openPage(pageName,elmnt,color) {
							var i, tabcontent, tablinks;
							tabcontent = document.getElementsByClassName("tabcontent");
								for (i = 0; i < tabcontent.length; i++) {
								tabcontent[i].style.display = "none";
							}
							tablinks = document.getElementsByClassName("tablink");
							for (i = 0; i < tablinks.length; i++) {
							tablinks[i].style.backgroundColor = "";
							}
							document.getElementById(pageName).style.display = "block";
							elmnt.style.backgroundColor = color;
							}

							// Get the element with id="defaultOpen" and click on it
							document.getElementById("defaultOpen").click();



</script>
		</body>
</html> 
