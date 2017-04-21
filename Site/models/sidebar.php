<?php
    if (!defined('WERDICHLEGALGERUFEN'))
    {
        echo 'You cannot access this file directly!';
        die;
    }
    require_once ('../includes/helper.php');

    class SIDEBAR
    {

        public static function get_Sidebar()
        {
            include ('../language/languages.php');

            //Open Sidebar
            print "            <div class=\"navbar-default sidebar\" role=\"navigation\">\n";
            print "                <div class=\"sidebar-nav navbar-collapse\">\n";
            print "                    <ul class=\"nav\" id=\"side-menu\">\n";

            //Dashboard
            print "                        <li>\n";
            print "                            <a href=\"index.php\"><i class=\"fa fa-dashboard fa-fw\"></i>" . HELPER::get_langString("sidebar.dashboard") . "</a>\n";
            print "                        </li>\n";
            print "                        <li>\n";

            //Changes
            print "                            <a href=\"changes.php\"><i class=\"fa fa-code-fork  fa-fw\"></i>" . HELPER::get_langString("sidebar.changes") . "<span class=\"fa arrow\"></span></a>\n";
            print "                            <ul class=\"nav nav-second-level\">\n";
            print "                                <li>\n";
            print "                                    <a href=\"changes.php\">" . HELPER::get_langString("sidebar.dispChanges") . "</a>\n";
            print "                                </li>\n";
            print "                                <li>\n";
            print "                                    <a href=\"addChange.php\">" . HELPER::get_langString("sidebar.addChanges") . "</a>\n";
            print "                                </li>\n";
            print "                                <li>\n";
            print "                                    <a href=\"changeType.php\">" . HELPER::get_langString("sidebar.changeType") . "</a>\n";
            print "                                </li>\n";
            print "                            </ul>";
            print "                        </li>\n";

            //Systems
            print "                        <li>\n";
            print "                            <a href=\"systems.php\"><i class=\"fa fa fa-server  fa-fw\"></i>" . HELPER::get_langString("sidebar.systems") . "<span class=\"fa arrow\"></span></a>\n";
            print "                            <ul class=\"nav nav-second-level\">\n";
            print "                                <li>\n";
            print "                                    <a href=\"systems.php\">" . HELPER::get_langString("sidebar.dispSystems") . "</a>\n";
            print "                                </li>\n";
            print "                                <li>\n";
            print "                                    <a href=\"objectType.php\">" . HELPER::get_langString("sidebar.objectType") . "</a>\n";
            print "                                </li>\n";
            print "                            </ul>";
            print "                        </li>\n";

            //Templates
            print "                        <li>\n";
            print "                            <a href=\"templates.php\"><i class=\"fa fa fa-file-text  fa-fw\"></i>" . HELPER::get_langString("sidebar.templates") . "</a>\n";
            print "                        </li>\n";

            //Close Sidebar
            print "                    </ul>\n";
            print "                </div>\n";
            print "                <!-- /.sidebar-collapse -->\n";
            print "            </div>\n";
            print "            <!-- /.navbar-static-side -->";
        }
    }
?>