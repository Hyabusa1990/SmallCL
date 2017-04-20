<?php
	if (!defined('WERDICHLEGALGERUFEN'))
	{
		echo 'You cannot access this file directly!';
		die;
	}
	require_once ('../includes/helper.php');

	class TOPBAR
	{

		public static function get_Topbar()
		{
			include ('../language/languages.php');


			print "        <div class=\"navbar-header\">\n";
			print "                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">\n";
			print "                    <span class=\"sr-only\">Toggle navigation</span>\n";
			print "                    <span class=\"icon-bar\"></span>\n";
			print "                    <span class=\"icon-bar\"></span>\n";
			print "                    <span class=\"icon-bar\"></span>\n";
			print "                </button>\n";
			print "                <a class=\"navbar-brand\" href=\"index.php\">" . HELPER::get_langString("topbar.title") . "</a>\n";
			print "            </div>\n";
			print "            <!-- /.navbar-header -->\n";
			print "            <ul class=\"nav navbar-top-links navbar-right\">\n";
			print "                <li class=\"dropdown\">\n";
			print "                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\n";
			print "                        <i class=\"fa fa-language fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>\n";
			print "                    </a>\n";
			print "                    <ul class=\"dropdown-menu dropdown-user\">\n";
			foreach ($langs as $lang)
			{
				print "                        <li><a href=\"?lang=" . $lang['key'] . "\"></i>" . $lang['name'] . "</a>\n";
				print "                        </li>\n";
			}
			print "                    </ul>\n";
			print "                    <!-- /.dropdown-user -->\n";
			print "                </li>\n";
			print "                <!-- /.dropdown -->\n";
			print "                <li class=\"dropdown\">\n";
			print "                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\n";
			print "                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>\n";
			print "                    </a>\n";
			print "                    <ul class=\"dropdown-menu dropdown-user\">\n";
			print "                        <li><a href=\"userProfile.php\"><i class=\"fa fa-user fa-fw\"></i>" . HELPER::get_langString('topbar.userProfile') . "</a>\n";
			print "                        </li>\n";
			print "                        <li><a href=\"admin.php\"><i class=\"fa fa-gear fa-fw\"></i>" . HELPER::get_langString('topbar.administration') . "</a>\n";
			print "                        </li>\n";
			print "                        <li class=\"divider\"></li>\n";
			print "                        <li><a href=\"login.php?logout=1\"><i class=\"fa fa-sign-out fa-fw\"></i>" . HELPER::get_langString('topbar.logout') . "</a>\n";
			print "                        </li>\n";
			print "                    </ul>\n";
			print "                    <!-- /.dropdown-user -->\n";
			print "                </li>\n";
			print "                <!-- /.dropdown -->\n";
			print "            </ul>\n";
			print "            <!-- /.navbar-top-links -->";
		}

	}
?>