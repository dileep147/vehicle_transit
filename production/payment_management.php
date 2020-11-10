<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';
?>

<!--page content--> 

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Payment Management</h3>
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
                        <a href="payment.php" ><button id="btnNew" type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Add New</button></a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Memphis Number</th>
                                    <th>Customert Name</th>
                                    <th>Amount</th>
                                    <th>System Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                $total_records = Payment::row_count();
                                $pagination = new Pagination($total_records);
                                $objects = Payment::find_all_by_limit_offset($pagination->records_per_page, $pagination->offset());
                                
                                foreach ($objects as $payment) {
                                    ?>
                                    <tr>
                                        <td><?php echo $payment->id ?></td>
                                        <td><?php echo $payment->transit_id()->memphis_number ?></td>
                                         <td><?php echo $payment->customer_id()->first_name ?> <?php echo $payment->customer_id()->last_name ?></td>  
                                         <td><?php echo $payment->amount ?></td>
                                         <td><?php echo $payment->system_date ?></td>
                                        <td>
                                            <form action="payment.php" method="post" style="float: left;">
                                                <input type="hidden" name="id" value="<?php echo $payment->id ?>"/>
                                                <button type="submit" name="view" class="btn btn-primary btn-xs" ><i class="glyphicon glyphicon-edit"></i> Edit</button>             

                                                

                                                 <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Reciept Print
                                                        <span class="caret"></span></button>
                                                             <ul class="dropdown-menu">
                                                                 <li> <a href='payment_reciept.php?id=<?php echo $payment->id ?>' class='btn btn-success btn-xs' target='_blank'>English</a></li>
                                                                <li> <a href='payment_arabic.php?id=<?php echo $payment->id ?>' class='btn btn-success btn-xs' target='_blank'>Arabic</a></li>
                                                                <li> <a href='payment_kurdish.php?id=<?php echo $payment->id ?>' class='btn btn-success btn-xs' target='_blank'>Kurdish</a></li>
                                                            </ul>
                                                </div>

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
                        echo $pagination->get_pagination_links_html1("role_management.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'common/bottom_content.php'; ?> bottom content 
<script>
    
</script>
