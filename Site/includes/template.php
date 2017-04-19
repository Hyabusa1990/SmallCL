<?php
if (!defined('WERDICHLEGALGERUFEN'))
{
	echo 'You cannot access this file directly!';
	die;
}

class Template
{
	private $ID = 0;
	private $title;
	private $cTitle;
	private $cText;
	private $object;

	public function __constructor($pID, $pTitle, $pCTitle, $pCText, $pObject)
	{
		$this->ID = $pID;
		$this->set_Title($pTitle);
		$this->set_cTitle($pCTitle);
		$this->set_cText($pCText);
		$this->set_Object($pObject);
	}

	public function get_ID()
	{
		return $this->ID;
	}

	public function get_Title()
	{
		return $this->title;
	}

	public function set_Title($pTitle)
	{
		$this->title = $pTitle;
	}

	public function get_cTitle()
	{
		return $this->cTitle;
	}

	public function set_cTitle($pCTitle)
	{
		$this->cTitle = $pCTitle;
	}

	public function get_cText()
	{
		return $this->cText;
	}

	public function set_cText($pCText)
	{
		$this->cText = $pCText;
	}

	public function get_Object()
	{
		return $this->object;
	}

	public function set_Object($cObject)
	{
		$this->object = $cObject;
	}
}
?>