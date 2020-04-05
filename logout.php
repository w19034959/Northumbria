<?php
		session_start();
		
		if(!isset($_SESSION['$authmanage']) || $_SESSION['$authmanage'] != 'authmanager')
		{
			session_destroy();
			echo header('Location: http://unn-w19032995.newnumyspace.co.uk/TeamProject/LandingPage.php');
		}
		else {
			echo header('Location: http://unn-w19032995.newnumyspace.co.uk/TeamProject/LandingPage.php');
		}
		?>
		