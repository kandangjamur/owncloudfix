<?php


$RUNTIME_NOAPPS = true; //no apps, yet

try {
	
	require_once 'lib/base.php';

	OC::handleRequest();

} catch (Exception $ex) {
	\OCP\Util::logException('index', $ex);

	//show the user a detailed error page
	OC_Response::setStatus(OC_Response::STATUS_INTERNAL_SERVER_ERROR);
	OC_Template::printExceptionErrorPage($ex);
}
