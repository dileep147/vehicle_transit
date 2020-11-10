<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';
?>

<!--page content--> 

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Customer Management</h3>
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
                        <a href="customer.php" ><button id="btnNew" type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Add New</button></a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>Birth Date</th>
                                    <th>Prefer To Contract</th>
                                    <th>Contract Regarding</th>
                                    <th>Married</th>
                                    <th>Spouse's Name</th>
                                    <th>Spouse's Birth Date</th>
                                    <th>Wedding Anniversary</th>
                                    <th>Children</th>
                                    <th>Child 1 Age</th>
                                    <th>Child 1 Birth Date</th>
                                    <th>Child 2 Age</th>
                                    <th>Child 2 Birth Date</th>
                                    <th>Child 3 Age</th>
                                    <th>Child 3 Birth Date</th>
                                    <th>Child 4 Age</th>
                                    <th>Child 4 Birth Date</th>
                                    <th>Child 5 Age</th>
                                    <th>Child 5 Birth Date</th>
                                    <th>Child 6 Age</th>
                                    <th>Child 6 Birth Date</th>
                                    <th>Child 7 Age</th>
                                    <th>Child 7 Birth Date</th>
                                    <th>Child 8 Age</th>
                                    <th>Child 8 Birth Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                $total_records = Customer::row_count();
                                $pagination = new Pagination($total_records);
                                $objects = Customer::find_all_by_limit_offset($pagination->records_per_page, $pagination->offset());
                                
                                foreach ($objects as $customer) {
                                    ?>
                                    <tr>
                                        <td><?php echo $customer->id ?></td>
                                        <td><?php echo $customer->first_name ?></td>
                                        <td><?php echo $customer->last_name ?></td>
                                        <td><?php echo $customer->email ?></td>
                                        <td><?php echo $customer->address ?></td>
                                        <td><?php echo $customer->city ?></td>
                                        <td><?php echo $customer->state ?></td>
                                        <td><?php echo $customer->zip ?></td>
                                        <td><?php echo $customer->phone ?></td>
                                        <td><?php echo $customer->mobile ?></td>
                                        <td><?php echo $customer->birthday ?></td>

                                        <td><?php foreach (CustomerContracted::find_all_by_contracted($customer->id) as $contracted_data ) {
                                            echo $contracted_data->contracted_id()->name." <br/> ";
                                        } ?></td>
                                        <td><?php foreach (CustomerRegarding::find_all_by_to_be_contract($customer->id) as $contract_data ) {
                                            echo $contract_data->to_be_contract_id()->name." <br/> ";
                                        } ?></td>

                                        <td><?php echo $customer->married ?></td>
                                        <td><?php echo $customer->name ?></td>
                                        <td><?php echo $customer->birthdate ?></td>
                                        <td><?php echo $customer->anniversary ?></td>
                                        <td><?php echo $customer->child ?></td>
                                        <td><?php echo $customer->child_age_1 ?></td>
                                        <td><?php echo $customer->child_birthdate_1 ?></td>
                                        <td><?php echo $customer->child_age_2 ?></td>
                                        <td><?php echo $customer->child_birthdate_2 ?></td>
                                        <td><?php echo $customer->child_age_3 ?></td>
                                        <td><?php echo $customer->child_birthdate_3 ?></td>
                                        <td><?php echo $customer->child_age_4 ?></td>
                                        <td><?php echo $customer->child_birthdate_4 ?></td>
                                        <td><?php echo $customer->child_age_5 ?></td>
                                        <td><?php echo $customer->child_birthdate_5 ?></td>
                                        <td><?php echo $customer->child_age_6 ?></td>
                                        <td><?php echo $customer->child_birthdate_6 ?></td>
                                        <td><?php echo $customer->child_age_7 ?></td>
                                        <td><?php echo $customer->child_birthdate_7 ?></td>
                                        <td><?php echo $customer->child_age_8 ?></td>
                                        <td><?php echo $customer->child_birthdate_8 ?></td>
                                        <td>

                                        <form action="customer.php" method="post"  style="float: left;">
                                                <input type="hidden" name="id" value="<?php echo $customer->id ?>"/>
                                                <button type="submit" name="view" class="btn btn-primary btn-xs" ><i class="glyphicon glyphicon-edit"></i> Edit</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="x_panel">
                    <div onclick="window.location.href:''" class="x_content">
                        <?php
                        echo $pagination->get_pagination_links_html1("customer_management.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/page content 
<?php include 'common/bottom_content.php'; ?> bottom content 
<script>
    window.onfocus = function () {
        location.reload(); 
    };
</script>
