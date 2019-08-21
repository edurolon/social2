<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Asolucionar - Inicio de Sesi&oacute;n</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="css/mouldifi-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

 
</head>
<body class="login-page">
<div class="login-container">
	  <div class="login-branding">
		
        <!--<a href="#" style="color:#C8C8C8; font-size:24px; font-weight:bold;"><h2><strong>Asolucionar</strong></h2></a>-->
	  </div>  
	<div class="login-content" style="background-color:#FFFFFF; border-radius: 15px 15px 15px 15px; -moz-border-radius: 15px 15px 15px 15px; -webkit-border-radius: 15px 15px 15px 15px; border: 0px solid #000000;">
    <center><img src="images/logotipo.png"></center>
		<h2 style="color:#000000"><strong>Bienvenido</strong>, ingrese su usuario y contrase&ntilde;a</h2>
		<form method="post" action="autenticacion.php">                        
			<div class="form-group">
				<input type="text" placeholder="Usuario" name="username" id="username" class="form-control">
			</div>                        
			<div class="form-group">
				<input type="password" name="password" id="password" placeholder="Contraseña" class="form-control">
			</div>
			<div class="form-group">
				 <div class="checkbox checkbox-replace">
<?php if($_GET[msje]){?><h4><strong style="color:#FF0000;">Atenci&oacute;n</strong> <span style="color:#FF0000;">,<?php echo $_GET['msje'];?></span></h4>	<?php } ?>
				  </div>
			 </div>
			<div class="form-group">
				<button class="btn btn-primary btn-block" type="submit">Ingresar</button>
			</div>
			<p class="text-center"><a href="forgot-password.html">Olvid&oacute; su contrase&ntilde;a?</a></p>                        
		</form>
	</div>
</div>
<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
