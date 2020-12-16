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

  <title>Add New Announcement | IRO | TISS</title>

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

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>skins/_all-skins.min.css">

  <!-- Sweetalert css -->

  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>sweetalert.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  	<style type="text/css">

		.error0, .error001, .error1, .error2, .error3, .error4, .error5, .error6, .error7, .error8, .error9, .error10, .error11, .error12, .error13, .error14, .error15, .error16, .error17, .error18, .error19, .error20, .error21, .error22, .error23, .error24, .error25, .error26, .error27, .error28, .error29, .error30, .error31, .error32, .error33, .error34, .error35, .error36, .error37,.error38,.error39,.error40,.error41{

			color: #ff0000;

		}

	</style>

</head>

<body class="hold-transition skin-blue sidebar-mini">

	<div class="modal fade loader" id="modal-default" >

      <div class="modal-dialog modal-xs" style="width: 30%;border:none;background: #ffffff;box-shadow: 0 1px 1px rgba(0,0,0,0.1);">

        <div class="modal-content">

          <div class="modal-body text-center">

            <div class="overlay">

              <i class="fa fa-refresh fa-spin" style="font-size: 10em;"></i>

            </div>

          </div>

        </div>

        <!-- /.modal-content -->

      </div>

      <!-- /.modal-dialog -->

    </div>

    <!-- /.modal -->

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

		        	<li class="active">Add New Announcement</li>

		      	</ol>

		    </section>



		    <!-- Main content -->

		    <section class="content">

		      	<div class="row">

			        <div class="col-xs-12">

			          	<div class="box">

				            <div class="box-header">

				              <h3 class="box-title">Add New Announcement</h3>

				            </div>

				            <!-- /.box-header -->

				            <div class="box-body">



				              	<form action="<?php echo base_url('save-announcement'); ?>" method="POST" name="add_new_announcement_form" id="add_new_announcement_form" enctype="multipart/form-data">

				              		<div class="form-group">

				              			<label for="">Announcement Title <span style="color:red;">*</span></label>

				              			<input type="text" name="title" id="title" class="form-control" placeholder="Enter Announcement Title" data-error='.error1'>

				              			<div class="error1"></div>

				              		</div>

				              		<div class="form-group">

				              			<label for="">Announcement Short Description <span style="color:red;">*</span></label>

				              			<textarea name="short_desc" id="short_desc" class="form-control" placeholder="Enter Announcement Short Description" data-error='.error2'></textarea>

				              			<div class="error2"></div>

				              		</div>

				              		<div class="form-group">

				              			<label for="">Status</label>

				              			<select name="status" id="status" class="form-control" data-error='.error3' >
				              				<option value="">Select Status</option>
				              				<option value="1">Active</option>
				              				<option value="2">Inactive</option>
				              			</select>

				              			<div class="error3"></div>

				              		</div>

				              		<div class="form-group">

				              			<button type="submit" name="submit" class="btn btn-success">Submit</button>

				              			<button type="reset" class="btn btn-default">Reset</button>

				              		</div>

				              	</form>



				            </div>

				            <!-- /.box-body -->

			          	</div>

			          	<!-- /.box -->



			        </div>

			        <!-- /.col -->

		      	</div>

		      	<!-- /.row -->

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



<!-- jQuery 3 -->

<script src="<?php echo SITE_PATH_JS; ?>jquery.min.js"></script>

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

<!-- Jquery Validator Plug In -->

<script src="<?php echo SITE_PATH_JS; ?>jquery-validate.js"></script>

<script src="<?php echo SITE_PATH_JS; ?>form-validation.js"></script>

<!-- Sweetalert for customized alerts -->

<script src="<?php echo SITE_PATH_JS; ?>sweetalert.min.js"></script>

<!-- Common functionality Js Files  -->

<script src="<?php echo SITE_PATH_JS; ?>common.js"></script>

<script src="<?php echo SITE_PATH_JS; ?>ajax-call.js"></script>

</body>

</html>

