<?php 	

require_once 'core.php';

$sql = "SELECT supplier_id, supplier_name, supplier_active, supplier_status, supplier_type, supplier_contact, supplier_location, supplier_city FROM suppliers WHERE supplier_status = 1";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $activeSuppliers = ""; 

 while($row = $result->fetch_array()) {
 	$supplierId = $row[0];
 	// active 
 	if($row[2] == 1) {
 		// activate member
 		$activeSuppliers = "<label class='label label-success'>Available</label>";
 	} else {
 		// deactivate member
 		$activeSuppliers = "<label class='label label-danger'>Not Available</label>";
 	}

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#editBrandModel" onclick="editSuppliers('.$supplierId.')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeMemberModal" onclick="removeSuppliers('.$supplierId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  </ul>
	</div>';

 	$output['data'][] = array( 		
 		$row[1], 
 		$row[5],
 		$row[6],		
 		$activeSuppliers,
 		$button
 		); 	
 } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);