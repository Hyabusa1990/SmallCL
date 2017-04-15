<?php
if (!defined('WERDICHLEGALGERUFEN')) {
  echo 'You cannot access this file directly!';
  die;
}

class Settings {
    // --- Database settings ---
    private static $dbServer = 'localhost';
    private static $dbUser = 'root';
    private static $dbPw = '';
    private static $dbName = 'SmartCL';    
    
    public static function get_dbServer() {
        return self::$dbServer;
    }   
    
    public static function get_dbUser() {
        return self::$dbUser;
    } 
    
    public static function get_dbPw() {
        return self::$dbPw;
    } 
    
    public static function get_dbName() {
        return self::$dbName;
    } 
}
?>