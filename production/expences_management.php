<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';
?>

<!--page content--> 

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Expences Management</h3>
            </div>

            <div class="title_right">

            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <a href="expences.php" ><button id="btnNew" type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Add New</button></a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Expences Category</th>
                                    <th>Car Number</th>
                                    <th>Expences Date</th>
                                    <th>Systen Date</th>
                                    <th>Amount</th>
                                    <th>Discription</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                $total_records = Expences::row_count();
                                $pagination = new Pagination($total_records);
                                $objects = Expences::find_all_by_limit_offset($pagination->records_per_page, $pagination->offset());
                                
                                foreach ($objects as $expences) {
                                    ?>
                                    <tr>
                                        <td><?php echo $expences->id ?></td>                 
                                        <td><?php echo $expences->category()->name ?></td>
                                        <?php 
                                            if($expences->car_number == Null){
                                                ?><td>None</td><?php
                                            }
                                            else{
                                                 ?><td><?php echo $expences->car_number()->car_code ?></td><?php
                                            }
                                         ?>

                                        
                                        <td><?php echo $expences->expences_date ?></td>
                                        <td><?php echo $expences->system_date ?></td>
                                        <td><?php echo $expences->amount ?></td>
                                        <td><?php echo $expences->discription ?></td>
                                        <td>
                                            <form action="expences.php" method="post"  style="float: left;">
                                                <input type="hidden" name="id" value="<?php echo $expences->id ?>"/>
                                                <button type="submit" name="view" class="btn btn-primary btn-xs" ><i class="glyphicon glyphicon-edit"></i>Edit</button>
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
                        echo $pagination->get_pagination_links_html1("expences_management.php");
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
