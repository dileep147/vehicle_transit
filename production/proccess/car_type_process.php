<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $type = new CarType();
    $type->name = trim($_POST['name']);

    try {
        $type->save();
        Activity::log_action("CarType - saved : ".$type->name);
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../car_type.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../car_type.php");
    }
}

if (isset($_POST['update'])) {
    $type = CarType::find_by_id($_POST['id']);
    $type->name = trim($_POST['name']);
   
    try {
        $type->save();
        Activity::log_action("CarType - updated : ".$type->name);
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../car_type.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../car_type.php");
    }
}


if (isset($_POST['delete'])) {
    $type = CarType::find_by_id($_POST["id"]);
    
    try {
        $type->delete();
        Activity::log_action("CarType - deleted : ".$type->name);
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../car_type.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../car_type.php");
    }
}
?>

