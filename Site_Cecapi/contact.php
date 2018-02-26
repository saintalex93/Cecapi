
<?php 
include_once('superior.php');
$paginaLink = $_SERVER['SCRIPT_NAME'];
?>
<!-- /.navbar -->

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

	<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li >Contatos</li>
	</ol>

	<div class="row">
		
		<!-- Article main content -->
		<article class="col-sm-9 maincontent">
			<header class="page-header">
				<h1 class="page-title">Contate Nos</h1>
			</header>
			
			<p>
				Envie uma mensagem para nós. Retornaremos o mais rapido possivel
			</p>
			<br>
			<form>
				<div class="row">
					<div class="col-sm-4">
						<input class="form-control" type="text" placeholder="Nome">
					</div>
					<div class="col-sm-4">
						<input class="form-control" type="text" placeholder="Email">
					</div>
					<div class="col-sm-4">
						<input class="form-control" type="text" placeholder="Telefone">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12">
						<textarea placeholder="Mensagem" class="form-control" rows="9"></textarea>
					</div>
				</div>
				<br>
				<div class="row">
					
					<div class="col-sm-12 text-center">
						<input class="btn btn-action" type="submit" value="Enviar">
					</div>
				</div>
			</form>

		</article>
		<!-- /Article -->
		
		<!-- Sidebar -->
		<aside class="col-sm-3 sidebar sidebar-right">

			<div class="widget">
				<h4>Endereço</h4>
				<address>
					<i class="fa fa-map-marker"></i>
					Rua Joaquim Ferrer, 410 - Jardim Vivan - São Paulo -SP - 02990-335
				</address>
				<h4>Contato</h4>
				<address>
					<p ><i class="fa fa-phone"></i> (11)4371-3717</p>
					<p ><i class="fa fa-whatsapp"></i> (11)9 4069-1063 / (11)9 8397-6827</p>
					<p><i class="fa fa-envelope-o"></i> cecapi.iho@gmail.com</p>
				</address>
			</div>

		</aside>
		<!-- /Sidebar -->

	</div>
</div>	<!-- /container -->

<section class="container-full top-space text-center">
	<div >
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1294.1012070656752!2d-46.73872581518014!3d-23.450688874140027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cefbec6229b327%3A0x67edec8cf6041a18!2sRua+Joaquim+Ferrer%2C+410+-+Jardim+Vivan%2C+S%C3%A3o+Paulo+-+SP%2C+02993-220!5e0!3m2!1spt-BR!2sbr!4v1509563728059"></iframe>
	</div>
</section>

<?php 
include_once('inferior.php');
?>




</html>