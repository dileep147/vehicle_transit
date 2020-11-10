<?php
require_once __DIR__.'/../util/initialize.php';

class Car extends DatabaseObject{
    protected static $table_name="car";
    public static $db_fields=array(); 
    protected static $db_fk=array("model"=>"Model","color"=>"Color","size"=>"Size","gate_id"=>"Gate","car_type_id"=>"CarType");
    
    
    public function model(){
        return parent::get_fk_object("model");
    }
    
    public function color(){
        return parent::get_fk_object("color");
    }

    public function size(){
        return parent::get_fk_object("size");
    }

    public function gate_id(){
        return parent::get_fk_object("gate_id");
    }
    
    public function car_type_id(){
        return parent::get_fk_object("car_type_id");
    }

    public static function find_all_by_car_number($value){
        global $database;
        $value=$database->escape_value($value);
        $object_array=self::find_by_sql("SELECT* FROM ".self::$table_name." WHERE car_number = '$value' ");
        return $object_array;
    }


}

?>