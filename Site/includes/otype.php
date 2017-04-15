<?php
if (!defined('WERDICHLEGALGERUFEN'))
{
	echo 'You cannot access this file directly!';
	die;
}

class OType
{
	private $ID = 0;
	private $title;
	private $icon;

	public function __constructor($pID, $pTitle, $pIcon)
	{
		$this->$ID = $pID;
		$this->set_Title($pTitle);
		$this->set_Icon($pIcon);
	}

	public function get_ID()
	{
		return $this->$ID;
	}

	public function get_Title()
	{
		return $this->$title;
	}

	public function set_Title($pTitle)
	{
		$this->$title = $pTitle;
	}

	public function get_Icon()
	{
		return $this->$icon;
	}

	public function set_Icon($pIcon)
	{
		$this->$icon = $pIcon;
	}

}
?>