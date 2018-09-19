<?php 

session_start();

require_once 'classes/dbconnect.php';

// echo $_SESSION['userId'];

if(!$_SESSION['userid']) {
	header('location: http://localhost/erp/erp/index.php');	
} 



?>