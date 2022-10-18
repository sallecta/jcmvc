<?php
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\MVC\View\HtmlView;
use Joomla\CMS\Log\Log;

class JcmvcViewZerosix extends HtmlView
{
	function display($tpl = null)
	{
		//Get data from a registered model
		/*
		 * $this->get('argumentmethodName', 'argumentmodelName'')
		 * Calls method "get<capital A>rgumentmethodName" in model argumentmodelName.
		 * If argumentmodelName is null, then system tries to call modelname same as this view name.
		 */ 
		$this->msg = $this->get('item');
		// Check for errors.
		if ( !empty ( $this->get('Errors') ) )
		{	
			Log::add(implode('<br />', $errors), Log::WARNING, 'jerror');
			return false;
		}
		// Display the view
		parent::display($tpl);
	}
}
