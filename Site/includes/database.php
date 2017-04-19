<?php
if (!defined('WERDICHLEGALGERUFEN'))
{
	echo 'You cannot access this file directly!';
	die;
}
require_once ('settings.php');
require_once ('user.php');

class Database
{

	function login()
	{
		$con = mysqli_connect(Settings::get_dbServer(), Settings::get_dbUser(), Settings::get_dbPw(), Settings::get_dbName());
		mysqli_set_charset($con, 'utf8');
        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
		    return $con;
        }
	}

	function closeDB($con)
	{
		mysqli_close($con);
	}


    public function get_userFromUserName($pUserName) {
        $con = $this->login();
        $pUserName = $con->real_escape_string($pUserName);
        $result = mysqli_query($con, 'SELECT * FROM `user` WHERE `UserName` LIKE "' . $pUserName . '";');
        if (mysqli_num_rows($result) > 0){
            $user = new User ();
            while ($row = mysqli_fetch_array($result)){
                $user->set_userName($row['UserName']);
                $user->set_name($row['Name']);
                $user->set_vName($row['VName']);
                $user->set_eMail($row['email']);
                $user->set_PwCn($row['PWCN']);
                $user->set_Type($row['type']);
            }
            $this->closeDB($con);
            return $user;
        }
        else {
            $this->closeDB($con);
            return Null;
        }
    }
}
?>