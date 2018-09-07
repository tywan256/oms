<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$supplierName = $_POST['editSupplierName'];
	$supplierType = $_POST['editSupplierType'];
	$supplierContact = $_POST['editSupplierContact'];
	$supplierLocation = $_POST['editSupplierLocation'];
	$supplierCity = $_POST['editSupplierCity'];
  	$supplierStatus = $_POST['editSupplierStatus']; 
  	$supplierId = $_POST['supplierId'];

	$sql = "UPDATE suppliers SET supplier_name = '$supplierName', supplier_active = '$supplierStatus', supplier_type = '$supplierType', supplier_contact = '$supplierContact', supplier_location = '$supplierLocation', supplier_city = '$supplierCity' WHERE supplier_id = '$supplierId'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
	$connect->close();

	echo json_encode($valid);

	header('location: /oms/oms/supplier.php');	
 
} // /if $_POST