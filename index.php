<?php error_reporting(); ini_set('display_errors', 1);
require './controller/TestController.php';
$testCtrl = new TestController(); 

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'listing-user') {
	$data = $testCtrl->userData();
	echo json_encode($data);
}