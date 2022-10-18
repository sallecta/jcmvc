<?php
defined('_JEXEC') or die();
use Joomla\CMS\Table\Table;

class JcmvcTableZerosix extends Table
{
	function __construct(&$db)
	{
		parent::__construct('#__jcmvc', 'id', $db);
	}
}
