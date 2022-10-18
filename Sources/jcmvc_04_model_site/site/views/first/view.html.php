<?php
defined('_JEXEC') or die('Restricted access');

class JcmvcViewFirst extends JViewLegacy
{
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = '<hr />JcmvcViewFirst msg<hr />';

		// Display the view
		parent::display($tpl);
	}
}
