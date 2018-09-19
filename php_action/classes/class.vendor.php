<?php 
require_once 'dbconnect.php';
    /*
     * Save New Vendor
     *
     */
    function register($userID,$firstName,$lastName,$Category,$categoryCode,$phoneNumber,$Email,$ageBracket,$Country,$countryCode,$Gender,$Town,$Status,$xikilaAccount,$bancoAccount,$wantBancoAccount){
        try {
            $db = new Database();
            $db->connect();
            $sql = "insert into registration (userid,firstname,lastname,category,categorycode,phonenumber,email,agebracket,country,countrycode,gender,town,userstatus,xikilaaccount,bancoaccount,wantbancoaccount,creationdate ) ".
            "values (:userID,:firstName,:lastName,:Category,:categoryCode,:phoneNumber,:Email,:ageBracket,:Country,:countryCode,:Gender,:Town,:Status,:xikilaAccount,:bancoAccount,:wantBancoAccount,now())";
            
            $params = array(
            	":userID" => $userID,
            	":firstName" => $firstName,
                ":lastName" => $lastName,
                ":Category" => $Category,
                ":categoryCode" => $categoryCode,
                ":phoneNumber" => $phoneNumber,
                ":Email" => $Email,
                ":ageBracket" => $ageBracket,
                ":Country" => $Country,
                ":countryCode" => $countryCode,
                ":Gender" => $Gender,
                ":Town" => $Town,
                ":Status" => $Status,
                ":xikilaAccount" => $xikilaAccount,
                ":bancoAccount" => $bancoAccount,
                ":wantBancoAccount" => $wantBancoAccount
            );
            $i = $db->runUpdate($sql,$params);
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }        
    }

    /*
     * Returns data list of Vendors
     *
     */
    function getVendors(){
        $datarow = NULL;
        try
        {
            $db = new Database();
            $db->connect();
            
            $sql = "SELECT userid,firstname,lastname,category,categorycode,phonenumber,email,agebracket,country,countrycode,gender,town,userstatus,xikilaaccount,bancoaccount,wantbancoaccount,creationdate FROM registration ".
            "where userstatus=:userstatus";
            $params = array(":userstatus" => 1);
            $results = $db->runSelect($sql,$params);
            
            if ($results != null){
                $datarow = $results;
            }		
        }
        catch(PDOException $ex) {
            echo $ex->getMessage();
        }
        return $datarow;
    }


?>