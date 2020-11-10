
<?php
require_once __DIR__.'/../util/initialize.php';

class Customer extends DatabaseObject{
    protected static $table_name="customer";
    protected static $db_fields=array(); 
    protected static $db_fk=array();
    
//    public $id;
//    public $name;
}

?>