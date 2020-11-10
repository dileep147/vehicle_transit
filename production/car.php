<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';

if (!(isset($_POST["id"]) && $car = Car::find_by_id($_POST["id"]))) {
    $car = new Car();
}
?>

<!--page content--> 
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Car</h3>
            </div>

            <div class="title_right">

            </div>
        </div>

        <div class="clearfix"></div>

        <?php Functions::output_result(); ?>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 id="title"><?php echo (empty($car->id)) ? 'Add' : 'Edit'; ?> Car</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="formRole" action="proccess/car_process.php" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" >
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="hidden" class="form-control" id="txtId" name="id" value="<?php echo $car->id; ?>" />

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Car ID</label>
                                    <input type="text" class="form-control" placeholder="CarID" id="txtCode" name="car_code" value="<?php if(isset($_GET['id'])){echo $car->car_code;}else{ $number = Car::getAutoIncrement(); echo "A-".sprintf('%05d', $number); } ?>" required="">
                                </div>

                               <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Car Number</label>
                                    <input type="text" class="form-control" placeholder="Car Number" id="txtid" name="car_number" value="<?php echo $car->car_number; ?>" required="">
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Car Type</label>
                                    <select class="form-control" id="txtName" name="car_type_id" required="">
                                        <option disabled="" selected="">Select Car Type</option>
                                        <?php
                                        foreach (CarType::find_all() as $data) {
                                            if ($data->id == $car->car_type_id) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            } 
                                            else { 
                                                ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Car Model</label>
                                    <select class="form-control" id="txtName" name="model" required="">
                                        <option disabled="" selected="">Select Car Model</option>
                                        <?php
                                        foreach (Model::find_all() as $data) {
                                            if ($data->id == $car->model) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            } 
                                            else { 
                                                ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Car Color</label>
                                    <select class="form-control" id="txtName" name="color" required="">
                                        <option disabled="" selected="">Select Car Color</option>
                                        <?php
                                        foreach (Color::find_all() as $data) {
                                            if ($data->id == $car->color) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            } 
                                            else {
                                                ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Car Size</label>
                                    <select class="form-control" id="txtName" name="size" required="">
                                        <option disabled="" selected="">Select Car Size</option>
                                        <?php
                                        foreach (Size::find_all() as $data) {
                                            if ($data->id == $car->size) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            } 
                                            else {
                                                ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                             <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Cross Gate</label>
                                    <select class="form-control" id="txtName" name="gate_id" required="">
                                        <option disabled="" selected="">Select Cross Gate</option>
                                        <?php
                                        foreach (Gate::find_all() as $data) {
                                            if ($data->id == $car->gate_id) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            } 
                                            else {
                                                ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                               
                            

                             <div class="form-group col-md-4 col-sm-4 col-xs-4 ">
                                    <label>Exit Date</label>
                                    <input type="date" class="form-control" placeholder="Exit Date" id="txtName" name="exit_date" value="<?php echo $transit->exit_date; ?>" >
                                </div>
                             
                             <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>System Date:</label>
                                        <input type="text" class="form-control" placeholder="System Date" name="system_date" value="<?php echo date("Y-m-d H:i:s");   ?>" required="" disabled>
                                </div>

                              

                            <div class="form-group">
                                
                                  
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Image 1</label>

                                        <input id="inpFile" type="file" name="files_to_upload" />
                                    </div>

                                    
                                   
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Image 2</label>
                                        <input id="inpFile" type="file" name="files_to_upload2" />
                                    </div>

                                    

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Image 3</label>

                                        <input id="inpFile" type="file" name="files_to_upload3" />
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                   
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Image 4</label>
                                        <input id="inpFile" type="file" name="files_to_upload4" />
                                    </div>

                                    
                                   
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Image 5</label>
                                        <input id="inpFile" type="file" name="files_to_upload5" />
                                    </div>
                                   
                            </div>
                                                                
                            </div>

                               

                
                                
                                <div class="modal-footer col-md-12 col-sm-12 col-xs-12">
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <!--<button id="btnSave" type="submit" name="save" class="btn btn-block btn-success" onclick="return validateForm()"><i class="fa fa-floppy-o"></i> Save</button>-->
                                        <button id="btnSave" type="button" name="save" class="btn btn-block btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12" style="display: <?php echo (empty($car->id)) ? 'none' : 'initial'; ?>">
                                        <!--<button id="btnDelete" type="submit" name="delete" class="btn btn-block btn-danger" onclick="return confirmDelete(this);"><i class="fa fa-trash"></i> Delete</button>-->
                                        <button id="btnDelete" type="button" name="delete" class="btn btn-block btn-danger" ><i class="fa fa-trash"></i> Delete</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <a href="car.php"><button type="button" name="reset" class="btn btn-block btn-primary"><i class="fa fa-history"></i> Reset</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/page content--> 
<?php include 'common/bottom_content.php'; ?> bottom content 
<script>
    window.onload = function () {
//        $.alert({
//            type: 'red',
//            title: 'Welcome!',
//            content: 'Mahesh!',
//        });
    };
    
    function getErrors(){
        var errors = new Array();
        var element;
        var element_value;
        
        element=$("#txtName");
        element_value=element.val();
        if ( element_value === "") {
            errors.push("Name - Invalid");
            element.css({"border": "1px solid red"});
        }else{
            element.css({"border": "1px solid #ccc"});
        }

        return errors;
    }

    function validateForm() {
        var errors = getErrors();
        if (errors === undefined || errors.length === 0) {
            return true;
        } else {
            $.alert({
                icon: 'fa fa-exclamation-circle',
                backgroundDismiss: true,
                type: 'red',
                title: 'Validation error!',
                content: errors.join("</br>")
            });
            return false;
        }
    }

    $("#btnSave").click(function () {
        var id = <?php echo ($car->id) ? 1 : 0; ?>;
        
        if (id) {
            if (UserPrivileges.checkPrivilege("proccess/privileges_authenticate.php", "Role", "upd")) {
                FormOperations.confirmSave(validateForm(), "#formRole", id, null);
            }
        } else {
            if (UserPrivileges.checkPrivilege("proccess/privileges_authenticate.php", "Role", "ins")) {
                FormOperations.confirmSave(validateForm(), "#formRole", id, null);
            }
        }
    });

    $("#btnDelete").click(function () {
        
        if (UserPrivileges.checkPrivilege("proccess/privileges_authenticate.php", "Role", "del")) {
            FormOperations.confirmDelete("#formRole");
        }
    });
</script>
