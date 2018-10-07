<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>I</b>M</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Inventory</b>Managment</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown user user-menu">
							<a href="#"><i class="fa  fa-sign-out"></i>Sign Out</a>
						</li>
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#"><i class="fa fa-gears"></i> Settings</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<div>
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li class="active">
						<a href="<?php base_url();?>">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-shopping-basket"></i> <span>Sales</span>
							<span class="pull-right-container" style="padding-right:15px;">
								<small class="label pull-right bg-yellow">12</small>
							</span>
							<span class="pull-right-container">

								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/add_new_sale.php"><i class="fa fa-circle-o"></i> Add New Sale</a></li>
							<li><a href="assets/pages/sales/today_sale.php"><i class="fa fa-circle-o"></i> Today Sale</a></li>
							<li><a href="assets/pages/sales/list_of_today_sale.php"><i class="fa fa-circle-o"></i> List of Today Sale</a></li>
							<li><a href="assets/pages/sales/return_product.php"><i class="fa fa-circle-o"></i> Return Product</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Invoice</span>
							<span class="pull-right-container" style="padding-right:15px;">
								<small class="label pull-right bg-red">10</small>
							</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/add_new_sale.php"><i class="fa fa-circle-o"></i> Add New Invoice</a></li>
							<li><a href="assets/pages/sales/list_of_today_sale.php"><i class="fa fa-circle-o"></i> List of Invoice</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Logistics</span>
							<span class="pull-right-container" style="padding-right:15px;">
								<small class="label pull-right bg-blue">10</small>
							</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Create Delivery Voucher</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Today Delivery List</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Delivery Voucher List</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Today Receive List</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Today Voucher List</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Delivery</span>
							<span class="pull-right-container" style="padding-right:15px;">
								<small class="label pull-right bg-green">9</small>
							</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Create Delivery</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List of Delivery </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Create Delivery Brach</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List of Branch</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Products</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Product</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List of Product </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Print Barcode/Label</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Inventory</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Inventory</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Adjustment </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Adjustment List</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Transfer</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Transfer</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List Of Transfer </a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Purchases</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Purchases</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List Of Purchases </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Purchases Return</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Purchases</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Purchases</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List Of Purchases </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Purchases Return</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Cashbook</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Account</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List Of Account </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Opening Blance</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Transfer Blance</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Transfer History</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Transaction History</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Balance Statement</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Non Invoice Amount</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Expenses</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Expenses</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List Of Expenses </a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Client</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Client</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List Of Client </a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Suppliers</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Add New Suppliers</a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> List Of Suppliers </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Suppliers Payment </a></li>
							<li><a href="assets/pages/sales/"><i class="fa fa-circle-o"></i> Payment Report</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Report</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-folder"></i> Date Wise Transfers Report</a></li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Sales
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Date Wise Sales Report</a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Date Wise Total Sales<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Customer Wise Sales Report<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Details Sales Report<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Returned Report<span class="pull-right-container"></i></span></a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Purchase
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Date Wise Purchase Report</a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Supplier Wise Purchase<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Details Wise Purchase<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Date Wise Supplier<span class="pull-right-container"></i></span></a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Client
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Client Ledger</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Supplier
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Supplier Ledger</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Payment
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Payment Collection</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Inventory
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> All Inventory Report</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Item Wise Inventory Report</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Expense
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> All Expense Report</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Head Expense Report</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Expense Report</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Summary
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Daily Summary Report</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Lgistict
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Delivery Report</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Receive Report</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Details Report</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Profit/Loss
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Profit/Loss</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Account Statement</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Setting</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> User Management
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Date Wise Sales Report</a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> List Of User<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Add new User<span class="pull-right-container"></i></span></a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Expense Headings
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> Add New Head</a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> List Of Head<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Add New Sub Head<span class="pull-right-container"></i></span></a></li>
									<li class="treeview"><a href="#"><i class="fa fa-folder"></i> LIst Of Sub Head<span class="pull-right-container"></i></span></a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Product Categories
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> List Of Categories</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Add New Categories</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Warehouse
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-folder"></i> List Of Warehouses</a></li>
									<li><a href="#"><i class="fa fa-folder"></i> Add New Warehouses</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-folder"></i> Other Income Source
									<span class="pull-right-container">
									</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
				</div>
			</section>
			<!-- /.sidebar -->
			==============================
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			<!-- extarnal page add -->
			<?php echo "$admin_main_content"?>
			<!-- extarnal page add -->

		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.1.0
			</div>
			<strong>Copyright &copy; 2014-2018 <a href="https://iatlbd.com">IAT</a>.</strong> All rights
			reserved.
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button);

	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="assets/bower_components/raphael/raphael.min.js"></script>
	<script src="assets/bower_components/morris.js/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="assets/bower_components/moment/min/moment.min.js"></script>
	<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="assets/dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="assets/dist/js/demo.js"></script>
</body>

</html>
