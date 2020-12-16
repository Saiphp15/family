<?php
if($this->session->userdata('loggedInUserData')){
    $loggedInUserData = $this->session->userdata('loggedInUserData');
}
?>
<header class="main-header">

		    <!-- Logo -->

		    <a href="" class="logo">

		      <!-- mini logo for sidebar mini 50x50 pixels -->

		      <span class="logo-mini"><b>A</b>LT</span>

		      <!-- logo for regular state and mobile devices -->

		      <span class="logo-lg"><b>Admin</b>LTE</span>

		    </a>

		    <!-- Header Navbar: style can be found in header.less -->

		    <nav class="navbar navbar-static-top">

		      	<!-- Sidebar toggle button-->

		      	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

		        	<span class="sr-only">Toggle navigation</span>

		      	</a>

		      	<div class="navbar-custom-menu" >
			        <ul class="nav navbar-nav" >
			          
			          <!-- User Account: style can be found in dropdown.less -->
			          <li class="dropdown user user-menu" >
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			              	<img src="<?php echo SITE_PATH_IMAGES; ?>avatar3.png" class="user-image" alt="User Image">
			              	<span class="hidden-xs" >
			              		<?php 
			              		if(isset($loggedInUserData['userName']) && !empty($loggedInUserData['userName'])){ 
			              		 	echo $loggedInUserData['userName'];  
			              		} 
			              		?>
					      	</span>
			            </a>
			            <ul class="dropdown-menu" >
			              <!-- User image -->
			              <li class="user-header">
			                <img src="<?php echo SITE_PATH_IMAGES; ?>avatar3.png" class="img-circle" alt="User Image">
			                <p>
			                  	<?php if(isset($loggedInUserData['userName']) && !empty($loggedInUserData['userName'])){ ?>
					          		<p><?php echo $loggedInUserData['userName']; ?></p>
					      		<?php } ?>
			                </p>
			              </li>
			              <!-- Menu Footer-->
			              <li class="user-footer">
			                <div class="pull-right">
			                  <a href="<?php echo base_url('super-admin-logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
			                </div>
			              </li>
			            </ul>
			          </li>
			          
			        </ul>
			      </div>

		    </nav>

	  	</header>