<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';

if (!(isset($_POST["id"]) && $transit = Transit::find_by_id($_POST["id"]))) {
    $transit = new Transit();
}
?>

<!--page content--> 
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Transit</h3>
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
                        <h2 id="title"><?php echo (empty($transit->id)) ? 'Add' : 'Edit'; ?> Transit</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="formRole" action="proccess/transit_process.php" method="post" class="form-horizontal form-label-left" >
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="hidden" class="form-control" id="txtId" name="id" value="<?php echo $transit->id; ?>" />

                               
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Car Number</label>
                                    <select class="form-control" id="txtName" name="car_number" required="">
                                        <option disabled="" selected="">Select Car Number</option>
                                        <?php
                                        foreach (Car::find_all() as $data) {
                                            if ($data->id == $transit->car_number) {
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

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Customer Name</label>
                                    <select class="form-control" id="txtName" name="customer_id" required="">
                                        <option disabled="" selected="">Customer Name</option>
                                        <?php
                                        foreach (Customer::find_all() as $data) {
                                            if ($data->id == $transit->customer_id) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->first_name; ?> <?php echo $data->last_name; ?></option>
                                                <?php
                                            } 
                                            else { 
                                                ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->first_name; ?> <?php echo $data->last_name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Memphis Number </label>
                                    <input type="text" class="form-control" placeholder="Memphis Number" id="txtName" name="memphis_number" value="<?php echo $transit->memphis_number; ?>" required="" >
                                </div>
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Temporary Number </label>
                                    <input type="text" class="form-control" placeholder="Temporary Number" id="txtName" name="temporary_number" value="<?php echo $transit->temporary_number; ?>" required="" >
                                </div>

                                 <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Currency</label>
                                    <select class="form-control" id="txtName" name="currency" required>
                                        <option disabled="" selected="">Select Currency</option>
                                        <?php
                                        foreach (Currency::find_all() as $data) {
                                            if ($data->id == $transit->currency) {
                                                ?>
                                                <option selected="" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            } 
                                            else { 
                                                ?>name
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4 ">
                                    <label>Processing Date</label>
                                    <input type="date" class="form-control" placeholder="Processing Date" id="txtName" name="processing_date" value="<?php echo $transit->processing_date; ?>" >
                                </div>
                                
                                <div class="form-group col-md-4 col-sm-4 col-xs-4 ">
                                    <label>Top History</label>
                                    <input type="date" class="form-control" placeholder="Top History" id="txtName" name="top_history" value="<?php echo $transit->top_history; ?>" >
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4 ">
                                    <label>Bottom History 1</label>
                                    <input type="date" class="form-control" placeholder="Bottom History 1" id="txtName" name="bottom_history_1" value="<?php echo $transit->bottom_history_1; ?>" >
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4 ">
                                    <label>Bottom History 2</label>
                                    <input type="date" class="form-control" placeholder="Processing Date" id="txtName" name="bottom_history_2" value="<?php echo $transit->bottom_history_2; ?>" >
                                </div>


                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <label>Car Fee </label>
                                    <input type="number" class="form-control" placeholder="Car Fee" id="txtName" name="fees" value="<?php echo $transit->fees; ?>" required >
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <label>Vehicle Transit Fee </label>
                                    <input type="number" class="form-control" placeholder="Vehicle Transit Fee" id="txtName" name="transit_fee" value="<?php echo $transit->transit_fee; ?>" required >
                                </div>

                                
 
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Extra Expences </label>
                                    <input type="number" class="form-control" placeholder="Extra Expences" id="txtName" name="extra_expences" value="<?php echo $transit->extra_expences; ?>" required>

                                </div>

                                
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Custom for Car </label>
                                    <input type="number" class="form-control" placeholder="Custom for Car " id="txtid" name="car_custom" value="<?php echo $transit->car_custom; ?>" required>
                                </div>  

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Customer Charges </label>
                                    <input type="number" class="form-control" placeholder="Customer Charges " id="txtid" name="customer_charges" value="<?php echo $transit->customer_charges; ?>" required>
                                </div> 

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Invoice Value </label>
                                    <input type="number" class="form-control" placeholder="Invoice Value" id="txtName" name="invoice_value" value="<?php echo $transit->invoice_value; ?>" required="" >
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>IQD Value </label>
                                    <input type="number" class="form-control" placeholder="IQD Value" id="txtName" name="iqd_value" value="<?php echo $transit->iqd_value; ?>" required="" >
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Received From </label>
                                    <input type="text" class="form-control" placeholder="Received From" id="txtName" name="received" value="<?php echo $transit->received; ?>" required="" >
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Received Amount </label>
                                    <input type="number" class="form-control" placeholder="Received Amount" id="txtName" name="received_amount" value="<?php echo $transit->received_amount; ?>" required="" >
                                </div>

                                <div class="form-group col-md-8 col-sm-8 col-xs-8">
                                    <label>Note</label>
                                    <textarea class="form-control" placeholder="Note" id="txaAddress" name="note"><?php echo $transit->note; ?></textarea>
                                </div>                                                       
                                
                                <div class="modal-footer col-md-12 col-sm-12 col-xs-12">
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <!--<button id="btnSave" type="submit" name="save" class="btn btn-block btn-success" onclick="return validateForm()"><i class="fa fa-floppy-o"></i> Save</button>-->
                                        <button id="btnSave" type="button" name="save" class="btn btn-block btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12" style="display: <?php echo (empty($transit->id)) ? 'none' : 'initial'; ?>">
                                        <!--<button id="btnDelete" type="submit" name="delete" class="btn btn-block btn-danger" onclick="return confirmDelete(this);"><i class="fa fa-trash"></i> Delete</button>-->
                                        <button id="btnDelete" type="button" name="delete" class="btn btn-block btn-danger" ><i class="fa fa-trash"></i> Delete</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <a href="transit.php"><button type="button" name="reset" class="btn btn-block btn-primary"><i class="fa fa-history"></i> Reset</button></a>
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
        var id = <?php echo ($transit->id) ? 1 : 0; ?>;
        
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
