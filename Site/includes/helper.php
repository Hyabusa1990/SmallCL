<?php
	if (!defined('WERDICHLEGALGERUFEN'))
	{
		echo 'You cannot access this file directly!';
		die;
	}

	class HELPER
	{

		private static function include_language()
		{
			if (!isset($_SESSION))
			{
				session_start();
			}

			$lang = "en";
			if (isset($_SESSION['SmallCLLanguage']))
			{
				include ("../language/" . $_SESSION['SmallCLLanguage'] . "/lang." . $_SESSION['SmallCLLanguage'] . ".php");
			}
			else
			{
				$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
				if (file_exists("../language/" . $lang . "/lang." . $lang . ".php"))
				{
					include ("../language/" . $lang . "/lang." . $lang . ".php");
				}
				else
				{
					include ("../language/en/lang.en.php");
				}
			}
			return $lang;
		}

		public static function get_langString($pKey)
		{
			$lang = SELF::include_language();
			return utf8_encode($lang[$pKey]);
		}

		public static function set_language($pLangKey)
		{
			if (!isset($_SESSION))
			{
				session_start();
			}
			if (file_exists("../language/" . $pLangKey . "/lang." . $pLangKey . ".php"))
			{
				$_SESSION['SmallCLLanguage'] = $pLangKey;
			}
		}

	}

?>