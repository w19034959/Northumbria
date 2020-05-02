<?php
require_once('functions.php');
		$db = getConnection();


$Name = $_POST['Name'];
$Employee_ID = $_POST['Employee_ID'];
$Department = $_POST['Department'];
$StartingDate = $_POST['StartingDate']; 
$EndingDate = $_POST['EndingDate'];

if (!empty($Name) || !empty($Employee_ID) || !empty($Department) || !empty($StartingDate) || !empty($EndingDate)) {
 

    $host = "localhost";
    $dbUsername = "unn_w19032995";
    $dbPassword = "TeamProject2020";
    $dbname = "unn_w19032995";


 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into TPDayOff5 (Name, Employee_ID, Department, StartingDate, EndingDate) values(?, ?, ?, ?, ?)";


 
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sisss", $Name, $Employee_ID, $Department, $StartingDate, $EndingDate);
      $stmt->execute();
header('location:RDO.php');
 echo "Your holiday request has been succesfully submitted";

     }
     $stmt->close();
     $conn->close();
    }
 else {
 echo "All field are required";
 die();
}
?>