<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$supplierName = $_POST['supplierName'];
	$supplierType = $_POST['supplierType'];
	$supplierContact = $_POST['supplierContact'];
	$supplierLocation = $_POST['supplierLocation'];
	$supplierCity = $_POST['supplierCity'];
    $supplierStatus = $_POST['supplierStatus']; 

	$sql = "INSERT INTO suppliers (supplier_name, supplier_active, supplier_status, supplier_type, supplier_contact, supplier_location, supplier_city) VALUES ('$supplierName', '$supplierStatus', 1, '$supplierType', '$supplierContact', '$supplierLocation', '$supplierCity')";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);

	header('location: /oms/oms/supplier.php');	
 
} // /if $_POST