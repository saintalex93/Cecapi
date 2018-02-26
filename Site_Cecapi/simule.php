
<?php 
include_once('superior.php');
?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

	<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li class="active">Simulação</li>
	</ol>

	<div class="row">

		<!-- Article main content -->
		<article class="col-xs-12 maincontent">
			<header class="page-header">
				<h1 class="page-title text-center">Simulação</h1>
			</header>

			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body ">
						<h3 class="thin text-center">Dados para Simulação</h3>
						<p class="text-center text-muted">Digite as informações abaixo para fazer uma simulação	 </p>
						<hr>

						<form>
							<div class="row top-margin">
								<div class="col-sm-12">

									<label>Nome</label>
									<input type="text" class="form-control" id="NomeCli">
								</div>
							</div>
							<div class="row top-margin">
								<div class="col-sm-12">
									<label>CPF <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="CPFCli">
								</div>
							</div>
							<div class="row top-margin"> 
								<div class=" col-sm-6">
									<label>Telefone <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="TelFixo">
								</div>
								<div class=" col-sm-6">
									<label>Celular</label>
									<input type="text" class="form-control" id="TelCel">
								</div>
							</div>

							<div class="top-margin">
								<label>Email <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="EmailCli">
							</div>
							<div class="top-margin text-center">
								<label>Valor do Beneficio</label>
								<input type="text" class="form-control" id="VlrBenCli" name="VlrBenCli">
								<br>
							</div>


							<div class="col-sm-6 col-md-offset-3">
								<label></label>
							</div>

							<div class="row top-margin">

								<div class="text-center" style="margin-bottom: 10px;">
									<button class="btn btn-action" type="button" onclick="InsereDados()">Simular</button>
								</div>

								<div class="top-margin text-center">
									
									<label id="ValorEmprestimo" style="text-align: justify;margin: 1%;"></label>
							
									<br>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</article>
	<!-- /Article -->

</div>
</div>	<!-- /container -->


<?php 
include_once('inferior.php');
?>

</html>
<script src="assets/js/jquery.maskMoney.min.js"></script>
<script>
	$("#VlrBenCli").maskMoney({prefix:'R$', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});



</script>


<script>
	(function(){
	// document.getElementById('ValorEmprestimo').innerHTML = 'Teste';\
	// document.getElementById('ValorEmprestimo').innerText = 'Check List';

}());
</script>
