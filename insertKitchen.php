<?php 	
		require_once('functions.php');
		$db = getConnection();
//database connection


	$query ="SELECT forename, surname, employee_id FROM TPUsers WHERE department='Kitchen' ORDER BY surname";
	$result = $db->query($query);

	while ($row = $result-> fetchObject()) {
		$ID = $row->employee_id;

		//sets the name of each input by the ID
		$mondayS = "mondayStart$ID";$mondayE = "mondayEnd$ID";
		$tuesdayS = "tuesdayStart$ID";$tuesdayE = "tuesdayEnd$ID";
		$wednesdayS = "wednesdayStart$ID";$wednesdayE = "wednesdayEnd$ID";
		$thursdayS = "thursdayStart$ID";$thursdayE = "thursdayEnd$ID";
		$fridayS = "fridayStart$ID";$fridayE = "fridayEnd$ID";
		$saturdayS = "saturdayStart$ID";$saturdayE = "saturdayEnd$ID";
		$sundayS = "sundayStart$ID";$sundayE = "sundayEnd$ID";
		$isHoliday = "isHoliday$ID";
		
		//checks if holiday box is checked 
		if ($holiday = $_POST[$isHoliday])
		{
			$holiday = 1;
		}
		else {
			$holiday = 0;
		}
		
		//assigns work week 
		$workWeek = $_POST['workWeek'];
		
		//assigns the value posted - start
		$mondayStart = $_POST[$mondayS];$tuesdayStart = $_POST[$tuesdayS];$wednesdayStart = $_POST[$wednesdayS];$thursdayStart = $_POST[$thursdayS];
		$fridayStart = $_POST[$fridayS];$saturdayStart = $_POST[$saturdayS];$sundayStart = $_POST[$sundayS];

		//assigns the value posted - end
		$mondayEnd = $_POST[$mondayE];$tuesdayEnd = $_POST[$tuesdayE];$wednesdayEnd = $_POST[$wednesdayE];$thursdayEnd = $_POST[$thursdayE];
		$fridayEnd = $_POST[$fridayE];$saturdayEnd = $_POST[$saturdayE];$sundayEnd = $_POST[$sundayE];

		$sql = "INSERT INTO TPKitchenRota(workWeek, MondayStart, TuesdayStart, WednesdayStart, ThursdayStart, FridayStart, SaturdayStart, SundayStart, MondayFinish, TuesdayFinish, WednesdayFinish, ThursdayFinish, FridayFinish, SaturdayFinish, SundayFinish, employee_id, isHoliday)
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt= $db->prepare($sql);
		$stmt->execute([$workWeek, $mondayStart, $tuesdayStart, $wednesdayStart, $thursdayStart,$fridayStart,$saturdayStart,$sundayStart,$mondayEnd,$tuesdayEnd,$wednesdayEnd,$thursdayEnd,$fridayEnd,$saturdayEnd,$sundayEnd,$ID,$holiday]);
		header('location:CreateRota.php');
		}








		
?>
				
					
			