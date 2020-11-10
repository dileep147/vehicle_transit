<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $color = new Color();
    $color->name = trim($_POST['name']);

    try {
        $color->save();
        Activity::log_action("Color - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../color.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../color.php");
    }
}

if (isset($_POST['update'])) {
    $color = Color::find_by_id($_POST['id']);
    $color->name = trim($_POST['name']);
   
    try {
        $color->save();
        Activity::log_action("Color - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../color.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../color.php");
    }
}


if (isset($_POST['delete'])) {
    $color = Color::find_by_id($_POST["id"]);
    
    try {
        $color->delete();
        Activity::log_action("Color - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../color.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../color.php");
    }
}
?>

