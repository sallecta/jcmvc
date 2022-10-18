<?php
defined('_JEXEC') or die('Restricted access');
class JcmvcModelFirst extends JModelItem
{
	protected $message;
	
	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'JcmvcModelFirst message';
		}
		
		return $this->message;
	}
}
