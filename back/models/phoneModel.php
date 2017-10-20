<?php
require_once'models.php';
require_once "C:/xampp/htdocs/Phones_DB/back/common/DAL.php";

Class PhoneModel extends Model implements JsonSerializable{
 private $id_phones;
 private $model_phones;
 private $manu_code;
private $image;

 function __construct($id_phones, $model_phones,$manu_code,$image){
 
     $this->tableName ='phones_table';
     $this->id_phones-$id_phones;
     $this->model_phones=$model_phones;
      $this->manu_code=$manu_code; 
      $this->image=$image;
 }

 
public function getID(){
//if(filter_validate_int){
    return $this->id_phones;
//}
}
function getModel(){
    return $this->model_phones;
}
function getCode(){
    return $this->manu_code;
}
 public function getImage(){
        return $this->image;
            }

function jsonSerialize(){
    return[
       "$id_phones"=>$this->getID(),
       "$model_phones"=>$this->getModel(),
       "$manu_code"=>$this->getCode(),
       "image_name"=>$this->getImage()
           ];
}
}
?>