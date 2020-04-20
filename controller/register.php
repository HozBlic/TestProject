<?php
class Register
{
	function index (){
		require_once("view/startpage.php");
	}

	//Function to sign up user
	function signup(){
		$user_name=$_POST['txt_name'];
		$email_id=$_POST['txt_email'];
		$password=$_POST['txt_password'];

		//checks if user is already in database, email has to be different for every user
		//returns count of rows with identical email
		$count=Register_Model::check_user($email_id);
		//if the count is larger than 0, user already exsists, user is redirected to start page
		if($count > 0){
			echo "<script>
					alert('This user already exists');
					window.location.href='index';
				</script>";
		}
		//otherwise information is added to database, user is redirected to start page
		else{
			Register_Model::insert_user($user_name, $email_id, $password);
			echo "<script>
					alert('Successfully registered, please log in');
					window.location.href='index';
				 </script>";	
		}
	}
}
?>