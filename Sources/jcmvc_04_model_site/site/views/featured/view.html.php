<?php
defined('_JEXEC') or die('Restricted access');

class JcmvcViewfeatured extends JViewLegacy
{
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = '<hr />JcmvcViewfeatured - is the default view. if no view parameter specified, system attempts to search default view, named [featured].<hr />';

		// Display the view
		parent::display($tpl);
	}
}
