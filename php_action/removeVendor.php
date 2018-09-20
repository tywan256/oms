<?php 	

require_once 'classes/class.vendor.php';


$valid['success'] = array('success' => false, 'messages' => array());

$userid = $_POST['userid'];

if($userid) { 

 removeVendor($userid);

 
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";

 	echo json_encode($valid);
 
} // /if $_POST