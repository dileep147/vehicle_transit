<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $contract = new Contracted();
    $contract->name = trim($_POST['name']);

    try {
        $contract->save();
        Activity::log_action("Contracted - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../contracted_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../contracted_management.php");
    }
}

if (isset($_POST['update'])) {
    $contract = Contracted::find_by_id($_POST['id']);
    $contract->name = trim($_POST['name']);
   
    try {
        $contract->save();
        Activity::log_action("Contracted - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../contracted_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../contracted_management.php");
    }
}


if (isset($_POST['delete'])) {
    $contract = Contracted::find_by_id($_POST["id"]);
    
    try {
        $contract->delete();
        Activity::log_action("Contracted - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../contracted_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../contracted_management.php");
    }
}
?>

