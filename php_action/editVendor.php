<?php 	

require_once 'classes/class.vendor.php';

$valid['success'] = array('success' => true, 'messages' => array());

if($_POST) {	
    
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$Category = $_POST["Category"];
	$categoryCode = $_POST["Category"];
	$phoneNumber = $_POST["phoneNumber"];
	$Email = $_POST["Email"];
	$ageBracket = $_POST["ageBracket"];
	$Country = $_POST["Country"];
	$countryCode = $_POST["countryCode"];
	$Gender = $_POST["Gender"];
	$Town = $_POST["Town"];
	$stallNumber = $_POST["stallNumber"];
	$Status = $_POST["Status"];
	$xikilaAccount = $_POST["xikilaAccount"];
	$wantBancoAccount = $_POST["wantBancoAccount"];
    $bancoAccount = $_POST["bancoAccount"];
    $userID = $categoryCode."."."1".".".$phoneNumber;

	editVendor($userID,$firstName,$lastName,$Category,$categoryCode,$phoneNumber,$Email,$ageBracket,$Country,$countryCode,$Gender,$Town,$Status,$xikilaAccount,$bancoAccount,$wantBancoAccount);

	
	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";	
	echo json_encode($valid);
 
} // /if $_POST