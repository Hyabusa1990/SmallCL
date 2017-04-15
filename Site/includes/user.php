<?php
if (!defined('WERDICHLEGALGERUFEN')) {
    echo 'You cannot access this file directly!';
    die;
}

class User {
    private $userName;
    private $name;
    private $vName;
    private $eMail;
    private $pwCn;
    private $type;
    
    public function __constructor($pUserName, $pName, $pVName, $pEMail, $pPwCn, $pType) {
        self::set_userName($pUserName);
        self::set_name($pName);
        self::set_vName($pVName);
        self::set_eMail($pEMail);
        self::set_PwCn($pPwCn);
        self::set_Type($pType);
    }
    
    public function get_userName() {
        return self::$userName;
    }
    
    public function set_userName ($pUserName) {
        self::$userName = $pUserName;
    }
    
    public function get_name() {
        return self::$name;
    }
    
    public function set_name ($pName) {
        self::$name = $pName;
    }
    
    public function get_vName() {
        return self::$vName;
    }
    
    public function set_vName ($pVName) {
        self::$vName = $pVName;
    }
    
    public function get_eMail () {
        return self::$eMail;
    }
    
    public function set_eMail ($pEMail) {
        if (filter_var($pEMail, FILTER_VALIDATE_EMAIL)) {
            self::$eMail = $pEMail;
        }
        else {
            throw new Exception ("This E-Mail Adress is invalid!");
        }
    }
    
    public function get_PwCn () {
        return self::$pwCn;
    }
    
    public function set_PwCn ($pPwCn) {
        self::$pwCn = $pPwCn;
    }
    
    public function get_Type () {
        return self::$type;
    }
    
    public function set_Type ($pType) {
        if ($pType == 1 || $pType == 2){
            self::$type = $pType;
        }
        else {
            throw new Exeption('Wrong type!');
        }
    }
    
    public function set_plainPw ($pPlainPw) {
        self::$pwCn = password_hash($pPlainPw, PASSWORD_DEFAULT);
    }
    
    public function check_password ($pPlainPw) {
        return password_verify($pPlainPw, self::$pwCn);
    }
    
    
}
?>