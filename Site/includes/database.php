<?php
if (!defined('WERDICHLEGALGERUFEN'))
{
	echo 'You cannot access this file directly!';
	die;
}
require_once ('settings.php');

class Database
{

	function login()
	{
		$con = mysqli_connect(Settings::get_dbServer(), Settings::get_dbUser(), Settings::
		get_dbPw());
		mysqli_select_db($con, Settings::get_dbName());
		mysqli_set_charset($con, 'utf8');
		return $con;
	}

	function closeDB($con)
	{
		mysqli_close($con);
	}

}
?>