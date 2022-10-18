<?php
defined('_JEXEC') or die('Restricted access');

class JcmvcViewFirst extends \\Joomla\\CMS\\MVC\\View\\HtmlView
{
	function display($tpl = null)
	{
		// Assign data to the view
		//$this->msg = '<hr />JcmvcViewFirst msg<hr />';
		// Assign data to the view
		$this->msg = $this->get('Msg');
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			\\Joomla\\CMS\\Log\\Log::add("site/views/first: "implode('<br />', $errors), \\Joomla\\CMS\\Log\\Log::WARNING, 'jerror');
			return false;
		}
		// Display the view
		parent::display($tpl);
	}
}
