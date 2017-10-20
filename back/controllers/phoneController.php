<?php

require_once "controller.php";
require_once 'C:/xampp/htdocs/Phones_DB/back/models/phoneModel.php';
require_once "C:/xampp/htdocs/Phones_DB/back/common/BL.php";

class PhoneController {
    private $tableName='phones_table';

    function Read() {
        $bl = new BL();
        $allPhones = $bl->getAllPhones();
        return $allPhones;
    }

    function Create($phone){
        $bl =new BL();
        $newPhone = new PhoneModel(0, 's8 plus', 1);
        $newPhone=$bl->insertPhones($newPhone);
        return 1;
         
    }
}
?>