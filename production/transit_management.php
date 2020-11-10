<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';
?>

<!--page content--> 

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Transit Management</h3>
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
                        <a href="transit.php" ><button id="btnNew" type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Add New</button></a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Car Number</th>
                                    <th>Customer Name</th>
                                    
                                    <th>Memphis Number</th>
                                    <th>Temporary Number</th>
                                    <th>Currency Type</th>
                                    <th>Processing Date</th>
                                    <th>Top History</th> 
                                    <th>Bottom History 1</th>
                                    <th>Bottom History 2</th>                                   
                                    <th>Vehicle Fee</th>
                                    <th>Vehicle Transit Fee</th>                                    
                                    <th>Extra Expences</th>
                                    <th>Custom For Car</th>
                                    <th>Customer Charges</th>
                                    <th>Total</th>
                                    <th>Invoice Value</th>
                                    <th>IQD Value</th>
                                    <th>Received From</th>
                                    <th>Note</th>
                                    <th>Received Amount</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                $total_records = Transit::row_count();
                                $pagination = new Pagination($total_records);
                                $objects = Transit::find_all_by_limit_offset($pagination->records_per_page, $pagination->offset());
                                
                                foreach ($objects as $transit) {
                                    ?>
                                    <tr>
                                        <td><?php echo $transit->id ?></td>                 
                                        <td><?php echo $transit->car_number()->car_code ?></td>
                                        <td><?php echo $transit->customer_id()->first_name ?> <?php echo $transit->customer_id()->last_name ?></td>
                                        
                                        <td><?php echo $transit->memphis_number ?></td>
                                        <td><?php echo $transit->temporary_number ?></td>
                                        <td><?php echo $transit->currency()->name ?></td> 
                                        <td><?php echo $transit->processing_date ?></td>
                                        <td><?php echo $transit->top_history ?></td>
                                        <td><?php echo $transit->bottom_history_1 ?></td>
                                        <td><?php echo $transit->bottom_history_2 ?></td>          
                                        <td><?php echo $transit->fees ?></td>
                                        <td><?php echo $transit->transit_fee ?></td>
                                        <td><?php echo $transit->extra_expences ?></td>
                                        <td><?php echo $transit->car_custom ?></td>
                                        <td><?php echo $transit->customer_charges ?></td>
                                        <td><?php echo number_format(($transit->fees)+($transit->transit_fee)+($transit->extra_expences)+($transit->car_custom)+($transit->customer_charges),2); ?></td>
                                        <td><?php echo $transit->invoice_value ?></td>
                                        <td><?php echo $transit->iqd_value ?></td>
                                        <td><?php echo $transit->received ?></td>
                                        <td><?php echo $transit->note ?></td>
                                        <td><?php echo $transit->received_amount ?></td>
                                        <td>
                                            <form action="transit.php" method="post"  style="float: left;">
                                                <input type="hidden" name="id" value="<?php echo $transit->id ?>"/>
                                                <button type="submit" name="view" class="btn btn-primary btn-xs" ><i class="glyphicon glyphicon-edit"></i>Edit</button>


                                                 <a href='invoice_print.php?id=<?php echo $transit->id ?>'  class='btn btn-success btn-xs' target='_blank'>Invoice Print</a>

                                                 <a href='invoice_arab.php?id=<?php echo $transit->id ?>'  class='btn btn-success btn-xs' target='_blank'>Invoice Print Arbic</a>

                                                 <a href='invoice_lan2.php?id=<?php echo $transit->id ?>'  class='btn btn-success btn-xs' target='_blank'>Invoice Print Kurdish</a>

                                                <?php 
                                                    if($transit->status==1){                                                   
                                                 ?>                                         

                                                <a href='adgency_print.php?id=<?php echo $transit->id ?>' class='btn btn-success btn-xs' target='_blank'>Adgency Paper Print</a>

                                                <a href='adgency_arabic.php?id=<?php echo $transit->id ?>' class='btn btn-success btn-xs' target='_blank'>Adgency Paper Arabic Print</a>

                                                <a href='adgency_kurdish.php?id=<?php echo $transit->id ?>' class='btn btn-success btn-xs' target='_blank'>Adgency Paper Kurdish Print</a>

                                                <a href='print.php?id=<?php echo $transit->id ?>' class='btn btn-success btn-xs' target='_blank'>Print</a>
                                            <?php } ?>



                                                

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
                        echo $pagination->get_pagination_links_html1("transit_management.php");
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
