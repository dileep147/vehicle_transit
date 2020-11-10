<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $model = new Model();
    $model->name = trim($_POST['name']);

    try {
        $model->save();
        Activity::log_action("Model - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../model.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../model.php");
    }
}

if (isset($_POST['update'])) {
    $model = Model::find_by_id($_POST['id']);
    $model->name = trim($_POST['name']);
   
    try {
        $model->save();
        Activity::log_action("Model - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../model.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../model.php");
    }
}


if (isset($_POST['delete'])) {
    $model = Model::find_by_id($_POST["id"]);
    
    try {
        $model->delete();
        Activity::log_action("Model - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../model.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../model.php");
    }
}
?>

