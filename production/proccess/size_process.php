<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $size = new Size();
    $size->name = trim($_POST['name']);

    try {
        $size->save();
        Activity::log_action("Size - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../size.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../size.php");
    }
}

if (isset($_POST['update'])) {
    $size = Size::find_by_id($_POST['id']);
    $size->name = trim($_POST['name']);
   
    try {
        $size->save();
        Activity::log_action("Size - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../size.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../size.php");
    }
}


if (isset($_POST['delete'])) {
    $size = Size::find_by_id($_POST["id"]);
    
    try {
        $size->delete();
        Activity::log_action("Size - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../size.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../size.php");
    }
}
?>

