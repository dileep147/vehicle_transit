<?php
require_once __DIR__.'/../util/initialize.php';

class Transit extends DatabaseObject{
    protected static $table_name="transit";
    public static $db_fields=array(); 
    protected static $db_fk=array("currency"=>"Currency","car_number"=>"Car","customer_id"=>"Customer");
    
    
    public function currency(){
        return parent::get_fk_object("currency");
    }
    public function car_number(){
        return parent::get_fk_object("car_number");
    }
    public function customer_id(){
        return parent::get_fk_object("customer_id");
    }
    
    // public static function find_all_by_memphis_number($value){
    //     global $database;
    //     $value=$database->escape_value($value);
    //     $object_array=self::find_by_sql("SELECT* FROM ".self::$table_name." WHERE memphis_number = '$value' ");
    //     return $object_array;
    // }

    public static function find_name_by_memphis_number($value){
        global $database;
        $value=$database->escape_value($value);
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE memphis_number='$value'");
        return array_shift($object_array);
    }
    

    public static function find_all_by_customer_name($value1){
        global $database;
        $value1=$database->escape_value($value1);
        
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE customer_id = '$value1' ");
        return $object_array;
    }

    public static function find_all_by_date_range($value1,$value2){
        global $database;
        $value1=$database->escape_value($value1);
        $value2=$database->escape_value($value2);
       
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE processing_date BETWEEN '$value1' AND '$value2' ");
        return $object_array;
    }

    public static function find_all_by_status($value1){
        global $database;
        $value1=$database->escape_value($value1);
       
        $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE status = '$value1' ");
        return $object_array;
    }

    // public static function find_by_total($value1,$value2,$value3,$value4,$value5){
    //     global $database;
    //     $value=$database->escape_value($value);
    //     $object_array=self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE total='$value1'+'$value2'+'$value3'+'$value4'+'$value5' ");
    //     return array_shift($object_array);
    // }

}

?>