<?php 	

require_once 'classes/class.vendor.php';

$valid['success'] = array('success' => true, 'messages' => array());

if($_POST) {	
    
	echo$firstName = $_POST["firstName"];
	echo$lastName = $_POST["firstName"];
	echo$Category = $_POST["Category"];
	echo$categoryCode = $_POST["Category"];
	echo$phoneNumber = $_POST["phoneNumber"];
	echo$Email = $_POST["Email"];
	echo$ageBracket = $_POST["ageBracket"];
	echo$Country = $_POST["Country"];
	echo$countryCode = $_POST["countryCode"];
	echo$Gender = $_POST["Gender"];
	echo$Town = $_POST["Town"];
	echo$stallNumber = $_POST["stallNumber"];
	echo$Status = $_POST["Status"];
	if(!empty($_POST['xikilaAccount'])) {

        $xikilaAccount = $_POST["xikilaAccount"];
        echo $xikilaAccount;
    }
	if(!empty($_POST['wantBancoAccount'])) {

        $wantBancoAccount = $_POST["wantBancoAccount"];
        echo $wantBancoAccount;
    }
	if(!empty($_POST['bancoAccount'])) {

        $bancoAccount = $_POST["bancoAccount"];
        echo $bancoAccount;
    } 
	echo$userID = $categoryCode."."."1".".".$phoneNumber;

	register($userID,$firstName,$lastName,$Category,$categoryCode,$phoneNumber,$Email,$ageBracket,$Country,$countryCode,$Gender,$Town,$Status,$xikilaAccount,$bancoAccount,$wantBancoAccount);

	
	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";	
	echo json_encode($valid);
 
} // /if $_POST

?>	