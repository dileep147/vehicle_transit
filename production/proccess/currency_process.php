<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $currency = new Currency();
    $currency->name = trim($_POST['name']);
    $currency->symbol = trim($_POST['symbol']);

    try {
        $currency->save();
        Activity::log_action("Currency - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../currency.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../currency.php");
    }
}

if (isset($_POST['update'])) {
    $currency = Currency::find_by_id($_POST['id']);
    $currency->name = trim($_POST['name']);
    $currency->symbol = trim($_POST['symbol']);
   
    try {
        $currency->save();
        Activity::log_action("Currency - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../currency.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../currency.php");
    }
}


if (isset($_POST['delete'])) {
    $currency = Currency::find_by_id($_POST["id"]);
    
    try {
        $currency->delete();
        Activity::log_action("Currency - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../currency.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../currency.php");
    }
}
?>

