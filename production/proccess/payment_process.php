<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $payment = new Payment();
    $payment->transit_id = trim($_POST['transit_id']);
    $payment->customer_id = trim($_POST['customer_id']);
    $payment->amount = trim($_POST['amount']);
    $payment->transit_id = trim($_POST['transit_id']);
    $payment->system_date = date("Y-m-d H:i:s");

    

    try {
        $payment->save();

        $payment_total=0;
        foreach (Payment::find_by_transit_id($_POST['transit_id']) as $data) {
            $payment_total = $payment_total + $data->amount;
        }
        $transit_data = Transit::find_by_id($_POST['transit_id']);
        // $payment_total = $payment_total + $transit_data->received_amount;

        if($payment_total >= $transit_data->invoice_value){
            $transit_data->status = 1;

        }else{
            $transit_data->status = 0;
        }

          $transit_data->payment = $payment_total;
          $transit_data->received_amount = $payment_total;

         $transit_data->save();

        Activity::log_action("Payment - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../payment_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../payment_management.php");
    }
}

if (isset($_POST['update'])) {
    $payment = Payment::find_by_id($_POST['id']);
    $payment->transit_id = trim($_POST['transit_id']);
    $payment->customer_id = trim($_POST['customer_id']);
    $payment->amount = trim($_POST['amount']);
    $payment->transit_id = trim($_POST['transit_id']);
    $payment->system_date = date("Y-m-d H:i:s");
   
    try {
        $payment->save();


        $payment_total=0;
        foreach (Payment::find_by_transit_id($_POST['transit_id']) as $data) {
            $payment_total = $payment_total + $data->amount;
        }
        $transit_data = Transit::find_by_id($_POST['transit_id']);
        // $payment_total = $payment_total + $transit_data->received_amount;

        if($payment_total >= $transit_data->invoice_value){
            $transit_data->status = 1;

        }else{
            $transit_data->status = 0;
        }
        
          $transit_data->payment = $payment_total;
            $transit_data->received_amount = $payment_total;

         $transit_data->save();


        Activity::log_action("Payment - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../payment_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../payment_management.php");
    }
}


if (isset($_POST['delete'])) {
    $payment = Payment::find_by_id($_POST["id"]);
    
    try {
        $payment->delete();

        $payment_total=0;
        foreach (Payment::find_by_transit_id($_POST['transit_id']) as $data) {
            $payment_total = $payment_total + $data->amount;
        }
        $transit_data = Transit::find_by_id($_POST['transit_id']);
        // $payment_total = $payment_total + $transit_data->received_amount;

        if($payment_total >= $transit_data->invoice_value){
            $transit_data->status = 1;

        }else{
            $transit_data->status = 0;
        }
        
          $transit_data->payment = $payment_total;
            $transit_data->received_amount = $payment_total;
            
         $transit_data->save();

        Activity::log_action("Payment - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../payment_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../payment_management.php");
    }
}
?>

