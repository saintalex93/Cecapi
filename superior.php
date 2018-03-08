<?php
$url = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">
<head>

	
	<title>Cecapi</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/InsereDados.js"></script>

</head>

<body class="home">
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" style="width: 60px;"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li <?php if ($url == 'index.php') {echo 'class="active"';}?>><a href="index.php">Home</a></li>
					<li <?php if ($url == 'about.php') {echo 'class="active"';}?>><a href="about.php">Empresa</a></li>
					<li <?php if ($url == 'contratoNovo.php') {echo 'class="active"';}?>><a href="contratoNovo.php">Crédito Consignado</a></li>
					<li <?php if ($url == 'contact.php') {echo 'class="active"';}?>><a href="contact.php">Contatos</a></li>
					<li <?php if ($url == 'simule.php') {echo 'class="active"';}?>><a href="simule.php">Simule já</a></li>

					
				</ul>
			</div>
		</div>
	</div> 
