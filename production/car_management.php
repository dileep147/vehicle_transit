<?php
require_once './../util/initialize.php';
include 'common/upper_content.php';
?>

<!--page content--> 

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Car Management</h3>
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
                        <a href="car.php" ><button id="btnNew" type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Add New</button></a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Car Code</th>
                                    <th>Car Number</th>
                                    <th>Type</th>                                    
                                    <th>Model</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Gate to Cross</th>
                                    <th>Exit Date</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Image 3</th>
                                    <th>Image 4</th>
                                    <th>Image 5</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                $total_records = Car::row_count();
                                $pagination = new Pagination($total_records);
                                $objects = Car::find_all_by_limit_offset($pagination->records_per_page, $pagination->offset());
                                
                                foreach ($objects as $car) {
                                    ?>
                                    <tr>
                                        <td><?php echo $car->id ?></td>                 
                                        <td><?php echo $car->car_code ?></td>
                                        <td><?php echo $car->car_number ?></td>
                                        <td><?php echo $car->car_type_id()->name ?></td>
                                        <td><?php echo $car->model()->name ?></td>
                                        <td><?php echo $car->color()->name ?></td>
                                        <td><?php echo $car->size()->name ?></td>
                                        <td><?php echo $car->gate_id()->name ?></td>
                                        <td><?php echo $car->exit_date ?></td>

                                        <td><?php  $image = "images/user.png";
                                        if ($car->image) {
                                            $image = "uploads/users/" . $car->image;
                                        } ?> <img id="imgImage" src="<?php echo $image; ?>" alt=":( image not found..!" class="image img-responsive img-thumbnail" style="width: 60px">
                                      </td>

                                      <td><?php  $image = "images/user.png";
                                        if ($car->image2) {
                                            $image = "uploads/users/" . $car->image2;
                                        } ?> <img id="imgImage" src="<?php echo $image; ?>" alt=":( image not found..!" class="image img-responsive img-thumbnail" style="width: 60px">
                                      </td>

                                      <td><?php  $image = "images/user.png";
                                        if ($car->image3) {
                                            $image = "uploads/users/" . $car->image3;
                                        } ?> <img id="imgImage" src="<?php echo $image; ?>" alt=":( image not found..!" class="image img-responsive img-thumbnail" style="width: 60px">
                                      </td>

                                      <td><?php  $image = "images/user.png";
                                        if ($car->image4) {
                                            $image = "uploads/users/" . $car->image4;
                                        } ?> <img id="imgImage" src="<?php echo $image; ?>" alt=":( image not found..!" class="image img-responsive img-thumbnail" style="width: 60px">
                                      </td>

                                    <td><?php  $image = "images/user.png";
                                        if ($car->image5) {
                                            $image = "uploads/users/" . $car->image5;
                                        } ?> <img id="imgImage" src="<?php echo $image; ?>" alt=":( image not found..!" class="image img-responsive img-thumbnail" style="width: 60px">
                                      </td>


                                        <td>
                                            <form action="car.php" method="post"  style="float: left;">
                                                <input type="hidden" name="id" value="<?php echo $car->id ?>"/>
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
                        echo $pagination->get_pagination_links_html1("car_management.php");
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
