<?php
require_once './../util/initialize.php';
  
  if(isset($_GET['id'])){
    $transit = Transit::find_by_id($_GET['id']);
  } 
 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print Paper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 body-main">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xs-3"> <img class="img" style="width:100px; height: 100px;" src="uploads/png/logo.jpeg" /> </div>
                        <div class="col-md-9 text-right">
                            <h4 style="color: #F81D2D;"><strong>Ghazi Faqi Muhammad Mustafa Company</strong></h4>
                            <p>Auto trade and General trade / Ltd.</p>
                            <p>To transport Cars from all Countries to Iraq and Kurdistan</p>
                            <p>Address: Akra _ Car Shows - 0750 7957555</p>
                            
                        </div>
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>INVOICE</h2>
                            
                        </div>
                    </div> <br />
                    <div>
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    <td class="col-md-6">Buyer's Name :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo $transit->customer_id()->first_name; ?> <?php echo $transit->customer_id()->last_name; ?> </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">Address :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></i><?php echo $transit->customer_id()->address; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">Note :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo $transit->note; ?> </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">Phone :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo $transit->customer_id()->phone; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">Car Number :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo $transit->car_number()->car_code ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">Car Model :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"><?php echo $transit->car_number()->model()->name ?></td>
                                </tr>
                               
                                <tr>
                                    <td class="col-md-6">Temporary Number :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></i><?php echo $transit->temporary_number ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">The car was taken out with the date :</td>
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></i><?php echo $transit->processing_date ?></td>
                                </tr>
                                <!-- <tr>
                                    <td class="text-right">
                                        <p> <strong>Shipment and Taxes:</strong> </p>
                                        <p> <strong>Total Amount: </strong> </p>
                                        <p> <strong>Discount: </strong> </p>
                                        <p> <strong>Payable Amount: </strong> </p>
                                    </td>
                                    <td>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 500 </strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 82,900</strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 3,000 </strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 79,900</strong> </p>
                                    </td>
                                </tr> -->
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  window.print();
</script>
</body>
</html>
