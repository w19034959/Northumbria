<?php

  require_once('functions.php');

  // Create connection
$db = getConnection();




// VARIABLES
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];
	$permissions = $_POST['permissions'];

    $sql = "INSERT INTO TPUsers (email, password, permissions, department, forename, surname, address, phone_number)
    VALUES (?,?,?,?,?,?,?,?)";

    //use exec() because no results are returned
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $password, $permissions, $department, $forename, $surname, $address, $phone_number]);
	header('location:admin.php');

 ?>
