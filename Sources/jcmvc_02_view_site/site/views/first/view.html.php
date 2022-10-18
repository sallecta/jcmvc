<?php
defined('_JEXEC') or die('Restricted access');

use \Joomla\CMS\MVC\View\HtmlView;

class JcmvcViewFirst extends HtmlView
{
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = '<hr />JcmvcViewFirst msg<hr />';

		// Display the view
		parent::display($tpl);
	}
}
