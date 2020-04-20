<?php

class Login_Model
{
	public $email_id;
	public $password;

	public function __construct($email_id, $password)
	{
		$this->email=$email_id;
		$this->password=$password;
		Session::init();
	}

	public static function run($email_id,$password)
	{
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db,"SELECT * FROM users WHERE email='$email_id' AND password='$password'");
		$count = $result->num_rows;
		if ($count > 0) {
			return 'login';
		} 
		   else {
			return 'invalid';
			header('location: '.URL);
		}
	}		
}