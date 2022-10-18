<?php
defined('_JEXEC') or die();
use Joomla\CMS\MVC\Model\ItemModel;

class JcmvcModelFirst extends ItemModel
{
	protected $message; //string
	
	//Return  the message to be displayed to the user.
	/*
	 * Models based on ItemModel must have getItem($pk = null) method to prevent errors:
	 * - Fatal error: Class ComponentnameModelModelname contains 1 abstract method and 
	 *   must therefore be declared abstract or implement the remaining methods 
	 *   (Joomla\CMS\MVC\Model\ItemModelInterface::getItem) in modelname.php on line [n];
	 * 
	 * - Fatal error: Declaration of ComponentnameModelModelname::getItem() must be 
	 *   compatible with Joomla\CMS\MVC\Model\ItemModelInterface::getItem($pk = null) in 
	 *   modelname.php on line [n]
	 */
	public function getItem($pk = null)
	{
		if (!isset($this->message))
		{
			$this->message = '<p><hr/>site/models/first.php->getItem message</p><hr/>';
		}
		return $this->message;
	}
}
