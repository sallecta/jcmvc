<?php 
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;
?>
<?php 
$jcmvc_url_site = Uri::root().'index.php?option=com_jcmvc';
$jcmvc_url_view_first = Uri::root().'index.php?option=com_jcmvc&view=first';
$jcmvc_url_view_site_featured = Uri::root().'index.php?option=com_jcmvc&view=featured';
?>
<hr />
<h1>admin/jcmvc.php</h1>
<p>Important! Around version 3.8 the Joomla developers started changing the naming of Joomla classes and where they were stored in the directory structure. Many of the tutorial steps and videos refer to the old naming convention. To find the equivalent new class and where it's stored, look in your libraries/classmap.php file.</p>
<p>Link to the site part of the component with deafault (featured) view: <a href="<?php echo $jcmvc_url_site ;?>" target="_blank">site/jcmvc.php</a></p>
<p>Link to the site's 'First' view: <a href="<?php echo $jcmvc_url_view_first ;?>" target="_blank">site/views/first/view.html.php</a></p>
<p>Direct link to the site's 'featured' (default) view: <a href="<?php echo $jcmvc_url_view_site_featured ;?>" target="_blank">site/views/featured/view.html.php</a></p>
<hr />
