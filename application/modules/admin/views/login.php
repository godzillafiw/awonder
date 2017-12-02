<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="">
	<title>Login | Awonderled</title>
	<link rel="shortcut icon" href="<?= base_url('assets/front/images/favicon/favicon.ico')?>">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- jQuery  -->




	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="signin">
       <style type="text/css">
        html, body {
         position: relative;
         width: 100%;
         height: 100%;
       }
       body.signin {
         padding-top: 40px;
         padding-bottom: 40px;
         background-image: url('/assets/back/images/bg_login.jpg');
       }
       .form-signin {
         max-width: 330px;
         padding: 15px;
         margin: 15% auto 0 auto;
         /*padding-top: 50px; */
       }
       .form-signin .form-signin-heading, .form-signin .checkbox {
         margin-bottom: 10px;
       }
       .form-signin .checkbox {
         font-weight: normal;
       }
       .form-signin .form-control {
         position: relative;
         height: auto;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
         padding: 10px;
         font-size: 16px;
         border: none;
         border: 1px solid #d3d3d3;
         box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.08);
         -webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.08);
         -moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.08);
       }
       .form-signin .form-control:focus {
         z-index: 2;
       }
       .form-signin .btn {
         background-color: #E03C43;
         color: #fff;
         padding: 6px 30px;
       }
       footer {
         position: absolute;
         bottom: 0;
         width: 100%;
         height: 60px;
         text-align: center;
         line-height: 60px;
       }
       footer .text-muted {
         color: #AFB0B2;
       }
     </style>
     <script src="<?= base_url('assets/front/js/jquery-1.10.2.min.js') ?>"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>

     <script>
      function onSubmit(token) {
          // document.forms[0].submit();
          document.getElementById("form-signin").submit();
        }
      </script>

      <div class="container">
       <div class="col-md-4 col-md-offset-4">
        <form class="form-signin" id="form-signin" method="post">
         <div class="form-group text-center">
           <img width="200" height="200" src="<?= base_url('assets/front/images/logo-login.png')?>" alt="<?= base_url()?>">
         </div>
         <?=$this->session->flashdata('warning')?>
         <?=$this->session->flashdata('error')?>
         <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Username"   data-parsley-type="email" required autofocus>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="********" required>
        </div>
        <div class="form-group">
          <button 
          type="submit" 
          class="btn g-recaptcha"
          data-sitekey="6Lf1PzMUAAAAAN6h_0szNtOCXue-LznHKZiqCCpm"
          data-callback="onSubmit"
          size="invisible">
          Sign in
        </button>
        <button 
        type="submit" 
        class="btn g-recaptcha"
        data-sitekey="6Lf1PzMUAAAAAN6h_0szNtOCXue-LznHKZiqCCpm"
        data-callback="onSubmit"
        size="invisible">
        Sign in
      </button>
    </div>
  </form>
</div>
</div>
<footer>
	<div class="container">
		<p class="text-muted">
			Copyright <?= date('Y')?>. All Rights Reserved / Powered By Awonder Photoenergy Ltd.
		</p>
	</div>
</footer>
</body>
</html>
