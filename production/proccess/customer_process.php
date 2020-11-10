<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $customer = new Customer();
    $customer->first_name = trim($_POST['first_name']);
    $customer->last_name = trim($_POST['last_name']);
    $customer->email = trim($_POST['email']);
    $customer->address = trim($_POST['address']);
    $customer->city = trim($_POST['city']);
    $customer->state = trim($_POST['state']);
    $customer->zip = trim($_POST['zip']);
    $customer->phone = trim($_POST['phone']);
    $customer->mobile = trim($_POST['mobile']);
    $customer->birthday = trim($_POST['birthday']);
    $customer->married = trim($_POST['married']);
    $customer->birthdate = trim($_POST['birthdate']);
    $customer->name = trim($_POST['name']);
    $customer->anniversary = trim($_POST['anniversary']);
   
    $customer->child = trim($_POST['child']);

    $customer->child_age_1 = trim($_POST['child_age_1']);
    $customer->child_birthdate_1 = trim($_POST['child_birthdate_1']);
    $customer->child_age_2 = trim($_POST['child_age_2']);
    $customer->child_birthdate_2 = trim($_POST['child_birthdate_2']);
    $customer->child_age_3 = trim($_POST['child_age_3']);
    $customer->child_birthdate_3 = trim($_POST['child_birthdate_3']);
    $customer->child_age_4 = trim($_POST['child_age_4']);
    $customer->child_birthdate_4 = trim($_POST['child_birthdate_4']);
    $customer->child_age_5 = trim($_POST['child_age_5']);
    $customer->child_birthdate_5 = trim($_POST['child_birthdate_5']);
    $customer->child_age_6 = trim($_POST['child_age_6']);
    $customer->child_birthdate_6 = trim($_POST['child_birthdate_6']);
    $customer->child_age_7 = trim($_POST['child_age_7']);
    $customer->child_birthdate_7 = trim($_POST['child_birthdate_7']);
    $customer->child_age_8 = trim($_POST['child_age_8']);
    $customer->child_birthdate_8 = trim($_POST['child_birthdate_8']);

    try {
        $customer->save();

        $data = Customer::last_insert_id();

        foreach( Contracted::find_all() as $contracted ){
          $checkid = "contracted".$contracted->id;
          if(isset($_POST[$checkid])){

            $new_data =  new CustomerContracted();
            $new_data->customer_id = $data;
            $new_data->contracted_id  = $contracted->id;
            $new_data->save();

          }
        }

        foreach( ToBeContract::find_all() as $contract ){
          $checkid = "to_be_contract".$contract->id;
          if(isset($_POST[$checkid])){

            $new_data =  new CustomerRegarding();
            $new_data->customer_id = $data;
            $new_data->to_be_contract_id  = $contract->id;
            $new_data->save();

          }
        }


        Activity::log_action("Customer - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../customer_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../customer_management.php");
    }
}

if (isset($_POST['update'])) {
    $customer = Customer::find_by_id($_POST['id']);
    $customer->first_name = trim($_POST['first_name']);
    $customer->last_name = trim($_POST['last_name']);
    $customer->email = trim($_POST['email']);
    $customer->address = trim($_POST['address']);
    $customer->city = trim($_POST['city']);
    $customer->state = trim($_POST['state']);
    $customer->zip = trim($_POST['zip']);
    $customer->phone = trim($_POST['phone']);
    $customer->mobile = trim($_POST['mobile']);
    $customer->birthday = trim($_POST['birthday']);
     $customer->birthdate = trim($_POST['birthdate']);
    $customer->name = trim($_POST['name']);
    $customer->anniversary = trim($_POST['anniversary']);
    $customer->child_age_1 = trim($_POST['child_age_1']);
    $customer->child_birthdate_1 = trim($_POST['child_birthdate_1']);
    $customer->child_age_2 = trim($_POST['child_age_2']);
    $customer->child_birthdate_2 = trim($_POST['child_birthdate_2']);
    $customer->married = trim($_POST['married']);
    $customer->child = trim($_POST['child']);

     $customer->child_age_3 = trim($_POST['child_age_3']);
    $customer->child_birthdate_3 = trim($_POST['child_birthdate_3']);
    $customer->child_age_4 = trim($_POST['child_age_4']);
    $customer->child_birthdate_4 = trim($_POST['child_birthdate_4']);
    $customer->child_age_5 = trim($_POST['child_age_5']);
    $customer->child_birthdate_5 = trim($_POST['child_birthdate_5']);
    $customer->child_age_6 = trim($_POST['child_age_6']);
    $customer->child_birthdate_6 = trim($_POST['child_birthdate_6']);
    $customer->child_age_7 = trim($_POST['child_age_7']);
    $customer->child_birthdate_7 = trim($_POST['child_birthdate_7']);
    $customer->child_age_8 = trim($_POST['child_age_8']);
    $customer->child_birthdate_8 = trim($_POST['child_birthdate_8']);

   
    try {
        $customer->save();

        $data = Customer::last_insert_id();

        foreach( Contracted::find_all() as $contracted ){
          $checkid = "contracted".$contracted->id;
          if(isset($_POST[$checkid])){

            $new_data =  new CustomerContracted();
            $new_data->customer_id = $data;
            $new_data->contracted_id  = $contracted->id;
            $new_data->save();

          }
        }

        foreach( ToBeContract::find_all() as $contract ){
          $checkid = "to_be_contract".$contract->id;
          if(isset($_POST[$checkid])){

            $new_data =  new CustomerRegarding();
            $new_data->customer_id = $data;
            $new_data->to_be_contract_id  = $contract->id;
            $new_data->save();

          }
        }
        
        Activity::log_action("Customer - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../customer_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../customer_management.php");
    }
}


if (isset($_POST['delete'])) {
    $customer = Customer::find_by_id($_POST["id"]);
    
    try {
        $customer->delete();
        Activity::log_action("Customer - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../customer_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../customer_management.php");
    }
}
?>

