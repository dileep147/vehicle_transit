<?php
require_once __DIR__.'/../util/initialize.php';

class Payment extends DatabaseObject{
    protected static $table_name="payment";
    public static $db_fields=array(); 
    protected static $db_fk=array("transit_id"=>"Transit","customer_id"=>"Customer");
    
    
    public function transit_id(){
        return parent::get_fk_object("transit_id");
    }
    
    public function customer_id(){
        return parent::get_fk_object("customer_id");
    }
    public static function find_by_username($value){
        global $database;
        $value=$database->escape_value($value);
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE username='$value'");
        return array_shift($object_array);
    }

    public static function find_by_transit_id($value){
        global $database;
        $value=$database->escape_value($value);
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE transit_id='$value'");
        return $object_array;
    }

    
}

?>