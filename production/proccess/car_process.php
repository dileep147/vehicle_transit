<?php

require_once './../../util/initialize.php';

if (isset($_POST['save'])) {
    $car = new Car();
    $car->car_code = trim($_POST['car_code']);
    $car->model = trim($_POST['model']);
    $car->color = trim($_POST['color']);
    $car->size = trim($_POST['size']);
    $car->gate_id = trim($_POST['gate_id']);
    $car->car_number = trim($_POST['car_number']);
    $car->car_type_id = trim($_POST['car_type_id']);
    $car->exit_date = trim($_POST['exit_date']);
    $car->system_date = date("Y-m-d H:i:s");

    if(Car::find_all_by_car_number($car->car_number)){
        $_SESSION["error"] = "Oops! Car Number Already In The Database";
        Functions::redirect_to("../car.php");
    }  

   try {
        if (isset($_FILES["files_to_upload"]["name"]) && !empty($_FILES["files_to_upload"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload"], "./../uploads/users/");
            $car->image = $image_name;
        } else {
//            $car->image = NULL;
        }

        if (isset($_FILES["files_to_upload2"]["name"]) && !empty($_FILES["files_to_upload2"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload2"], "./../uploads/users/");
            $car->image2 = $image_name;
        } else {
//            $car->image = NULL;
        }
    
    if (isset($_FILES["files_to_upload3"]["name"]) && !empty($_FILES["files_to_upload3"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload3"], "./../uploads/users/");
            $car->image3 = $image_name;
        } else {
//            $car->image = NULL;
        }

       
        if (isset($_FILES["files_to_upload4"]["name"]) && !empty($_FILES["files_to_upload4"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload4"], "./../uploads/users/");
            $car->image4 = $image_name;
        } else {
//            $car->image = NULL;
        }

        if (isset($_FILES["files_to_upload5"]["name"]) && !empty($_FILES["files_to_upload5"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload5"], "./../uploads/users/");
            $car->image5 = $image_name;
        } else {
        //          $car->image = NULL;
        }


    
        $car->save();

        Activity::log_action("Car - saved : ");
        $_SESSION["message"] = "Successfully saved.";
        Functions::redirect_to("../car_management.php");
    } catch (Exception $exc) {

        $_SESSION["error"] = "Error..! Failed to save.";
        Functions::redirect_to("../car_management.php");
    }
}

if (isset($_POST['update'])) {
    $car = Car::find_by_id($_POST['id']);
    $car->car_code = trim($_POST['car_code']);
    $car->model = trim($_POST['model']);
    $car->color = trim($_POST['color']);
    $car->size = trim($_POST['size']);
    $car->gate_id = trim($_POST['gate_id']);
    $car->car_custom = trim($_POST['car_custom']);
    $car->system_date = date("Y-m-d H:i:s"); 
     $car->car_number = trim($_POST['car_number']);
     $car->car_type_id = trim($_POST['car_type_id']);
    $car->exit_date = trim($_POST['exit_date']);

    

   
    try {

        if (isset($_FILES["files_to_upload"]["name"]) && !empty($_FILES["files_to_upload"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload"], "./../uploads/users/");
            $car->image = $image_name;
        } else {
//            $car->image = NULL;
        }

        if (isset($_FILES["files_to_upload2"]["name"]) && !empty($_FILES["files_to_upload2"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload2"], "./../uploads/users/");
            $car->image2 = $image_name;
        } else {
//            $car->image = NULL;
        }

        if (isset($_FILES["files_to_upload3"]["name"]) && !empty($_FILES["files_to_upload3"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload3"], "./../uploads/users/");
            $car->image3 = $image_name;
        } else {
//            $car->image = NULL;
        }

       
        if (isset($_FILES["files_to_upload4"]["name"]) && !empty($_FILES["files_to_upload4"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload4"], "./../uploads/users/");
            $car->image4 = $image_name;
        } else {
//            $car->image = NULL;
        }

        if (isset($_FILES["files_to_upload5"]["name"]) && !empty($_FILES["files_to_upload5"]["name"])) {
            $image_upload = new ImageUpload();
            $image_name = $image_upload->upload_image($_FILES["files_to_upload5"], "./../uploads/users/");
            $car->image5 = $image_name;
        } else {
//            $car->image = NULL;
        }
    

        $car->save();
        Activity::log_action("Car - updated : ");
        $_SESSION["message"] = "Successfully updated.";
        Functions::redirect_to("../car_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to update.";
        Functions::redirect_to("../car_management.php");
    }
}


if (isset($_POST['delete'])) {
    $car = Car::find_by_id($_POST["id"]);
    
    try {
        $car->delete();
        Activity::log_action("Car - deleted : ");
        $_SESSION["message"] = "Successfully deleted.";
        Functions::redirect_to("../car_management.php");
    } catch (Exception $exc) {
        $_SESSION["error"] = "Error..! Failed to deleted.";
        Functions::redirect_to("../car_management.php");
    }
}
?>

