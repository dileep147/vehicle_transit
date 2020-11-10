<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';


?>

<!--page content--> 
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Transit Report</h3>
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
                        <h2 id="title">Transit Report</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       <form class="form-inline" action="transit_report.php" method="post">
                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                         <label for="start_date">Start Date:</label>
                         <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                            <label for="end_date">End Date:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                            <button type="submit" class="btn  btn-primary">Submit</button>
                        </div>
                        </form>

                    </br>

                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Car Number</th>
                                    <th>Customer Name</th>
                                    <th>Memphis Number</th>
                                    <th>Currency Type</th>
                                    <th>Processing Date</th>                                    
                                    <th>Vehicle Fee</th>
                                    <th>Vehicle Transit Fee</th>                                    
                                    <th>Extra Expences</th>
                                    <th>Custom For Car</th>
                                    <th>Customer Charges</th>
                                    <th>Total</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                if(isset($_POST['start_date']) && isset($_POST['end_date'])){


                                $objects = Transit::find_all_by_date_range($_POST['start_date'] , $_POST['end_date']);
                                
                                foreach ($objects as $transit) {
                                    ?>
                                    <tr>
                                        <td><?php echo $transit->id ?></td>                 
                                        <td><?php echo $transit->car_number()->car_code ?></td>
                                        <td><?php echo $transit->customer_id()->first_name ?></td>
                                        <td><?php echo $transit->memphis_number ?></td>
                                        <td><?php echo $transit->currency()->name ?></td>
                                        <td><?php echo $transit->processing_date ?></td>           
                                        <td><?php echo $transit->fees ?></td>
                                        <td><?php echo $transit->transit_fee ?></td>
                                        <td><?php echo $transit->extra_expences ?></td>
                                        <td><?php echo $transit->car_custom ?></td>
                                        <td><?php echo $transit->customer_charges ?></td>
                                        <td><?php echo number_format(($transit->fees)+($transit->transit_fee)+($transit->extra_expences)+($transit->car_custom)+($transit->customer_charges),2); ?></td>
                                        
                                    </tr>
                                    <?php
                                }
                            }
                                ?>
                            </tbody>

                        </table>

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
        var id = <?php echo ($report->id) ? 1 : 0; ?>;
        
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
