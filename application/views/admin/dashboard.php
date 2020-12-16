<?php
if($this->session->userdata('loggedInUserData')){
    $loggedInUserData = $this->session->userdata('loggedInUserData');
}
?>
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="description" content="">

  <meta name="author" content="">

  <!-- favicon link -->

  	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_PATH_IMAGES; ?>apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo SITE_PATH_IMAGES; ?>android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_PATH_IMAGES; ?>favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo SITE_PATH_IMAGES; ?>favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_PATH_IMAGES; ?>favicon-16x16.png">
	<link rel="manifest" href="<?php echo SITE_PATH_IMAGES; ?>manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo SITE_PATH_IMAGES; ?>ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

  <!-- favicon link end -->

  <title>Dashboard | IRO | TISS</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>skins/_all-skins.min.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->

	<script src="<?php echo SITE_PATH_JS; ?>jquery.min.js"></script>
	
  <script data-ad-client="ca-pub-8479380131239018" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">

	  	<?php $this->load->view('admin/main_header'); ?>

	  	<!-- Left side column. contains the logo and sidebar -->

	  	<?php $this->load->view('admin/main_sidebar'); ?>



	  	<!-- Content Wrapper. Contains page content -->

	  	<div class="content-wrapper">

		    <!-- Content Header (Page header) -->

		    <section class="content-header">

		      	<h1>Dashboard <small>Control panel</small></h1>

		      	<ol class="breadcrumb">

		        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

		        	<li class="active">Dashboard</li>

		      	</ol>

		    </section>



		    <!-- Main content -->

		    <section class="content">

		      	<!-- Small boxes (Stat box) -->

		      	<div class="row">

			        <div class="col-lg-3 col-xs-6">

			          <!-- small box -->

			          <div class="small-box bg-aqua">

			            <div class="inner">

			              <h3>150</h3>



			              <p>Students</p>

			            </div>

			            <div class="icon">

			              <i class="ion ion-bag"></i>

			            </div>

			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

			          </div>

			        </div>

			        <!-- ./col -->

			        <div class="col-lg-3 col-xs-6">

			          <!-- small box -->

			          <div class="small-box bg-green">

			            <div class="inner">

			              <h3>53</h3>



			              <p>Alumni</p>

			            </div>

			            <div class="icon">

			              <i class="ion ion-stats-bars"></i>

			            </div>

			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

			          </div>

			        </div>

			        <!-- ./col -->

			        <div class="col-lg-3 col-xs-6">

			          <!-- small box -->

			          <div class="small-box bg-yellow">

			            <div class="inner">

			              <h3>44</h3>



			              <p>User Registrations</p>

			            </div>

			            <div class="icon">

			              <i class="ion ion-person-add"></i>

			            </div>

			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

			          </div>

			        </div>

			        <!-- ./col -->

			        <div class="col-lg-3 col-xs-6">

			          <!-- small box -->

			          <div class="small-box bg-red">

			            <div class="inner">

			              <h3>65</h3>



			              <p>Unique Visitors</p>

			            </div>

			            <div class="icon">

			              <i class="ion ion-pie-graph"></i>

			            </div>

			            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

			          </div>

			        </div>

			        <!-- ./col -->

		      	</div>

		      	<!-- /.row -->

		      <!-- Main row -->

		      <div class="row">

		        <section class="col-lg-12 connectedSortable">



		          	<!-- All Question List -->

		          	<div class="box box-primary">

			            <div class="box-header"><i class="ion ion-clipboard"></i> <h3 class="box-title">Main Row</h3></div>

			            <!-- /.box-header -->

			            <div class="box-body">

			              

			            </div>

			            <!-- /.box-body -->

		          	</div>

		          	<!-- /.box -->



		        </section>

		      </div>

		      <!-- /.row (main row) -->

		      <div class="row">
		      	<div class="col-md-12">
		      		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- yoursolution admin dashboard -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-8479380131239018"
					     data-ad-slot="2283965871"
					     data-ad-format="auto"
					     data-full-width-responsive="true"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
		      	</div>
		      </div>



		    </section>

		    <!-- /.content -->

	 	</div>

	  	<!-- /.content-wrapper -->

	  	<footer class="main-footer">

		    <div class="pull-right hidden-xs">

		      <b>Version</b> 2.4.0

		    </div>

		    <strong>Copyright &copy; 2020-<?php echo date('Y'); ?> <a href="http://yoursolution.co.in">Sai Atpadkar</a>.</strong> All rights reserved.

	  	</footer>

	</div>

	<!-- ./wrapper -->





<!-- jQuery UI 1.11.4 -->

<script src="<?php echo SITE_PATH_JS; ?>jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button);

</script>

<!-- Bootstrap 3.3.7 -->

<script src="<?php echo SITE_PATH_JS; ?>bootstrap.min.js"></script>

<!-- Sparkline -->

<script src="<?php echo SITE_PATH_JS; ?>jquery.sparkline.min.js"></script>

<!-- Slimscroll -->

<script src="<?php echo SITE_PATH_JS; ?>jquery.slimscroll.min.js"></script>

<!-- FastClick -->

<script src="<?php echo SITE_PATH_JS; ?>fastclick.js"></script>

<!-- AdminLTE App -->

<script src="<?php echo SITE_PATH_JS; ?>adminlte.min.js"></script>

</body>

</html>

