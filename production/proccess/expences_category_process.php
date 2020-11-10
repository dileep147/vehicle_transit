<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $category = new ExpencesCategory();
    $category->name = trim($_POST['name']);

    try {
        $category->save();
        Activity::log_action("ExpencesCategory - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../expences_category.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../expences_category.php");
    }
}

if (isset($_POST['update'])) {
    $category = ExpencesCategory::find_by_id($_POST['id']);
    $category->name = trim($_POST['name']);
   
    try {
        $category->save();
        Activity::log_action("ExpencesCategory - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../expences_category.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../expences_category.php");
    }
}


if (isset($_POST['delete'])) {
    $category = ExpencesCategory::find_by_id($_POST["id"]);
    
    try {
        $category->delete();
        Activity::log_action("ExpencesCategory - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../expences_category.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../expences_category.php");
    }
}
?>

