<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $expences = new Expences();
   
    $expences->category = trim($_POST['category']);
    $expences->amount = trim($_POST['amount']);
    $expences->discription = trim($_POST['discription']);
    $expences->system_date = date("Y-m-d H:i:s");
    $expences->expences_date = trim($_POST['expences_date']);
    

    if($_POST['car_number'] == 0){
         $expences->car_number=Null;
    }
    else{
        $expences->car_number = trim($_POST['car_number']);
    }


    try {
        $expences->save();
        Activity::log_action("Expences - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../expences.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../expences.php");
    }
}

if (isset($_POST['update'])) {
    $expences = Expences::find_by_id($_POST['id']);
    $expences->category = trim($_POST['category']);
    $expences->amount = trim($_POST['amount']);
    $expences->discription = trim($_POST['discription']);
    $expences->system_date = date("Y-m-d H:i:s");
    $expences->expences_date = trim($_POST['expences_date']);
     $expences->car_number = trim($_POST['car_number']);
   
    try {
        $expences->save();
        Activity::log_action("Expences - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../expences.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../expences.php");
    }
}


if (isset($_POST['delete'])) {
    $expences = Expences::find_by_id($_POST["id"]);
    
    try {
        $expences->delete();
        Activity::log_action("Expences - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../expences.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../expences.php");
    }
}
?>

