<?php 
require_once 'dbconnect.php';
    /*
     * Save New Vendor
     *
     */
    function register($firstName,$lastName,$Category,$phoneNumber,$Email,$ageBracket,$Country,$countryCode,$Gender,$Town,$Location,$stallNumber,$Status,$xikilaAccount,$bancoAccount,$wantBancoAccount){
  
        try {

            $userID = "V"."."."1".".".$phoneNumber;
            $categoryCode = "V";
            $db = new Database();
            $db->connect();
            $sql = "insert into registration (userid,firstname,lastname,category,categorycode,phonenumber,email,agebracket,country,countrycode,gender,town,location,stallnumber,
            userstatus,xikilaaccount,bancoaccount,wantbancoaccount,creationdate ) 
            values (:userID,:firstName,:lastName,:Category,:categoryCode,:phoneNumber,:Email,:ageBracket,:Country,:countryCode,:Gender,:Town,:Location,:stallNumber,:Status,:xikilaAccount,:bancoAccount,:wantBancoAccount,now())";
            
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
                ":Location" => $Location,
                ":stallNumber" => $stallNumber,
                ":Status" => $Status,
                ":xikilaAccount" => $xikilaAccount,
                ":bancoAccount" => $bancoAccount,
                ":wantBancoAccount" => $wantBancoAccount,
            );
            $i = $db->runUpdate($sql,$params);
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }  

        return "Vendor added Successfully";    
    }


    /*
     * Edit Vendor
     *
     */
    function editVendor($userID,$firstName,$lastName,$Category,$phoneNumber,$Email,$ageBracket,$Country,$countryCode,$Gender,$Town,$Location,$stallNumber,$Status,$xikilaAccount,$bancoAccount,$wantBancoAccount){

        $categoryCode = "V";


        try {
            $db = new Database();
            $db->connect();
            $sql = "UPDATE registration SET firstname=:firstName,lastname=:lastName,category=:Category,categorycode=:categoryCode,phonenumber=:phoneNumber,email=:Email,agebracket=:ageBracket,country=:Country,countrycode=:countryCode,gender=:Gender,town=:Town,location=:Location,stallnumber=:stallNumber,userstatus=:Status,xikilaaccount=:xikilaAccount,bancoaccount=:bancoAccount,wantbancoaccount=:wantBancoAccount WHERE userid=:userID";
            
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
                ":Location" => $Location,
                ":stallNumber" => $stallNumber,
                ":Status" => $Status,
                ":xikilaAccount" => $xikilaAccount,
                ":bancoAccount" => $bancoAccount,
                ":wantBancoAccount" => $wantBancoAccount,
            );
            $i = $db->runUpdate($sql,$params);
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }  

        return "Vendor Successfully Updated";    
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

    /*
     * Returns data list of Vendor
     *
     */
    function getSelectedVendor($userid){
        $datarow = NULL;
        try
        {
            $db = new Database();
            $db->connect();
            
            $sql = "SELECT userid,firstname,lastname,category,categorycode,phonenumber,email,agebracket,country,countrycode,gender,town,location,stallnumber,userstatus,xikilaaccount,bancoaccount,wantbancoaccount,creationdate FROM registration ".
            "where userid=:userid";
            $params = array(":userid" => $userid);
            $results = $db->runSelect($sql,$params);
            
            if ($results != null){
                $datarow = $results[0];
            }       
        }
        catch(PDOException $ex) {
            echo $ex->getMessage();
        }
        return $datarow;
    }


    /*
     * Remove Vendor
     *
     */
    function removeVendor($userid){
        try
        {
            $db = new Database();
            $db->connect();
            
            $sql = "UPDATE registration SET userstatus = 2 WHERE userid= :userid";;
            $params = array(":userid" => $userid);
            $i = $db->runUpdate($sql,$params);
        }
        catch(PDOException $ex) {
            echo $ex->getMessage();
        }

        return "Vendor Successfully Deleted";
    }

?>