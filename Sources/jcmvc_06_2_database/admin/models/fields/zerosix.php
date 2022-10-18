<?php
defined('_JEXEC') or die('Restricted access');
use Joomla\CMS\Form\FormHelper;
use Joomla\CMS\Form\Field\ListField;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

FormHelper::loadFieldClass('list');

/**
 * Zerosix Form Field class for the Jcmvc component
 *
 * @since  0.0.1
 */
class ZerosixField extends ListField
{

	protected $type = 'zerosix';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = Factory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,greeting');
		$query->from('#__jcmvc');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();

		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = HTMLHelper::_('select.option', $message->id, $message->greeting);
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
