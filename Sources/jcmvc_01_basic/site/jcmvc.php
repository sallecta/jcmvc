<?php 
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;
?>
<?php
$jcmvc_url_admin = Uri::root().'administrator/index.php?option=com_jcmvc';
?>
<hr />
<h1>site/jcmvc.php</h1>
<p>Link to the admin part of the component: <a href="<?php echo $jcmvc_url_admin ;?>" target="_blank">admin/jcmvc.php</a></p>
<hr />
