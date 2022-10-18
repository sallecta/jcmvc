<?php
defined('_JEXEC') or die('Restricted access');
class JcmvcModelFirst extends \\Joomla\\CMS\\MVC\\Model\\ItemModel
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
