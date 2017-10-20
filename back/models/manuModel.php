<?php
require_once'models.php';
require_once '../common/DAL.php';

class ManufacturerModels extends Model implements JsonSerializable {
  private $id_manu;
  private $name_manu;
 
    function __construct($params){
        $this->tableName ='manu_table';
        if(array_key_exists("id_manu",$params)) $this->setID($params["id_manu"]);
        if(array_key_exists("name_manu",$params)) $this->setName($params["name_manu"]);
    }

    public function setID($id_manu) {
        $this->id_manu=$id_manu;
    }
    public function setName($name_manu) {
        $this->name_manu=$name_manu;
    }
    public function getID($id_manu) {
        if(filter_validate_int) {
            return $this->id_manu;
        }
    }
  public function getName($name_manu) {
            return $this->name_manu;
        }
    
    public function jsonSerialize(){
        return["$id_manu"=>$this->getID(),
        "$name_manu"=>$this->getName()
        ];
    }
}
?>