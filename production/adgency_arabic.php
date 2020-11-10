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
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">شركة غازي فقي محمد مصطفى  </h4></p>
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">لتجارة السيارات  </h4></p>
                             <p class="font-weight-bold mb-1"><h3 style="font-weight:700;">موبايل : 07507957555</h3></p>
                        </div>

                        <div class="col-xs-4">
                            <img class="img-responsive center-block d-block mx-auto" src="uploads/png/logo.jpeg" style="width:100px; height: 100px;">
                              <p class="font-weight-bold mb-1"><h3 style="font-weight:700; text-align: center;">غازي فقي محمد </h3></p>
                              <p class="font-weight-bold mb-1"><h3 style="font-weight:700;  text-align: center;">شركة السيارات  </h3></p> 

                        </div>

                        <div class="col-xs-4 text-right">
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;text-align: right;">شركة غازي فقی محمد  </h4></p>
                            <p class="font-weight-bold mb-1"><h4 style="font-weight:700;">للتجارة السيارات  </h4></p>
                            <p class="font-weight-bold mb-1"><h3 style="font-weight:700;">العنوان - عقرة - معارض السيارات  </h3></p>
                        </div>

                    </div>

                    <hr class="my-5">
                        
                    <div class="row p-1; ">

                      <div class="col-xs-6 text-left">
                        <h3><?php echo $transit->car_number()->car_code; ?> : الرقم  </h3>
                      </div>
                      
                      <div class="col-xs-6 text-right">
                        <h3><?php echo $transit->top_history; ?> : التاريخ: </h3>
                      </div>

                    </div>

                    <hr class="my-5">

                    <div class="col-xs-12 text-center">
                        <p><h3 style="font-weight:700;">الى مديرية مرور أربيل/ دهوك/ السليمانية </h3></p>
                        <p><h3 style="font-weight:700;">موضوع - عقد البيع </h3></p>
                      </div>

                    <div class="row pb-5 p-5">
                        <div class="col-xs-6 text-right">
                            <p><h4><?php echo $transit->customer_id()->first_name; ?> <?php echo $transit->customer_id()->last_name; ?> :اسم الطرف الثاني  </h4></p>
                            <p><h4><?php echo $transit->customer_id()->phone; ?> :رقم الموبايل  </p>
                            <p><h4> <?php echo $transit->customer_id()->address; ?> : العنوان  </p>
                        </div>

                        <div class="col-xs-6 text-right">
                            <p><h4>اسم الطرف الأول : شركة غازي فقي  محمد مصطفى  </h3></p>
                            <p><h4>رقم الموبايل : 07507957555 </h4></p>
                            <p><h4>العنوان عقرة معارض السيارات  </h4></p>
                        </div>
                    </div>

                    <hr class="my-5">
                        
                    <div class="row p-1">

                      <div class="col-xs-12 text-center">
                        <h3> <?php echo $transit->temporary_number ?> -:ر قم مؤقت</h3>
                      </div>


                      
                     

                    </div>

                    <hr class="my-5">

                     <div class="row pb-5 p-5">
                        <div class="col-xs-6 text-right">
                            <p><h4><?php echo $transit->car_number()->car_type_id()->name; ?> : نوع السيارة  </p>
                            <p><h4>car number : <?php echo $transit->car_number()->car_number; ?>رقم شاسي السيارة  </h4></p>
                            <p><h4><?php echo $transit->car_number()->exit_date; ?> : تاريخ الخروج من الشركة </h4></p>
                        </div>

                        <div class="col-xs-6 text-right">
                            <p><h4><?php echo $transit->car_number()->model()->name; ?> : الموديل </p>
                            <p><h4><?php echo $transit->car_number()->color()->name; ?> : تاللون  </p>
                            <p><h4><?php echo $transit->car_number()->size()->name; ?> : عدد السليندر (بستون) </p>
                            <p><h4><?php echo $transit->car_number()->system_date; ?> : الوقت  </h4></p>
                        </div>
                    </div>

                    <hr class="my-5">

                     <div class="alert alert-danger text-right">
                      <p><h4>"بعد توقيع العقد يرجى مراجعة مديرية دائرة المرور لغرض التسجيل اذا لم يتم استلام اللوحة
 و السنوية خلال 60 يوم في هذه الحالة سوف يتم التغريم بمبلغ قدره (1000000)مليون دينار عراقي "            
</h4></p>
                     </div>

                      <div class="alert alert-info text-right">
                         <p><h4  style="font-weight:700;"> 

                          "يرجي الموافقة على تسجيل السيارة المذكورة خصائصها باسم (<?php echo $transit->customer_id()->first_name; ?>) حسب عقد السيارة المرقم 
                        (<?php echo $transit->customer_id()->phone; ?>) في تاريخ (<?php echo $transit->bottom_history_1; ?>) كتاب مديرية الكمارك  (<?php echo $transit->car_number()->car_number; ?>) رقم المنفيس   (<?php echo $transit->memphis_number; ?>) بتاريخ (<?php echo $transit->bottom_history_2; ?>)"           


                         </h4>

                         </p>
                      </div>

                      <div class="row p-5">

                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>بەڵێن و رەزامەندى لايەنى دووەم  </p>
                        </div>
                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>كرِيار واژوو  </p>
                        </div>
                        <div class="col-xs-4 text-center">
                          <p>..................................................</p>
                          <p>موافقة الطرف الأول توقيع البائع  </p>
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