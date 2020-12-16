<?php
if($this->session->userdata('loggedInUserData')){
    $loggedInUserData = $this->session->userdata('loggedInUserData');
}
?>
<aside class="main-sidebar">

		    <!-- sidebar: style can be found in sidebar.less -->

		    <section class="sidebar">

		      	<!-- Sidebar user panel -->

		      	<div class="user-panel">

			        <div class="pull-left image">

			          <img src="<?php echo SITE_PATH_IMAGES; ?>avatar3.png" class="img-circle" alt="User Image">

			        </div>

			        <div class="pull-left info">

			        	<?php if(isset($loggedInUserData['userName']) && !empty($loggedInUserData['userName'])){ ?>
			          		<p><?php echo $loggedInUserData['userName']; ?></p>
			      		<?php } ?>

			          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

			        </div>

		      	</div>

		      	<!-- sidebar menu: : style can be found in sidebar.less -->

		      	<ul class="sidebar-menu" data-widget="tree">

			        <li class="header">MAIN NAVIGATION</li>

			        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
			        <li class="treeview" >
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span wfd-id="337">Home Page Management</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo base_url('add-new-slider-image/add'); ?>"><i class="fa fa-circle-o"></i> add new slider image</a></li>
			            <li><a href="<?php echo base_url('view-all-slider-images'); ?>"><i class="fa fa-circle-o"></i> view all slider images</a></li>
			            <li><a href="<?php echo base_url('add-new-announcement/add'); ?>"><i class="fa fa-circle-o"></i> add new announcement</a></li>
			            <li><a href="<?php echo base_url('view-all-announcements'); ?>"><i class="fa fa-circle-o"></i> view all announcements</a></li>
			            <li><a href="<?php echo base_url('add-new-upcomig-event/add'); ?>"><i class="fa fa-circle-o"></i> add new upcomig event</a></li>
			            <li><a href="<?php echo base_url('view-all-upcomig-events'); ?>"><i class="fa fa-circle-o"></i> view all upcomig events</a></li>
			            <li><a href="<?php echo base_url('add-new-imp-date/add'); ?>"><i class="fa fa-circle-o"></i> add new Imp Date</a></li>
			            <li><a href="<?php echo base_url('view-all-imp-dates'); ?>"><i class="fa fa-circle-o"></i> view all Imp Dates</a></li>
			          </ul>
			          
			        </li>

			        <li class="header">LABELS</li>

			        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>

			        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>

			        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>

		      	</ul>

		    </section>

		    <!-- /.sidebar -->

	  	</aside>