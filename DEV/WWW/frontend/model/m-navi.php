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
        echo "                <div class=\"sidebar-brand-text mx-3\">BarMan</div>\n";
        echo "            </a>\n";
        echo "\n";
        echo "            <!-- Divider -->\n";
        echo "            <hr class=\"sidebar-divider my-0\">\n";
        echo "\n";
        echo "            <!-- Nav Item - Dashboard -->\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"index.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-cocktail\"></i>\n";
        echo "                    <span>Cocktails</span></a>\n";
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
        echo "                <a class=\"nav-link\" href=\"bottle.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-wine-bottle\"></i>\n";
        echo "                    <span>Flaschen verwaltung</span></a>\n";
        echo "            </li>\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"receipt.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-receipt\"></i>\n";
        echo "                    <span>Rezept verwaltung</span></a>\n";
        echo "            </li>\n";
        echo "            <li class=\"nav-item\">\n";
        echo "                <a class=\"nav-link\" href=\"settingsPage.php\">\n";
        echo "                    <i class=\"fas fa-fw fa-sliders-h\"></i>\n";
        echo "                    <span>Einstelungen</span></a>\n";
        echo "            </li>\n";
        echo "\n";
        echo "        </ul>\n";
        echo "        <!-- End of Sidebar -->";
    }
}
?>
