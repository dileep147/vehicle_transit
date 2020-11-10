<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $student = new Student();
    $student->name = trim($_POST['name']);
    $student->address = trim($_POST['address']);
    $student->age = trim($_POST['age']);

    try {
        $student->save();
        Activity::log_action("Student - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../student.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../student.php");
    }
}

if (isset($_POST['update'])) {
    $student = Student::find_by_id($_POST['id']);
    $student->name = trim($_POST['name']);
    $student->address = trim($_POST['address']);
    $student->age = trim($_POST['age']);
   
    try {
        $student->save();
        Activity::log_action("Student - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../student_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../student_management.php");
    }
}


if (isset($_POST['delete'])) {
    $student = Student::find_by_id($_POST["id"]);
    
    try {
        $student->delete();
        Activity::log_action("Student - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../student_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../student_management.php");
    }
}
?>

