<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';

if (!(isset($_POST["id"]) && $expences = Expences::find_by_id($_POST["id"]))) {
    $expences = new Expences();
}
?>

<!--page content--> 
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Expences</h3>
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
                        <h2 id="title"><?php echo (empty($expences->id)) ? 'Add' : 'Edit'; ?> Expences</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="formRole" action="proccess/expences_process.php" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" >
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="hidden" class="form-control" id="txtId" name="id" value="<?php echo $expences->id; ?>" />                               

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Category</label>
                                    <select class="form-control" id="txtName" name="category" required="">
                                        <option disabled="" selected="">Select Expences Category</option>
                                        <?php
                                        foreach (ExpencesCategory::find_all() as $data) {
                                            if ($data->id == $expences->category) {
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
                                    <label>Car Number</label>
                                    <select class="form-control" id="txtName" name="car_number" required="" value="0">
                                        <option disabled="" selected="">None</option>
                                        <?php
                                        foreach (Car::find_all() as $data) {
                                            if ($data->id == $expences->car_number) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->car_number; ?></option>
                                                <?php
                                            } 
                                            else { 
                                                ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->car_number; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>                    

                                <div class="form-group col-md-4 col-sm-4 col-xs-4 ">
                                    <label>Expences Date</label>
                                    <input type="date" class="form-control" placeholder="Expences Date" id="txtName" name="expences_date" value="<?php echo $expences->expences_date; ?>" >
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" placeholder="Amount" id="txtid" name="amount" value="<?php echo $expences->amount; ?>" required="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <label>System Date:</label>
                                        <input type="text" class="form-control" placeholder="System Date" name="system_date" value="<?php echo date("Y-m-d H:i:s");   ?>" required="" disabled>

                                </div>

                                

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>Discription</label>
                                    <textarea class="form-control" placeholder="Discription" id="txaAddress" name="discription"><?php echo $expences->discription; ?></textarea>
                                </div>
                
                                
                                <div class="modal-footer col-md-12 col-sm-12 col-xs-12">
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <!--<button id="btnSave" type="submit" name="save" class="btn btn-block btn-success" onclick="return validateForm()"><i class="fa fa-floppy-o"></i> Save</button>-->
                                        <button id="btnSave" type="button" name="save" class="btn btn-block btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12" style="display: <?php echo (empty($expences->id)) ? 'none' : 'initial'; ?>">
                                        <!--<button id="btnDelete" type="submit" name="delete" class="btn btn-block btn-danger" onclick="return confirmDelete(this);"><i class="fa fa-trash"></i> Delete</button>-->
                                        <button id="btnDelete" type="button" name="delete" class="btn btn-block btn-danger" ><i class="fa fa-trash"></i> Delete</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <a href="expences.php"><button type="button" name="reset" class="btn btn-block btn-primary"><i class="fa fa-history"></i> Reset</button></a>
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
        var id = <?php echo ($expences->id) ? 1 : 0; ?>;
        
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
