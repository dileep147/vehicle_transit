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

                        <div class="col-xs-4 text-right">
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;"> كومبانيا غازي فقي محمد مصطفى   </h4></p>
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">بو بازرگانی ئۆتۆمبێل  </h4></p>
                             <p class="font-weight-bold mb-1"><h3 style="font-weight:700;">ژمارەی مۆبایل : ٠٧٥٠٧٩٥٧٥٥٥ </h3></p>
                        </div>

                        <div class="col-xs-4">
                            <img class="img-responsive center-block d-block mx-auto" src="uploads/png/logo.jpeg" style="width:100px; height: 100px;">
                              <p class="font-weight-bold mb-1"><h3 style="font-weight:700; text-align: center;">غازي فقي محمد</h3></p>
                              <p class="font-weight-bold mb-1"><h3 style="font-weight:700;  text-align: center;"> کۆمپانیای ئۆتۆمبیل  </h3></p> 

                        </div>

                        <div class="col-xs-4 text-right">
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;text-align: right;">كومبانيا غازي فقي محمد مصطفى  </h4></p>
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">و بازرگانی ئۆتۆمبێل      </h4></p>
                            <p class="font-weight-bold mb-1"><h3 style="font-weight:700;">ناونیشان - ئاکرێ - پێشانگای ئۆتۆمبێلان  </h3></p>
                        </div>

                    </div>

                    <hr class="my-5">
                        
                    <div class="row p-1; ">

                      <div class="col-xs-6 text-left">
                        <h3><?php echo $transit->car_number()->car_code; ?> :ژمارە : </h3>
                      </div>
                      
                      <div class="col-xs-6 text-right">
                        <h3><?php echo $transit->top_history; ?> : به روار  </h3>
                      </div>

                    </div>

                    <hr class="my-5">

                    <div class="col-xs-12 text-center">
                        <p><h3 style="font-weight:700;">بۆ بەرێوەبەرایەتی  هاتووچۆی / هەولێر / سلێمانی / دهۆک   </h3></p>
                        <p><h3 style="font-weight:700;">بابەت /گرێبەستی فرۆشتن  </h3></p>
                      </div>

                    <div class="row pb-5 p-5">
                        <div class="col-xs-6 text-right">
                            <p><h4><?php echo $transit->customer_id()->first_name; ?> <?php echo $transit->customer_id()->last_name; ?> : ناوی لایەنی دووەم  </h4></p>
                            <p><h4><?php echo $transit->customer_id()->phone; ?> : ژمارەی مۆبایل  <p>
                            <p><h4> <?php echo $transit->customer_id()->address; ?> :ناونیشان   </p>
                        </div>

                        <div class="col-xs-6 text-right">
                            <p><h4>ناوی لایەنی یەکەم : کۆمپانیای غازي فقي محمد  </h3></p>
                            <p><h4>ژمارەی مۆبایل : ٠٧٥٠٧٩٥٧٥٥٥ </h4></p>
                            <p><h4> اونیشان : ئاکرێ-  - پێشانگای ئۆتۆمبێلان   </h4></p>
                        </div>
                    </div>

                    <hr class="my-5">
                        
                    <div class="row p-1">

                      <div class="col-xs-12 text-center">
                        <h3> <?php echo $transit->temporary_number ?> -:ژمارەی کاتی  </h3>
                      </div>


                      
                     

                    </div>

                    <hr class="my-5">

                     <div class="row pb-5 p-5">
                        <div class="col-xs-6 text-right">
                            <p><h4><?php echo $transit->car_number()->car_type_id()->name; ?> : نجۆری ئۆتۆمبێل   </p>
                            <p><h4>car number : <?php echo $transit->car_number()->car_number; ?> كار نمبر  </h4></p>
                            <p><h4><?php echo $transit->car_number()->exit_date; ?> : بەرواری دەرچوون لە کۆمپانیا  </h4></p>
                        </div>

                        <div class="col-xs-6 text-right">
                            <p><h4><?php echo $transit->car_number()->model()->name; ?> : مۆدێل  </p>
                            <p><h4><?php echo $transit->car_number()->color()->name; ?> : رەنگ  </p>
                            <p><h4><?php echo $transit->car_number()->size()->name; ?> : ژمارەی پستۆن  </p>
                            <p><h4><?php echo $transit->car_number()->system_date; ?> : کات  </h4></p>
                        </div>
                    </div>

                    <hr class="my-5">

                     <div class="alert alert-danger text-right">
                      <p><h4>  ئەبێت لە دوای واژوو كردنی ئەم گرێبەستە سەردانی بەرێوەبەرايەتی هاتووچو بكریت بەمەبەستی تۆماركردنی   ئەگەر لەماوەی ٦٠ رۆژ سالیانەو تابلؤ وەرنەگيرێت سزادەدرێت بە بری (١٠٠٠٠٠٠) يەك ملیۆن دينار)  </h4></p>
                     </div>

                      <div class="alert alert-info text-right">
                         <p><h4  style="font-weight:700;"> 

                                 

                        تكايە رەزامەندى بفەرموون لەسەر تۆماركردنى ئەو ئؤتؤمبێلەى كەخەسڵەتەكانى دياريكراوە بەناوى ( <?php echo $transit->customer_id()->first_name; ?>  ) بەپێى   گريێبەستى كۆمپانيا ژمارە ( <?php echo $transit->customer_id()->phone; ?> ) لە رێكەوتى (<?php echo $transit->bottom_history_1; ?> ) وە نوسراوى بەرِێوەبەرايەتى گومرگى  (<?php echo $transit->car_number()->car_number; ?>)  ژمارە (<?php echo $transit->memphis_number; ?>)    لەرێكەوتى  (<?php echo $transit->bottom_history_2; ?>)

                         </h4>

                         </p>
                      </div>

                      <div class="row p-5">

                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>توقيع و موافقة الطرف الثاني - المشتري </p>
                        </div>
                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>توقيع و ختم الشركة </p>
                        </div>
                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>ئيمزاى لايه نى يه كه م فروشيار  </p>
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