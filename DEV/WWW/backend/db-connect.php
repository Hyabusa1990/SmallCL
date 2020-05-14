<?php
    if (!defined("WERDICHLEGALGERUFEN")) {
        echo ("YOU CANNOT DISPLAY THIS FILE DIRECTLY");
        exit();
    }
    require_once "settings.php";

    class CBottle
    {
        public static function get_bottles()
        {
            $pdo = new PDO('mysql:host=' . DBHOST . ';dbname=' .DB, DBUSER, DBPW, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $bottles = array();

            $statement = $pdo->prepare("SELECT * FROM `bottle` ORDER BY `name` ASC;");
            $statement->execute();
            while($row = $statement->fetch()) {
                $bottles[] = $row;
            }
            return $bottles;
        }
    }
?>