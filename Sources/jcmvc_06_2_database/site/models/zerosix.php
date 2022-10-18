<?php
defined('_JEXEC') or die();
use Joomla\CMS\MVC\Model\ItemModel;
use Joomla\CMS\Factory;
use Joomla\CMS\Table\Table;

class JcmvcModelZerosix extends ItemModel
{
	protected $message; //string
	
	// $type - table name, optional; $prefix - class prefix, optional; array $config  config array for model, optional.
	public function getTable($type = 'Zerosix', $prefix = 'JcmvcTable', $config = array())
	{
		return Table::getInstance($type, $prefix, $config);
	}
	
	public function getMsg($id = 1)
	{
		if ( !is_array($this->messages) )
		{
			$this->messages = array();
		}
		if ( !isset($this->messages[$id]) )
		{
			// Request the selected id
			$jinput = Factory::getApplication()->input;
			$id     = $jinput->get('id', 1, 'INT');
			// Get a TableHelloWorld instance
			$table = $this->getTable();
			// Load the message
			$table->load($id);
			// Assign the message
			$this->messages[$id] = $table->greeting;
		}
		return $this->messages[$id];
	}


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
		// doing nothing
	}
}
