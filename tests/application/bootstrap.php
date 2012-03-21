<?php

// Define path to application directory
defined('APPLICATION_PATH')
   || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../../application'));

// Define application environment
define('APPLICATION_ENV', 'testing');

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
   realpath(APPLICATION_PATH . '/../library'),
   realpath(APPLICATION_PATH . '/../../../ZendFramework/ZendFramework-1.11.2-minimal/library'),
   get_include_path()
)));


/** Zend_Application */
require_once 'Zend/Application.php';
require_once 'ModelTestCase.php';
// Create application, bootstrap, and run
$application = new Zend_Application(
   APPLICATION_ENV,
   APPLICATION_PATH . '/configs/application.ini'
);
//$application->bootstrap();
clearstatcache();

