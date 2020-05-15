<?php
if (!defined("WERDICHLEGALGERUFEN")) {
    echo ("YOU CANNOT DISPLAY THIS FILE DIRECTLY");
    exit();
}
class NAVI
{
    public static function GET_NAVI()
    {
        echo "            <!-- Sidebar -->\n";
        echo "        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">\n";
        echo "\n";
        echo "            <!-- Sidebar - Brand -->\n";
        echo "            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.php\">\n";
        echo "                <div class=\"sidebar-brand-icon rotate-n-15\">\n";
        echo "                    <i class=\"fas fa-list-alt\"></i>\n";
        echo "                </div>\n";
        echo "                <div class=\"sidebar-brand-text mx-3\">SmallCL</div>\n";
        echo "            </a>\n";
        echo "\n";
        echo "            <!-- Divider -->\n";
        echo "            <hr class=\"sidebar-divider my-0\">\n";
        echo "\n";
        echo "            <!-- Nav Item - Dashboard -->\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"index.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-file-invoice\"></i>\n";
        echo "                    <span>&Auml;nderungen</span></a>\n";
        echo "            </li>\n";
        echo "\n";
        echo "            <!-- Divider -->\n";
        echo "            <hr class=\"sidebar-divider\">\n";
        echo "\n";
        echo "            <!-- Heading -->\n";
        echo "            <div class=\"sidebar-heading\">\n";
        echo "                Einstellungen\n";
        echo "            </div>\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"objects.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-wine-bottle\"></i>\n";
        echo "                    <span>Ger&auml;te / Verfahren</span></a>\n";
        echo "            </li>\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"otypes.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-receipt\"></i>\n";
        echo "                    <span>Ger&auml;te- / Verfahrensarten</span></a>\n";
        echo "            </li>\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"ctypes.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-sliders-h\"></i>\n";
        echo "                    <span>&Auml;nderungsarten</span></a>\n";
        echo "            </li>\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"templates.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-sliders-h\"></i>\n";
        echo "                    <span>Vorlagen</span></a>\n";
        echo "            </li>\n";
        echo "\n";
        echo "        </ul>\n";
        echo "        <!-- End of Sidebar -->";
    }

    public static function GET_TOPNAVI()
    {
        echo "<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">\n";
        echo "	<!-- Topbar Navbar -->\n";
        echo "	<ul class=\"navbar-nav ml-auto\">\n";
        echo "		<!-- Nav Item - User Information -->\n";
        echo "		<li class=\"nav-item dropdown no-arrow\">\n";
        echo "		  <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
        echo "			<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>\n";
        echo "			<img class=\"img-profile rounded-square\" src=\"/img/user-solid.png\">\n";
        echo "		  </a>\n";
        echo "		  <!-- Dropdown - User Information -->\n";
        echo "		  <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">\n";
        echo "			<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">\n";
        echo "			  <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>\n";
        echo "			  Logout\n";
        echo "			</a>\n";
        echo "		  </div>\n";
        echo "		</li>\n";
        echo "  </ul>\n";
        echo "</nav>";

    }
}
