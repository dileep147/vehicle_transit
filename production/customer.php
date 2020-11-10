<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';

if (!(isset($_POST["id"]) && $customer = Customer::find_by_id($_POST["id"]))) {
    $customer = new Customer();
}
?>

<!--page content--> 
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Customer Contact Information</h3>
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
                        <h2 id="title"><?php echo (empty($customer->id)) ? 'Add' : 'Edit'; ?> Customer Basic Information</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="formRole" action="proccess/customer_process.php" method="post" class="form-horizontal form-label-left" >
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="hidden" class="form-control" id="txtId" name="id" value="<?php echo $customer->id; ?>" />
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" id="txtName" name="first_name" value="<?php echo $customer->first_name; ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" id="txtName" name="last_name" value="<?php echo $customer->last_name; ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" id="txtName" name="email" value="<?php echo $customer->email; ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Address" id="txtName" name="address" value="<?php echo $customer->address; ?>" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" id="txtName" name="city" value="<?php echo $customer->city; ?>" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>State</label>
                                    <input type="text" class="form-control" placeholder="State" id="txtName" name="state" value="<?php echo $customer->state; ?>" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" placeholder="Zip Code" id="txtName" name="zip" value="<?php echo $customer->zip; ?>" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone" id="txtName" name="phone" value="<?php echo $customer->phone; ?>" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control" placeholder="Mobile" id="txtName" name="mobile" value="<?php echo $customer->mobile; ?>" required="">
                                </div>
                                <div class="form-group col-md-4 col-sm-4 col-xs-6 ">
                                    <label>Birth Date</label>
                                    <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="birthday" value="<?php echo $customer->birthday; ?>" required="">
                                </div>

                                <div class="clearfix"></div>
                                <div class="x_title">
                                    <h2 id="title"><?php echo (empty($customer->id)) ? 'Add' : 'Edit'; ?> Contracted Information</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>How Would They Prefer To Contracted?</label>
                    
                                            <br/>
                                            <?php
                                                foreach(Contracted::find_all() as $data){
                                                echo ' <label><input type="checkbox" name="contracted'.$data->id.'"> '.$data->name.'</label>';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Would They Like To Be Contracted Regarding:</label>
                     
                                            <br/>
                                            <?php
                                                foreach(ToBeContract::find_all() as $data){
                                                echo ' <label><input type="checkbox" name=" to_be_contract'.$data->id.'"> '.$data->name.'</label>';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="clearfix"></div>
                                <div class="x_title">
                                    <h2 id="title"><?php echo (empty($customer->id)) ? 'Add' : 'Edit'; ?> Personal Information</h2>
                                    <div class="clearfix"></div>
                                </div>

                                    

                                 <div class="x_content">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Is Customer Married?</label>                    
                                            <br/>
                                            <input type="radio" name="married" value="Yes" id="btn_radio">Yes
                                            <input type="radio" name="married" value="No">No
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Spouse's Name</label>
                                        <input type="text" class="form-control" placeholder="Spouse's Name" id="txtName" name="name" value="<?php echo $customer->name; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-6 ">
                                        <label>Spouse's Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Spouse's Birth Date" id="txtName" name="birthdate" value="<?php echo $customer->birthdate; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-6 ">
                                        <label>Wedding Anniversary</label>
                                        <input type="date" class="form-control" placeholder="Wedding Anniversary" id="txtName" name="anniversary" value="<?php echo $customer->anniversary; ?>" required="">
                                    </div>

                                    
                                </div>

                                 <div class="x_content">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Does Customer Have Children?</label>                    
                                            <br/>
                                            <input type="radio" name="child" value="Yes">Yes
                                            <input type="radio" name="child" value="No">No
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_1" value="<?php echo $customer->child_age_1; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_1" value="<?php echo $customer->child_birthdate_1; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_2" value="<?php echo $customer->child_age_2; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_2" value="<?php echo $customer->child_birthdate_2; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_3" value="<?php echo $customer->child_age_3; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_3" value="<?php echo $customer->child_birthdate_3; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_4" value="<?php echo $customer->child_age_4; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_4" value="<?php echo $customer->child_birthdate_4; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_5" value="<?php echo $customer->child_age_5; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_5" value="<?php echo $customer->child_birthdate_5; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_6" value="<?php echo $customer->child_age_6; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_6" value="<?php echo $customer->child_birthdate_6; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_7" value="<?php echo $customer->child_age_7; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_7" value="<?php echo $customer->child_birthdate_7; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="txtName" name="child_age_8" value="<?php echo $customer->child_age_8; ?>" required="">
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-xs-3 ">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control" placeholder="Birth Date" id="txtName" name="child_birthdate_8" value="<?php echo $customer->child_birthdate_8; ?>" required="">
                                    </div>
                                </div>
                                </div>
                                    
                                
                                
                                <div class="modal-footer col-md-12 col-sm-12 col-xs-12">
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <!--<button id="btnSave" type="submit" name="save" class="btn btn-block btn-success" onclick="return validateForm()"><i class="fa fa-floppy-o"></i> Save</button>-->
                                        <button id="btnSave" type="button" name="save" class="btn btn-block btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12" style="display: <?php echo (empty($customer->id)) ? 'none' : 'initial'; ?>">
                                        <!--<button id="btnDelete" type="submit" name="delete" class="btn btn-block btn-danger" onclick="return confirmDelete(this);"><i class="fa fa-trash"></i> Delete</button>-->
                                        <button id="btnDelete" type="button" name="delete" class="btn btn-block btn-danger" ><i class="fa fa-trash"></i> Delete</button>
                                    </div>
                                    <div class=" col-md-4 col-sm-4 col-xs-12">
                                        <a href="customer.php"><button type="button" name="reset" class="btn btn-block btn-primary"><i class="fa fa-history"></i> Reset</button></a>
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
        var id = <?php echo ($customer->id) ? 1 : 0; ?>;
        
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
<script type="text/javascript">
    (function(){
        var btn_radio=document.getElementById("gender_radio");
        var text=document.getElementById("txtName");

        btn_radio.addEventListener('click',function(){
            if (this.checked) {
                text.disabled='false';
            }
            else{
                text.disabled='';
            }
        });
    });
</script>
