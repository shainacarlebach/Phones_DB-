<?php

require_once 'controller.php';
require_once '../common/BL.php';

class ManufacturerController extends Controller{
    private $tableName='manu_table';
    private $conn;

function __construct(){
    $this->conn= newBL;
}
//select all from phonesTable and inner join phone and namu_phones table

function getAllManufacturer(){
    $manufacturer=array();
    $manufacturer->getData();

    return $manufacturer;
    }

}
?>