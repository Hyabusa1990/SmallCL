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
        $this->set_userName($pUserName);
        $this->set_name($pName);
        $this->set_vName($pVName);
        $this->set_eMail($pEMail);
        $this->set_PwCn($pPwCn);
        $this->set_Type($pType);
    }
    
    public function get_userName() {
        return $this->$userName;
    }
    
    public function set_userName ($pUserName) {
        $this->$userName = $pUserName;
    }
    
    public function get_name() {
        return $this->$name;
    }
    
    public function set_name ($pName) {
        $this->$name = $pName;
    }
    
    public function get_vName() {
        return $this->$vName;
    }
    
    public function set_vName ($pVName) {
        $this->$vName = $pVName;
    }
    
    public function get_eMail () {
        return $this->$eMail;
    }
    
    public function set_eMail ($pEMail) {
        if (filter_var($pEMail, FILTER_VALIDATE_EMAIL)) {
            $this->$eMail = $pEMail;
        }
        else {
            throw new Exception ("This E-Mail Adress is invalid!");
        }
    }
    
    public function get_PwCn () {
        return $this->$pwCn;
    }
    
    public function set_PwCn ($pPwCn) {
        $this->$pwCn = $pPwCn;
    }
    
    public function get_Type () {
        return $this->$type;
    }
    
    public function set_Type ($pType) {
        if ($pType == 1 || $pType == 2){
            $this->$type = $pType;
        }
        else {
            throw new Exeption('Wrong type!');
        }
    }
    
    public function set_plainPw ($pPlainPw) {
        $this->$pwCn = password_hash($pPlainPw, PASSWORD_DEFAULT);
    }
    
    public function check_password ($pPlainPw) {
        return password_verify($pPlainPw, $this->$pwCn);
    }
    
    
}
?>