<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $gate = new Gate();
    $gate->name = trim($_POST['name']);

    try {
        $gate->save();
        Activity::log_action("Gate - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../gate_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../gate_management.php");
    }
}

if (isset($_POST['update'])) {
    $gate = Gate::find_by_id($_POST['id']);
    $gate->name = trim($_POST['name']);
   
    try {
        $gate->save();
        Activity::log_action("Gate - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../gate_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../gate_management.php");
    }
}


if (isset($_POST['delete'])) {
    $gate = Gate::find_by_id($_POST["id"]);
    
    try {
        $gate->delete();
        Activity::log_action("Gate - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../gate_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../gate_management.php");
    }
}
?>

