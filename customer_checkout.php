<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Customer, Theme, Responsive, Fluid, Retina">

    <title>CarpetIT - Checkout (Customer)</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/to-do.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="customer_main_menu.html" class="logo"><b>Zahra’s Carpet Paradise</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="guest_main_menu.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></p>
              	  <h5 class="centered">Customer Name</h5>
                  
                  <li class="mt">
                      <a href="customer_main_menu.html">
                          <i class="fa fa-home"></i>
                          <span>Main Menu</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="customer_information.html">
                          <i class="fa fa-user"></i>
                          <span>Customer Information</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="customer_carpet.html" >
                          <i class="fa fa-cube"></i>
                          <span>Carpet</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="customer_shopping_cart.html">
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shopping Cart</span>
                      </a>
                  </li>  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<?php
// 1. 数据库连接
$servername = "localhost:3300";
$username = "root";
$password = "";
$dbname = "spm_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. 从数据库中获取数据
$sql = "SELECT firstname, email, number1, saddress, baddress FROM users_info WHERE id = '2'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customerName = $row['firstname'];
    $customerEmail = $row['email'];
    $customerPhone = $row['number1'];
    $shippingAddress = $row['saddress'];
    $billingAddress = $row['baddress'];
} else {
    echo "0 results";
}
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-shopping-cart"></i> Checkout</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-user"></i> Customer Information</h4>
                    <div class="form-content" style="height: 200px; padding: 15px; background-color: #fff;">
                        <!-- Customer Information (Read-only) -->
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Customer Name</label>
                            <div class="col-sm-8">
                                <p class="form-control-static"><?php echo $customerName; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email Address</label>
                            <div class="col-sm-8">
                                <p class="form-control-static"><?php echo $customerEmail; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Phone Number</label>
                            <div class="col-sm-8">
                                <p class="form-control-static"><?php echo $customerPhone; ?></p>
                            </div>
                        </div>
                        <!-- Shipping and Billing Address (Read-only) -->
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Shipping Address</label>
                            <div class="col-sm-8">
                                <p class="form-control-static"><?php echo $shippingAddress; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Billing Address</label>
                            <div class="col-sm-8">
                                <p class="form-control-static"><?php echo $billingAddress; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-shopping-cart"></i> Order Information</h4>
                    <!-- Link to the Order Information Page -->
                    <div class="form-group">
                        <a href="customer_shopping_cart.html" class="btn btn-info">View Shopping Cart</a>
                    </div>

                    <!-- Preferred Payment Method (Editable) -->
                    <div class="form-group">
                        <label>Preferred Payment Method</label>
                        <select class="form-control" name="preferredPaymentMethod">
                            <option value="creditCard">Credit Card</option>
                            <option value="paypal">PayPal</option>
                            <option value="bankTransfer">Bank Transfer</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>

                    <!-- Purchase Order Date (Non-editable and defaults to system date) -->
                    <div class="form-group">
                        <label>Purchase Order Date</label>
                        <p>Auto-generated System Date (Non-editable)</p>
                    </div>

                    <!-- Order Number (Non-editable, auto-generated) -->
                    <div class="form-group">
                        <label>Order Number</label>
                        <p>Auto-generated Order Number (Non-editable)</p>
                    </div>

                    <!-- Order Total (total cost of the purchase order) -->
                    <div class="form-group">
                        <label>Order Total</label>
                        <p>Total Cost (Non-editable)</p>
                    </div>

                    <!-- Discounts or Promotions (if applicable) -->
                    <div class="form-group">
                        <label>Discounts/Promotions</label>
                        <input type="text" class="form-control" name="discounts">
                    </div>

                    <!-- Order Status (Editable) -->
                    <div class="form-group">
                        <label>Order Status</label>
                        <input type="text" class="form-control" name="orderStatus">
                    </div>

                    <!-- Customer Notes (Any additional notes or comments provided by the customer) -->
                    <div class="form-group">
                        <label>Customer Notes</label>
                        <textarea class="form-control" name="customerNotes"></textarea>
                    </div>
                    <form class="form-group" action = "sendemail.php" method="post">
                        <div style = "display:none;">
                            Email <input class="form-control" type = "email" name="email" value="stephenlhz123@gmail.com"><br>
                            Subject <input class="form-control" type = "text" name="subject" value="Order Confirmation"><br>
                            Message <input class="form-control" type = "text" name="message" value="Thank you for shopping with us!!"><br>
                        </div>
                            <button class="btn btn-info" type="submit" name="send">Confirm Order</button><br>
                    </form>

                </div>
                
            </div>
            
        </div>
    </section>
</section>




      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT NOTIFICATION
      *********************************************************************************************************************************************************** -->      
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              &copy; 2023 SWEN90016 T08_G07 - All Rights Reserved
              <br>
              Authors: Xingyu Zhao, Haozhe Liao, Dongyu LANG, and Xuan Liu
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	<script src="js/jquery-ui.js"></script>    
    <script src="assets/js/tasks.js" type="text/javascript"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
