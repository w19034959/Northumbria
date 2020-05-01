<?php

    require_once('functions.php');
    // Create connection to database
    $db = getConnection();

    // Variables below are declared
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];
	  $permissions = $_POST['permissions'];

    // This will insert the information entered into the form within the database
    $sql = "INSERT INTO TPUsers (email, password, permissions, department, forename, surname, address, phone_number)
    VALUES (?,?,?,?,?,?,?,?)";

    // prepare the values entered into the form for the database to store
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $password, $permissions, $department, $forename, $surname, $address, $phone_number]);
  	header('location:admin.php');

 ?>
