<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_helloworld')) 
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// require helper file
JLoader::register('helloworldHelper', dirname(__FILE__) . '/helpers/helloworld.php');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by helloworld
$controller = JControllerLegacy::getInstance('helloworld');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
