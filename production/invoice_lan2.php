<?php
require_once './../util/initialize.php';
  
  if(isset($_GET['id'])){
    $transit = Transit::find_by_id($_GET['id']);
  } 
 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vehicle Invoice Paper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="span12" style="border: 2px solid black">
  <div class="container">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 body-main">
                <div class="col-md-12">
                    <div class="row">

                      <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 style="color: #F81D2D;">Ghazi Faqi Muhammad Mustafa Company</h2>
                            
                        </div>
                    </div>

                      <div class="col-xs-6 text-left">
                            
                            <p><?php echo $transit->car_number()->car_code; ?>لژمارە </p>
                            <p>بەروار : <?php echo $transit->processing_date; ?></p>
                           
                            
                        </div>
                        
                        <div class="col-xs-6 text-right">
                            
                            <p>نرخی پسوولە : <?php echo $transit->invoice_value; ?></p>
                            <p>نرخ بە دینار : <?php echo $transit->iqd_value; ?></p>
                            
                            
                        </div>
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>پسوولە</h2>
                            
                        </div>
                    </div> <br />
                    <div>

                        
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    
                                    <td class="col-md-6 text-right" ><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo $transit->received ?> </td>
                                    <td class="col-md-6">:وەرمگرت لە بەریز   </td>
                                    ا

                                </tr>
                                <tr>
                                    
                                    <td class="col-md-6 text-right"><i class="fas fa-rupee-sign" area-hidden="true"></i><?php echo $transit->customer_id()->first_name ?> <?php echo $transit->customer_id()->last_name ?></td>
                                    <td class="col-md-6">:للزبائن  </td>
                                </tr>
                               
                                
                                <tr>
                                    
                                    <td class="text-right">
                                        
                                        <p> <strong><i class="fas fa-rupee-sign text-right" area-hidden="true"></i><?php echo $transit->received_amount ?> </strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign text-right" area-hidden="true"><?php echo number_format(($transit->invoice_value) - ($transit->received_amount),2); ?></strong> </p>
                                        
                                    </td>
                                    <td class="text-left">
                                        <p> <strong> :بری وەرگیراو </strong> </p>
                                        <p> <strong>: بری ماوە</strong> </p>
                                        
                                    </td>
                                </tr>
                                

                                <tr>
                                    
                                    <td class="col-md-6"><i class="fas fa-rupee-sign" area-hidden="true"></td>
                                        <td class="col-md-6 text-right"><?php echo $transit->note ?> -:تێبینی  </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-xs-4">
                            <p>...............................</p> <br />
                           <p><b>ێیمزای وەرگر  </b></p>
                        </div>
                        <div class="col-xs-4">
                            
                        </div>
                        <div class="col-xs-4">
                            <p>...............................</p> <br />
                           <p><b> ێیمزای ژمێریار  </b></p>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <p style="text-align-last: center;"><b> ناونیشان- ئاكرى - پیشانگای ئۆتۆمبیلان ٠٧٥٠٧٩٥٧٥٥٥
 </b></p> <br />
                            
                        </div>
                    </div>
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