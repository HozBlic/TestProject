<?php
class Register_Model
{
	public $user_name;
	public $email_id;
	public $password;
	public $count;

	public function __construct($user_name, $email_id, $password)
	{
		$this->name=$user_name;
		$this->email=$email_id;
		$this->password=$password;
	}

	public static function check_user($email_id)
	{
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db,"SELECT * FROM users WHERE email='$email_id'");
		$count = $result->num_rows;
		return $count;
	}
	public static function insert_user($user_name, $email_id, $password)
	{
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db,"Insert into users (name,email,password) Values ( '$user_name','$email_id','$password')");
	    $id=mysqli_insert_id($db);
	    return new Register_Model($user_name, $email_id, $password);	
	}
}
?>