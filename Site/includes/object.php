<?php
if (!defined('WERDICHLEGALGERUFEN')) {
    echo 'You cannot access this file directly!';
    die;
}
class Object {
    private $id = 0;
    private $title;
    private $oType;
    
    public function __constructor ($pId, $pTitle, $pOType){
        $this->$id = $pId;
        $this->set_title($pTitle);
        $this->set_oType($pOType);
    }
    
    public function get_id () {
        return $this->$id;
    }
    
    public function get_title () {
        return $this->$title;
    }
    
    public function set_title ($pTitle) {
        $this->$title = $pTitle;
    }
    
    public function get_oType () {
        return $this->$oType;
    }
    
    public function set_oType ($pOType) {
        $this->$oType = $pOType;
    }
}

	
?>