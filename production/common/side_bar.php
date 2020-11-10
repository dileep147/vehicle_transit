<?php
require_once __DIR__ . '/../../util/initialize.php';

$user = User::find_by_id($_SESSION["user"]["id"]);
?>
<div class="col-md-3 left_col ">
  <div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><i class="fa fa-home "></i> <span><?php echo ProjectConfig::$project_name; ?></span></a>
    </div>

    <div class="clearfix"></div>

    <div id="google_translate_element" align="center"></div>

      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
      </script>

     

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic" >
        <?php
        $image = "images/user.png";
        if ($user->image) {
          $image = "uploads/users/" . $user->image;
        }
        ?>
        <img src="<?php echo $image; ?>" alt="..." class="img-circle profile_img">
        <!--<figure style="height: 3em; width: 3em;">
        <img style="border-radius: 100%" class="img-responsive image_fit " src="<?php // echo 'uploads/users/'.$user->image;               ?>"  alt="Image not found" onerror="this.src='images/user.png';">
      </figure>-->
    </div>

    <div class="profile_info">
      <span>Welcome,</span>
      <h2><?php echo $user->name; ?></h2>
    </div>
    <div class="clearfix"></div>
  </div>

  <!-- /menu profile quick info -->
  <br />

  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <!--<h3>General</h3>-->
      <ul class="nav side-menu">

        <li><a><i class="fa fa-user-secret"></i>Customer Management <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <div class="menu_heading"><label >EDIT</label></div>
            <?php
          
              echo '<li><a href="customer.php">Add Customer</a></li>';
             echo '<li><a href="contracted.php">Add How To Contract?</a></li>';
             echo '<li><a href="to_be_contract.php">Add Contract Regarding?</a></li>';
           ?>

            <div class="menu_heading"><label>REPORTS</label></div>
            <?php
              
              echo '<li><a href="customer_management.php">Customer Management</a></li>';
              echo '<li><a href="contracted_management.php">Contracted Management</a></li>';
              echo '<li><a href="to_be_contract_management.php">Contract Regarding Management</a></li>';
            ?>
          </ul>
        </li> 

      <li><a><i class="fa fa-user-secret"></i>Vehicle Management <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <div class="menu_heading"><label >EDIT</label></div>
            <?php
              echo '<li><a href="gate.php">Add a Cross Gate</a></li>';
              echo '<li><a href="car_type.php">Add Type</a></li>';
              echo '<li><a href="model.php">Add Model</a></li>';
              echo '<li><a href="color.php">Add Color</a></li>';
              echo '<li><a href="size.php">Add Size</a></li>';
              echo '<li><a href="car.php">Add Car</a></li>';
           ?>

            <div class="menu_heading"><label>REPORTS</label></div>
            <?php
               echo '<li><a href="gate_management.php">Cross Gate Management</a></li>';
               echo '<li><a href="car_type_management.php">Type Management</a></li>';
              echo '<li><a href="model_management.php">Model Management</a></li>';
              echo '<li><a href="color_management.php">Color Management</a></li>';
              echo '<li><a href="size_management.php">Size Management</a></li>';
              echo '<li><a href="car_management.php">Car Management</a></li>';
            ?>
          </ul>
        </li>

               
        <li><a><i class="fa fa-user-secret"></i>Transit Management <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <div class="menu_heading"><label >EDIT</label></div>
            <?php          
              echo '<li><a href="transit.php">Add Transit</a></li>';             
           ?>

            <div class="menu_heading"><label>REPORTS</label></div>
            <?php              
              echo '<li><a href="transit_management.php">Transit Management</a></li>';              
            ?>
          </ul>
        </li>

        <li><a><i class="fa fa-user-secret"></i>Payment Management <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <div class="menu_heading"><label >EDIT</label></div>
            <?php
             echo '<li><a href="payment.php">Add Payment</a></li>';               
           ?>

            <div class="menu_heading"><label>REPORTS</label></div>
            <?php
              echo '<li><a href="payment_management.php">Payment Management</a></li>';              
            ?>
          </ul>
        </li>         

             

        <li><a><i class="fa fa-user-secret"></i>Currency Management <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <div class="menu_heading"><label >EDIT</label></div>
            <?php
          
              echo '<li><a href="currency.php">Add Currency</a></li>';
             
           ?>

            <div class="menu_heading"><label>REPORTS</label></div>
            <?php
              
              echo '<li><a href="currency_management.php">Currency Management</a></li>';
              
            ?>
          </ul>
        </li> 

       <li><a><i class="fa fa-user-secret"></i>Expences Management <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <div class="menu_heading"><label >EDIT</label></div>
            <?php
          
              echo '<li><a href="expences_category.php">Add Expences Category</a></li>';
               echo '<li><a href="expences.php">Add Expences </a></li>';
             
           ?>

            <div class="menu_heading"><label>REPORTS</label></div>
            <?php
              
              echo '<li><a href="expences_category_management.php">Expences Category Management</a></li>';
              echo '<li><a href="expences_management.php">Expences Management</a></li>';

            ?>
          </ul>
        </li> 

        

        

        

        <li><a><i class="fa fa-user-secret"></i>User Administration <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <div class="menu_heading"><label >EDIT</label></div>
            <?php
            if(Functions::check_privilege_by_module_action("User","ins")){
              echo '<li><a href="user.php">Add User</a></li>';
            }
            if(Functions::check_privilege_by_module_action("Role","ins")){
              echo '<li><a href="role.php">Add Role</a></li>';
            }
            if(Functions::check_privilege_by_module_action("Designation","ins")){
              echo '<li><a href="designation.php">Add Designation</a></li>';
            }
            //                                if(Functions::check_privilege_by_module_action("Privilege","ins")){
            if(true){
              echo '<li><a href="privilege_management.php">Privilege Management</a></li>';
            }
            if(Functions::check_privilege_by_module_action("Target","ins")){
              // echo '<li><a href="target.php">Target Add</a></li>';
            }
            ?>

            <div class="menu_heading"><label>REPORTS</label></div>
            <?php
            if(Functions::check_privilege_by_module_action("User","view")){
              echo '<li><a href="user_management.php">User Management</a></li>';
            }
            if(Functions::check_privilege_by_module_action("Role","view")){
              echo '<li><a href="role_management.php">Role Management</a></li>';
            }
            if(Functions::check_privilege_by_module_action("Designation","view")){
              echo '<li><a href="designation_management.php">Designation Management</a></li>';
            }
            if(Functions::check_privilege_by_module_action("Target","view")){
              // echo '<li><a href="target_management.php">Target Management</a></li>';
            }
            if(Functions::check_privilege_by_module_action("Target","view")){
              // echo '<li><a href="target_report.php">Target Report</a></li>';
            }
            ?>
          </ul>
        </li>

        


        <li><a><i class="fa fa-paperclip"></i>Reports<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <!--                            <li><a href="outstanding_invoice_customers.php">Outstanding Invoices Report - Customers</a></li>
            <li><a href="outstanding_invoice_users.php">Outstanding Invoices Report - Users</a></li>
            <li><a href="outstanding_invoice_deliverers.php">Outstanding Invoices Report - Deliverers</a></li>
            <li><a href="outstanding_invoice_routes.php">Outstanding Invoices Report - Routes</a></li>
            <li><a href="invoice_details_report.php">Invoice Details Report</a></li>
            <li><a href="re_order_report.php">Re-Order Report</a></li>
            <li><a href="stock_report.php">Stock Report</a></li>
            <li><a href="material_stock_report.php">Material Stock Report</a></li>-->
            <li><a href="transit_report.php">Transit Report</a></li>
            <li><a href="customer_report.php">Customer Report</a></li>
            <li><a href="expences_report.php">Expences Report</a></li>
             <li><a href="outstanding_report.php">Outstanding Report</a></li>

            <div class="menu_heading"><label>OUTSTANDINGS</label>

            </div>
          
            <div class="menu_heading"><label>INVENTORYS</label></div>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="sidebar-footer hidden-small">
    <small style="color:white;">Advanced Information Technology (Pvt) Ltd.</small>
  </div>
  <!-- /menu footer buttons -->
</div>
</div>
