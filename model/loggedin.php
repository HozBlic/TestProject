<?php
class Loggedin_Model
{
	public $name;
	public $value;
	public $res;
	

	public function __construct($user_name, $email_id, $password)
	{
		$this->name=$user_name;
		$this->email=$email_id;
		$this->password=$password;
	}

	public static function checkiftableexists($res)
	{	
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		//check if table exsists
		if(mysqli_num_rows( mysqli_query($db, "SHOW TABLES LIKE '$res'"))) {
			return true;
		} else {
			return false;
		}
	}
	public static function createtable($res)
	{	
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db, "CREATE TABLE IF NOT EXISTS $res (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
																		attribute VARCHAR(30) NOT NULL,
																		value VARCHAR(30) NOT NULL)");
	}

	public static function checkifdataexists($name,$res)
	{	
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db,"SELECT * FROM $res WHERE attribute='$name'");
		$count = $result->num_rows;
		if($count>0) {
			return true;
		} else {
			return false;
		}
	}
	
	public static function insertdata($name, $value, $res)
	{
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db,"Insert into $res (attribute,value) Values ( '$name','$value')");  	
	}

	public static function getbasicdata($email)
	{
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
		return $result;
	}
	
	public static function getadditionaldata($email)
	{
		$db = Db::getInstance();
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result = mysqli_query($db,"SELECT * FROM $email");
		return $result;
	}
	
}
?>