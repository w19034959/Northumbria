<?php include('functions.php');
$db = getConnection();
 ?>

<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<title>Manager Portal</title>
				<link rel="stylesheet" href="CSS/admin.css">
		</head>
		<body>
                <div class="bg-img">
					<div class="navigation-bar">
							<img id = "logo" img src="Images/logo.jpg">
							<ul>
								<li><a href="ManagerMenu.php" class = "active">Home</a></li>
								<li><a href="CreateRota.php" class = "active">Create Rota</a></li>
								<li><a href="#">Alter Rota</a></li>
								<li><a href="#">Requests</a></li>
								<li><a href="#">Admin</a></li>
								<li><a href="logout.php">Log Out</a></li>
							</ul>
					</div>

    <form action="addstaff.php" method ="post" style="border:1px solid #ccc">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="forename"><b>Forename</b></label>
        <input type="text" placeholder="Enter Forename" name="forename" required>

        <label for="surname"><b>Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="surname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" required>

        <label for="phone_number"><b>Number</b></label>
        <input for="text" placehoder="Enter Number" name="phone_number" required>

        <label for="department">Select Department</label><br>
        <select name="department">
          <option value="Staff">Staff</option>
          <option value="Management">Management</option>
		  <option value="Kitchen">Kitchen</option>
        </select>

		<label for="permissions">Select Permissions</label><br>
        <select name="permissions">
          <option value="Staff">Staff</option>
          <option value="Management">Management</option>
        </select>

        <label><br><br>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me
        </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
  </div>

</form>
		</body>
</html>
