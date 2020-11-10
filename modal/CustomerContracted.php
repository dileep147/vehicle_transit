<?php
require_once __DIR__.'/../util/initialize.php';

class CustomerContracted extends DatabaseObject{
    protected static $table_name="customer_contracted";
    protected static $db_fields=array();
    protected static $db_fk=array("customer_id"=>"Customer","contracted_id"=>"Contracted");

    public function customer_id(){
        return parent::get_fk_object("customer_id");
    }

    public function contracted_id(){
        return parent::get_fk_object("contracted_id");
    }
  

    public static function find_all_by_contracted($value){
        global $database;
        $value=$database->escape_value($value);
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE customer_id='$value' ");
        return $object_array;
    }
}

?>
