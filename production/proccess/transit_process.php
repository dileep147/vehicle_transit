<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $transit = new Transit();
    // $payment=new Payment();

    $transit->car_number = trim($_POST['car_number']);
    $transit->customer_id = trim($_POST['customer_id']);
    $transit->currency = trim($_POST['currency']);
    $transit->fees = trim($_POST['fees']);
    $transit->transit_fee = trim($_POST['transit_fee']);
    $transit->temporary_number = trim($_POST['temporary_number']);
    $transit->extra_expences = trim($_POST['extra_expences']);
    $transit->processing_date = trim($_POST['processing_date']);
    $transit->memphis_number = trim($_POST['memphis_number']);
    $transit->car_custom = trim($_POST['car_custom']);   
    $transit->customer_charges = trim($_POST['customer_charges']);
    $transit->total = $_POST['fees']+$_POST['transit_fee']+$_POST['extra_expences']+$_POST['customer_charges']+$_POST['car_custom'];
    $transit->top_history = trim($_POST['top_history']);
    $transit->bottom_history_1 = trim($_POST['bottom_history_1']);
    $transit->bottom_history_2 = trim($_POST['bottom_history_2']);
    $transit->invoice_value = trim($_POST['invoice_value']);
    $transit->iqd_value = trim($_POST['iqd_value']);
    $transit->received = trim($_POST['received']);
    $transit->note = trim($_POST['note']);
     $transit->received_amount = trim($_POST['received_amount']);
     $transit->payment=trim($_POST['received_amount']);
     //print_r($transit);
    
    if(!empty(Transit::find_name_by_memphis_number($transit->memphis_number)->memphis_number)){
        $_SESSION["error"] = "Oops! Memphis Number Already In The Database";
        Functions::redirect_to("../transit.php");
        // echo "done";
    } 

    //status

    if($transit->invoice_value <=  $transit->received_amount ){
        $transit->status=1;
    }
    else{
        $transit->status=0;
    }

    
    
   // transit process expences
    $transit_expences = new Expences();

    $transit_expences->category = 1;
    $transit_expences->amount = $transit->total;
    $transit_expences->discription="Transit Amount";
    $transit_expences->system_date=$transit->processing_date;
    $transit_expences->expences_date=$transit->processing_date;
    $transit_expences->car_number=$transit->car_number;
    
    try {
        $transit->save();
         $transit_expences->save();

         $transit_id = Transit::last_insert_id();
         $payment = new Payment();
        $payment->transit_id = $transit_id;
        $payment->customer_id = trim($_POST['customer_id']);
        $payment->amount = trim($_POST['received_amount']);
        $payment->system_date = date("Y-m-d H:i:s");
        $payment->save();

        Activity::log_action("Transit - saved : ");
        $_SESSION["message"] = "Successfully saved.";
       Functions::redirect_to("../transit_management.php");
    } catch (Exception $exc) {
        echo $exc;
        $_SESSION["error"] = "Error..! Failed to save.";
       Functions::redirect_to("../transit_management.php");
    }
}


if (isset($_POST['update'])) {
    $transit = Transit::find_by_id($_POST['id']);
    $transit->car_number = trim($_POST['car_number']);
    $transit->customer_id = trim($_POST['customer_id']);
    $transit->currency = trim($_POST['currency']);
    $transit->fees = trim($_POST['fees']);
    $transit->transit_fee = trim($_POST['transit_fee']);
    $transit->history = trim($_POST['history']);
    $transit->extra_expences = trim($_POST['extra_expences']);
    $transit->processing_date = trim($_POST['processing_date']); 
    $transit->memphis_number = trim($_POST['memphis_number']);
    $transit->car_custom = trim($_POST['car_custom']);
    $transit->customer_charges = trim($_POST['customer_charges']);
    $transit->total = $_POST['fees']+$_POST['transit_fee']+$_POST['extra_expences']+$_POST['customer_charges']+$_POST['car_custom']; 
    $transit->invoice_value = trim($_POST['invoice_value']);
    $transit->iqd_value = trim($_POST['iqd_value']);
    $transit->received = trim($_POST['received']);
     $transit->temporary_number = trim($_POST['temporary_number']);
     $transit->note = trim($_POST['note']);
      // $transit->received_amount = trim($_POST['received_amount']);
   
    try {
        $transit->save();
        Activity::log_action("Transit - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../transit_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../transit_management.php");
    }
}


if (isset($_POST['delete'])) {
    $transit = Transit::find_by_id($_POST["id"]);
    
    try {
        $transit->delete();
        Activity::log_action("Transit - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../transit_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../transit_management.php");
    }
}
?>

