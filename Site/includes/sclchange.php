<?php
if (!defined('WERDICHLEGALGERUFEN')) {
    echo 'You cannot access this file directly!';
    die;
}

class SclChange {
    private $id;
    private $timestamp;
    private $title;
    private $text;
    private $user;
    private $object;
    private $cType;
    
    public function __constructor($pId, $pTimestamp, $pTitle, $pText, $pUser, $pObject, $pCType) {
        $this->id = $pId;
        $this->set_timestamp($pTimestamp);
        $this->set_title($pTitle);
        $this->set_text($pText);
        $this->set_user($pUser);
        $this->set_object($pObject);
        $this->set_cType($pCType);
    }

    public function get_id (){
        return $this->id;
    }

    public function get_timestamp () {
        return $this->timestamp;
    }

    public function set_timestamp ($pTimestamp) {
        $this->timestamp = $pTimestamp;
    }

    public function get_title () {
        return $this->title;
    }

    public function set_title ($pTitle) {
        $this->title = $pTitle;
    }

    public function get_text () {
        return $this->text;
    }

    public function set_text ($pText) {
        $this->text = $pText;
    }

    public function get_user () {
        return $this->user;
    }

    public function set_user ($pUser) {
        $this->user = $pUser;
    }

    public function get_object () {
        return $this->object;
    }

    public function set_object ($pObject) {
        $this->object = $pObject;
    }

    public function get_cType () {
        return $this->cType;
    }

    public function set_cType ($pCType) {
        $this->cType = $pCType;
    }

}
?>