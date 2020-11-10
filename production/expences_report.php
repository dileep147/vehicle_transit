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
                <h3>Expences Report</h3>
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
                        <h2 id="title">Expences Report</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                       <form class="form-group" action="expences_report.php" method="post">

                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                            <label for="start_date">Start Date:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>

                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                            <label for="end_date">End Date:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>

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
                            <button type="submit" class="btn  btn-primary">Submit</button>
                        </div>

                        </form>

                        </br>
                        <label style="font-weight:700;font-size:20px;margin-bottom:10px;">REPORT From: <?php if(isset($_POST['start_date'])){ echo $_POST['start_date']; } ?> To: <?php if(isset($_POST['end_date'])){ echo $_POST['end_date']; } ?></label>
                    </br>
                       
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Car Number</th>
                                   <th>Category</th>
                                    <th>Amount</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                if((isset($_POST['start_date']) && isset($_POST['end_date'])) && isset($_POST['car_number']) ){


                                $objects = Expences::find_all_by_car_number($_POST['start_date'] , $_POST['end_date'],$_POST['car_number']);
                                 $total=0;
                                
                                foreach ($objects as $transit) {
                                     $total = $total + floatval($transit->amount);
                                    ?>
                                    <tr>
                                        <td><?php echo $transit->id ?></td>                 
                                        <td><?php echo $transit->car_number()->car_code ?></td>
                                         <td><?php echo $transit->category()->name ?></td> 
                                         <td><?php echo $transit->amount ?></td> 
                                        
                                        
                                    </tr>


                                    <?php
                                }

                                 ?>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" style="font-weight:700;font-size:20px;text-align: center;">Total</th>
                                        <th> <?php echo $total  ?></th>
                                    </tr>
                                </tfoot>

                                 <?php

                            }

                            elseif((isset($_POST['start_date']) && isset($_POST['end_date'])) ){

                                $objects = Expences::find_all_by_expences_date($_POST['start_date'] , $_POST['end_date']);

                                $total=0;

                                foreach ($objects as $transit) {

                                    $total = $total + floatval($transit->amount);
                                    ?>
                                    <tr>
                                        <td><?php echo $transit->id ?></td>   
                                        <?php if($transit->car_number != NULL){ ?>
                                         <td><?php echo $transit->car_number()->car_code ?></td>  
                                         <?php }else{ ?>            
                                        <td>Not Selected</td>
                                        <?php } ?>
                                         <td><?php echo $transit->category()->name ?></td> 
                                         <td><?php echo number_format($transit->amount,2)  ?></td> 
                                        
                                        
                                    </tr>


                                    <?php
                                    
                                }
                                ?>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" style="font-weight:700;font-size:20px;text-align: center;">Total</th>
                                        <th> <?php echo $total  ?></th>
                                    </tr>
                                </tfoot>

                                 <?php

                                  
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
