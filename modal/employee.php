<?php
require_once __DIR__.'/../util/initialize.php';

class Employee extends DatabaseObject{
    protected static $table_name="employee";
    protected static $db_fields=array(); 
    protected static $db_fk=array();
    
//    public $id;
//    public $name;
}

?>