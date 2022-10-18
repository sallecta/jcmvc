<?php 
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;
?>
<?php
$jcmvc_url_admin = Uri::root().'administrator/index.php?option=com_jcmvc'; 
?>
<?php 
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;
// Get an instance of the controller prefixed by Jcmvc
$controller = BaseController::getInstance('Jcmvc');
// Perform the Request task
$input = Factory::getApplication()->input;
$controller->execute($input->getCmd('task')); //if no task given in request, system uses task named 'display' 
// Redirect if set by the controller
$controller->redirect();
?>
<hr />
<h1>site/jcmvc.php</h1>
<p>Link to the admin part of the component: <a href="<?php echo $jcmvc_url_admin ;?>" target="_blank">admin/jcmvc.php</a></p>
<hr />
