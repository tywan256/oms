<?php 	

require_once 'classes/class.vendor.php';

$vendors = getVendors();

$output = array('data' => array());

if($vendors!="") { 

 $activeVendors = ""; 

 foreach($vendors as $vendor) {
 	$userid = $vendor['userid'];
 	// active 
 	if($vendor['userstatus'] == 1) {
 		// activate member
 		$activeVendors = "<label class='label label-success'>Available</label>";
 	} else {
 		// deactivate member
 		$activeVendors = "<label class='label label-danger'>Not Available</label>";
 	}

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#editBrandModel" onclick="editVendors('.$userid.')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeMemberModal" onclick="removeVendors('.$userid.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  </ul>
	</div>';

 	$output['data'][] = array( 		
 		$vendor['userid'], 
 		$vendor['firstname'],
 		$vendor['lastname'],		
 		$activeVendors,
 		$button
 		); 	
 } // /foreach 

} // if num_rows

echo json_encode($output);