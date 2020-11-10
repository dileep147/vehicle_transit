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
                <div class="col-xs-4 col-sm-4 col-md-4 text-right" >
                    <address>
                        <strong>شركة غازي فقي محمد </strong>
                        <br>
                        لتجارة السيارة و التجارة المحدودة 
                        <br>
                        <abbr title="Phone"></abbr> 0750 7957555
                    </address>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 text-right">
                    <p>
                        <em><?php echo $payment->system_date ?> : التاريخ و الوقت  </em>
                    </p>
                    <p>
                        <em><?php echo $payment->transit_id()->memphis_number ?> : رقم المنفيس  </em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>الوصل  </h1>
                </div>
                </span>

                
                 
                <table class="table table-hover">
                   
                    <tbody>
                        <tr>
                           
                            <td class="col-xs-4 text-right"><?php echo $payment->customer_id()->first_name; ?> <?php echo $payment->customer_id()->last_name; ?> </td>
                             <td class="col-xs-4"> : اسم الزبون  </h4></td>
                            
                            <td class="col-xs-4 text-right"><?php echo $payment->transit_id()->car_number()->car_code ?></td>
                            <td class="col-xs-4 text-left"> : رقم السيارة  </td>
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
                         <td class="col-xs-4 text-right"> </td>                     
                           <td class="col-xs-4 text-right">                        
                           
                            <p >
                                <strong><?php echo number_format($payment->amount,2) ; ?> </strong>
                            </p>

                          </td>
                            <td class="col-xs-4 text-left">                          
                            
                            <p>
                                <strong> : ا مبلغ المدفوع </strong>
                            </p>

                           </td>
                            
                            
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
