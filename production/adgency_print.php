<?php
require_once './../util/initialize.php';
  
  if(isset($_GET['id'])){
    $transit = Transit::find_by_id($_GET['id']);
  } 
 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vehicle Transit Adgency Paper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row p-5">

                        <div class="col-xs-4 text-left">
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">Ghazi Faqi Muhammad Mustafa Company</h4></p>
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">for car trade</h4></p>
                             <p class="font-weight-bold mb-1"><h3 style="font-weight:700;">Number /0750 7957555</h3></p>
                        </div>

                        <div class="col-xs-4">
                            <img class="img-responsive center-block d-block mx-auto" src="uploads/png/logo.jpeg" style="width:100px; height: 100px;">
                              <p class="font-weight-bold mb-1"><h3 style="font-weight:700; text-align: center;">Ghazi F. Muhammad Mustafa</h3></p>
                              <p class="font-weight-bold mb-1"><h3 style="font-weight:700;  text-align: center;">For Car Company</h3></p> 

                        </div>

                        <div class="col-xs-4 text-right">
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;text-align: right;">Ghazi Faqi Muhammad Mustafa Company </h4></p>
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">for car trade</h4></p>
                            <p class="font-weight-bold mb-1"><h3 style="font-weight:700;">Address / Aqrah / Car Showroom</h3></p>
                        </div>

                    </div>

                    <hr class="my-5">
                        
                    <div class="row p-1; ">

                      <div class="col-xs-6 text-left">
                        <h3>Number : <?php echo $transit->car_number()->car_code; ?></h3>
                      </div>
                      
                      <div class="col-xs-6 text-right">
                        <h3>History : <?php echo $transit->top_history; ?></h3>
                      </div>

                    </div>

                    <hr class="my-5">

                    <div class="col-xs-12 text-center">
                        <p><h3 style="font-weight:700;">To / Traffic Directorate / Erbil / Sulaymaniyah / Dohuk</h3></p>
                        <p><h3 style="font-weight:700;">Subject / contract of sale</h3></p>
                      </div>

                    <div class="row pb-5 p-5">
                        <div class="col-xs-6">
                            <p><h4>Name of the second party : <?php echo $transit->customer_id()->first_name; ?> <?php echo $transit->customer_id()->last_name; ?></h4></p>
                            <p><h4>Telephone number : <?php echo $transit->customer_id()->phone; ?></p>
                            <p><h4>Address : <?php echo $transit->customer_id()->address; ?></p>
                        </div>

                        <div class="col-xs-6 text-left">
                            <p><h4>Name of the first party : Ghazi Faqi Muhammad Mustafa Company</h3></p>
                            <p><h4>Phone number : 0750 7957555</h4></p>
                            <p><h4>Address : Aqrah - Car Showroom</h4></p>
                        </div>
                    </div>

                    <hr class="my-5">
                        
                    <div class="row p-1">

                      <div class="col-xs-12 text-center">
                        <h3>Temporary examination :- <?php echo $transit->temporary_number ?></h3>
                      </div>


                      
                     

                    </div>

                    <hr class="my-5">

                     <div class="row pb-5 p-5">
                        <div class="col-xs-6">
                            <p><h4>Type of car : <?php echo $transit->car_number()->car_type_id()->name; ?></p>
                            <p><h4>car number : <?php echo $transit->car_number()->car_number; ?></h4></p>
                            <p><h4>Exit date from the company : <?php echo $transit->car_number()->exit_date; ?></h4></p>
                        </div>

                        <div class="col-xs-6 text-left">
                            <p><h4>a model : <?php echo $transit->car_number()->model()->name; ?></p>
                            <p><h4>the color : <?php echo $transit->car_number()->color()->name; ?></p>
                            <p><h4>cylinder for car : <?php echo $transit->car_number()->size()->name; ?></p>
                            <p><h4>Time  :  <?php echo $transit->car_number()->system_date; ?></h4></p>
                        </div>
                    </div>

                    <hr class="my-5">

                     <div class="alert alert-danger">
                      <p><h4>After signing the contract, the Traffic Directorate must be reviewed for the purpose of registration. In the event that the period ends (60 days) and does not receive the plate in this regard, he will be fined in the amount of (1,000,000) one million dinars.</h4></p>
                     </div>

                      <div class="alert alert-info">
                         <p><h4  style="font-weight:700;">  Please agree to register this car within the specifications mentioned in the name (<?php echo $transit->customer_id()->first_name; ?>)  Within the company contract. No.(<?php echo $transit->customer_id()->phone; ?>) In the history of (<?php echo $transit->bottom_history_1; ?>)  Within the customs registration (<?php echo $transit->car_number()->car_number; ?>)  Number (<?php echo $transit->memphis_number; ?>) In the history of (<?php echo $transit->bottom_history_2; ?>).</h4>

                         </p>
                      </div>

                      <div class="row p-5">

                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>The consent of the second party Buyer's signature</p>
                        </div>
                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>Company seal and signature</p>
                        </div>
                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>First party approval Seller's signature</p>
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