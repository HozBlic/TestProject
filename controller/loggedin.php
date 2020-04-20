<?php
class Loggedin
{
    function index(){
        //removes symbols from email such as "@" and "."
        session_start();
        $email =  $_SESSION['email'];
        $res = preg_replace("/[^a-zA-Z0-9]/", "", $email);
        //gets user's data from table "users"
        $result = Loggedin_Model::getbasicdata($email);
        //gets user's additional data, if user has ever added additional data
        if(Loggedin_Model::checkiftableexists($res)){
            $result2 = Loggedin_Model::getadditionaldata($res);
		}
        require_once("view/loggedin.php");
	}
	function insertdata(){
        session_start();
        //removes symbols from email such as "@" and "."
		$res = preg_replace("/[^a-zA-Z0-9]/", "",   $_SESSION['email']);
        //checks if table for this user already exsists (if user has ever added additional data)
        $result = Loggedin_Model::checkiftableexists($res);
        //if not, creates new table for user
        if(!$result) Loggedin_Model::createtable($res);
        $message = "Value for this attribute already exsists: ";
        //checks if custom data was inputted
		if(!empty($_POST["custom_name"][0])) {
            foreach($_POST["custom_name"] as $k=>$v) {
                if(!empty($_POST["custom_name"][$k])&&!empty($_POST["custom_value"][$k])){
                    $result = Loggedin_Model::checkifdataexists($_POST["custom_name"][$k], $res);
                    if($result==true) {
                        $message .= $_POST["custom_name"][$k] . " ";
                    } else {
                        Loggedin_Model::insertdata($_POST["custom_name"][$k],$_POST["custom_value"][$k], $res);
                    }
			    }
            }
        }
        //if user is trying to add attribute which already exsists, a message is shown
        if ($message!="Value for this attribute already exsists: "){
            echo "<script>
                var message = '$message';
		        alert(message);
		        window.location.href='index.php?controller=loggedin&action=index';
	            </script>";     
		} else {
			header("location: index.php?controller=loggedin&action=index");
		}
    }
}
?>