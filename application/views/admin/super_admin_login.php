
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IRO | TISS | Super Admin Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="National University of Student's Skills Development,nussd,tiss" />
  <script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
  </script>
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

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>skins/_all-skins.min.css">
  <!-- Sweetalert css -->
  <link rel="stylesheet" href="<?php echo SITE_PATH_CSS; ?>sweetalert.css">

  <link href="<?php echo SITE_PATH_CSS.'jquery-ui.css'?>" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Super Admin Login | IRO | TISS</b>
  </div>
  <?php if($this->session->flashdata('session_expire_msg')) { ?>
    <center><h4 style="color:red;"><?php echo $this->session->flashdata('session_expire_msg'); ?></h4></center>
  <?php } ?>

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

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><strong>Super Admin Login</strong></p>
    <form action="<?php echo base_url('chk-super-admin-login'); ?>" id="super_admin_login_form" name="super_admin_login_form" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" data-error=".errorTxt1" class="form-control" placeholder="Enter Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="errorTxt1"></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" data-error=".errorTxt2" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="errorTxt2"></div>
      </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <div class="col-xs-4"><button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></div>
      </div>
      
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script src="<?php echo JWT_TOKEN_URL; ?>"></script>
<script src="<?php echo SITE_PATH_JS;?>jquery.min.js"></script>
<script src="<?php echo SITE_PATH_JS;?>bootstrap.min.js"></script>
  <!-- Jquery Validator Plug In -->
<script src="<?php echo SITE_PATH_JS?>jquery-ui.min.js"></script>
<!-- Jquery Validator Plug In -->
<script src="<?php echo SITE_PATH_JS; ?>jquery-validate.js"></script>
<script src="<?php echo SITE_PATH_JS; ?>form-validation.js"></script>
<!-- Sweetalert for customized alerts -->
<script src="<?php echo SITE_PATH_JS; ?>sweetalert.min.js"></script>
<script>

$(document).ready(function(){

  //submited super admin login form
  $("#super_admin_login_form").on('submit',(function(e) {
    var isvalidate = $("#super_admin_login_form").valid();
    if (!isvalidate) {
      return false;
    }else{
      $(".loader").modal();
        e.preventDefault();

        $(".loader").modal();

        // Get form
        var form = $('#super_admin_login_form')[0];

        // Create an FormData object 
        var requestData = new FormData(form);

        var action_page     = $("#super_admin_login_form").attr('action');

        console.log(requestData);
        // processData & contentType should be set to false
        $.ajax
        ({
          url: action_page,       // Url to which the request is send
          type: "POST",             // Type of request to be send, called as method
          enctype: 'multipart/form-data',
          data: requestData,      // Data sent to server, a set of key/value pairs (i.e. form fields and values)
          contentType: false,       // The content type used when sending data to the server.
          cache: false,             // To unable request pages to be cached
          processData:false,        // Important! To send DOMDocument or non processed data file it is set to false
          timeout: 600000,
          success: function(resp){  // A function to be called if request succeeds

            $('.loader').modal('toggle');
            resp = JSON.parse(resp);
            console.log(resp);

            if(resp.stutusCode == 200){
              window.location.href = resp.redirectUrl;
            }else{
              swal({title: "Fail", text: resp.stutusMessage, type: "error"});
            }
          }
        });
      }
  }));


  $("#super_admin_login_form").validate({
      rules: {
          email: {
              required: true,
              email: true
          },
          password: {
              required: true
          }
      },
      //For custom messages
      messages: {

      },
      debug: true,
      errorElement: 'span',
      errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if(placement) {
              $(placement).append(error)
          } else {
              error.insertAfter(element);
          }
      }
  });

});

</script>
</body>
</html>
