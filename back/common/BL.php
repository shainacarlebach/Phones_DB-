<?php
require_once'DAL.php';
require_once "C:/xampp/htdocs/Phones_DB/back/models/phoneModel.php";

class BL{
  
    function getAllPhones() {
        $phonesArray=array();
          $db = new DAL();

        $allPhones = $db->executeStatement("SELECT * FROM phones_table");

        foreach($allPhones as $row) {
            $phones = new PhoneModel($row['id_phones'], $row['model_phones'],$row['manu_code']);
        array_push($phonesArray,$phones);
        }
        return $phonesArray;
    }

   function insertPhones($phone){
     $newPhones=array();  
     $db=new DAL();

  $newData=$db->executeStatementWithData("INSERT INTO phones_table(model_phones, manu_code)VALUES(:model,:idm)", array(':model'=>$phone->model_phones,':idm'=>$phone->manu_code));

   }
}
?>
