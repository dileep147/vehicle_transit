<?php
require_once __DIR__.'/../util/initialize.php';

class Expences extends DatabaseObject{
    protected static $table_name="expences";
    public static $db_fields=array(); 
    protected static $db_fk=array("category"=>"ExpencesCategory","car_number"=>"Car");
    
    
    public function category(){
        return parent::get_fk_object("category");
    }
    public function car_number(){
        return parent::get_fk_object("car_number");
    }
    public static function find_all_by_car_number($value1,$value2,$value3){
        global $database;
        $value1=$database->escape_value($value1);
        $value2=$database->escape_value($value2);
        $value3=$database->escape_value($value3);
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE expences_date BETWEEN '$value1' AND '$value2' AND car_number='$value3' ");
        return $object_array;
    }

    public static function find_all_by_expences_date($value1,$value2){
        global $database;
        $value1=$database->escape_value($value1);
        $value2=$database->escape_value($value2);
        
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE expences_date BETWEEN '$value1' AND '$value2' ");
        return $object_array;
    }
    
}

?>