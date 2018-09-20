<?php 	

require_once 'classes/class.vendor.php';

$userid = $_GET['userid'];

$vendor = getSelectedVendor($userid);

return $vendor;

echo json_encode($vendor);