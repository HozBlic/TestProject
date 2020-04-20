<?php

class Login {
	//Function to sign in user
	function run()
	{
		$email_id=$_POST['txt_email'];
		$password=$_POST['txt_password'];
		//checks if user is in database, email and password have to match
		$result=Login_Model::run($email_id,$password);
		if ( $result=='login'){
			session_start();
			$_SESSION['email'] = $_POST['txt_email'];
			echo "<script> window.location.href='index.php?controller=loggedin&action=index'; </script>";
		} else {
		echo "<script>
		alert('Your login attempt was not successful. Please try again.');
		window.location.href='index';
		</script>";
		}
	}
	//Function to log out user
	function logout()
	{
		session_start();
		session_destroy();
		header('location: index');
		exit;
	}
}