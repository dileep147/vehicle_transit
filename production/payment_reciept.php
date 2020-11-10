<?php
require_once './../util/initialize.php';
  
  if(isset($_GET['id'])){
    $payment = Payment::find_by_id($_GET['id']);
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
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>EGhazi Faqi Muhammad Mustafa Company</strong>
                        <br>
                        Auto trade and General trade / Ltd.
                        <br>
                        <abbr title="Phone"></abbr> 0750 7957555
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date & Time:<?php echo $payment->system_date ?></em>
                    </p>
                    <p>
                        <em>Memphis No:<?php echo $payment->transit_id()->memphis_number ?> </em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>

                
                 
                <table class="table table-hover">
                   
                    <tbody>
                        <tr>
                            <td class="col-xs-4">Customer Name:</h4></td>
                            <td class="col-xs-4"><?php echo $payment->customer_id()->first_name; ?> <?php echo $payment->customer_id()->last_name; ?> </td>
                            <td class="col-xs-4 text-center">Car Number : </td>
                            <td class="col-xs-4 text-right"><?php echo $payment->transit_id()->car_number()->car_code ?></td>
                        </tr>
                       <?php 
                       $transit = Transit::find_by_id($payment->transit_id);

                       $invoice_balance = 0;
                       $invoice_balance = $transit->invoice_value-$transit->received_amount-$transit->payment;

                       $payment_total = 0;
                       foreach (Payment::find_by_transit_id($payment->transit_id) as $payment_data) {
                            $payment_total = $payment_total + $payment_data->amount;
                       }

                       ?>
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                          
                            
                            <p>
                                <strong>Paid Amount: </strong>
                            </p>

                        </td>
                            <td class="text-right">
                        
                           
                            <p style="text-align: right;width:100px;">
                                <strong><?php echo number_format( $payment->amount,2); ?> </strong>
                            </p>
                            
                        </tr>
                       <tr>
                            <td>   </td>
                            <td>   </td>
                            <td ></td>
                            <td class="text-center text-danger"></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
<script type="text/javascript">
  window.print();
</script>
</body>
</html>
