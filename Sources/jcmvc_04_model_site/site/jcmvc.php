<?php $jcmvc_url_admin = JURI::root().'administrator/index.php?option=com_jcmvc'; ?>
<?php 
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by Jcmvc
$controller = \\Joomla\\CMS\\MVC\\Controller\\BaseController::getInstance('Jcmvc');

// Perform the Request task
$input = \\Joomla\\CMS\\Factory::getApplication()->input;
$controller->execute($input->getCmd('task')); //if no task given in request, system uses task named 'display' 
// Redirect if set by the controller
$controller->redirect();
?>
<hr />
<?php $jcmvc_url_admin = \\Joomla\\CMS\\Uri\\Uri::root().'administrator/index.php?option=com_jcmvc'; ?>
<h1>site/jcmvc.php</h1>
<p>Link to the admin part of the component: <a href="<?php echo $jcmvc_url_admin ;?>" target="_blank">admin/jcmvc.php</a></p>
<hr />
