<?php
require_once './../util/initialize.php';

include 'common/upper_content.php';
?>

<div id="google_translate_element"></div>

<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script> -->
<!-- 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
<!-- page content -->

<div class="right_col" role="main" style="background-color:white;">
  <div class="">
    <div class="row">

      <div class="row tile_count">

        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count" style="text-align:center;">
          <img src="uploads/png/customer.png" style="width:100px; height: 100px">
          <span class="count_top"><i class="fa fa-user"></i> Place A CUSTOMER</span>
          <div class="count"><a href="customer.php" style="padding:20px;" class="btn btn-primary btn-block" role="button">ADD CUSTOMER</a></div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count" style="text-align:center;">
          <img src="uploads/png/car.png" style="width:100px;height: 100px">
          <span class="count_top"><i class="fa fa-user"></i> PLACE A CAR</span>
          <div class="count"><a href="car.php" style="padding:20px;" class="btn btn-primary btn-block" role="button">ADD CAR</a></div>
        </div>

        

        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count" style="text-align:center;">
          <img src="uploads/png/transit.png" style="width:100px;height: 100px">
          <span class="count_top"><i class="fa fa-user"></i> PLACE A TRANSIT</span>
          <div class="count green"><a href="transit.php" style="padding:20px;" class="btn btn-primary btn-block" role="button">ADD TRANSIT</a></div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count" style="text-align:center;">
          <img src="uploads/png/payment.png" style="width:100px;height: 100px">
          <span class="count_top"><i class="fa fa-user"></i> Place A PAYMENT</span>
          <div class="count"><a href="payment.php" style="padding:20px;" class="btn btn-primary btn-block" role="button">ADD PAYMENT</a></div>
        </div>


        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count" style="text-align:center;">
          <img src="uploads/png/expences.png" style="width:100px;height: 100px">
          <span class="count_top"><i class="fa fa-user"></i> Make A Expences</span>
          <div class="count"><a href="expences.php" style="padding:20px;" class="btn btn-primary btn-block" role="button">ADD EXPENCES</a></div>
        </div>

         <!-- <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count" style="text-align:center;">
              <p>Delivery Date: <?php echo $remainder->delivery_date; ?></p> 
         </div> -->

         

      </div>
 
      <div class="page-title">


        <div class="title_right">

        </div>
      </div>


      <div class="clearfix"></div>
      <?php Functions::output_result(); ?>
      <div class="row">




      </div>

    </div>
  </div>
</div>
<!-- /page content -->
<?php include 'common/bottom_content.php'; ?>
