<?php
// get values from form 

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

include('functions.php');
$db = getConnection();

$sql = ("SELECT * from TPUsers where email = '$email' and password = '$password' and permissions = '$role'");
$results = $db->query($sql);

$row = $results-> fetchObject(); 

if ($row->email == $email && $row->password == $password && $row->permissions == "Management"){
	echo header('Location: http://unn-w19032995.newnumyspace.co.uk/TeamProject/ManagerMenu.php');
}

else if ($row->email == $email && $row->password == $password && $row->permissions == "Staff"){
	echo header('Location: http://unn-w19032995.newnumyspace.co.uk/TeamProject/StaffMenu.php');
}

else {
	echo header('Location: http://unn-w19032995.newnumyspace.co.uk/TeamProject/LandingPage.php');
}







?>
