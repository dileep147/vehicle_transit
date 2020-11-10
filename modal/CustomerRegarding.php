<?php
require_once __DIR__.'/../util/initialize.php';

class CustomerRegarding extends DatabaseObject{
    protected static $table_name="customer_regarding";
    protected static $db_fields=array();
    protected static $db_fk=array("customer_id"=>"Customer","to_be_contract_id"=>"ToBeContract");

    public function customer_id(){
        return parent::get_fk_object("customer_id");
    }

    public function to_be_contract_id(){
        return parent::get_fk_object("to_be_contract_id");
    }
  

    public static function find_all_by_to_be_contract($value){
        global $database;
        $value=$database->escape_value($value);
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE customer_id='$value' ");
        return $object_array;
    }
}

?>
