function InsereDados(){

	var simuleJa = new XMLHttpRequest();

	with(simuleJa){

		var NomeCliente = document.getElementById('NomeCli').value;
		var CPFCli = document.getElementById('CPFCli').value;
		var TelFixo = document.getElementById('TelFixo').value;
		var TelCel = document.getElementById('TelCel').value;
		var EmailCli = document.getElementById('EmailCli').value;
		var VlrBenCli = document.getElementById('VlrBenCli').value.replace('R$','').replace('.','').replace(',','.');


		open('GET', './insereDados.php?NomeCliente='+NomeCliente+'&CPFCli='+CPFCli+'&TelFixo='+TelFixo+'&TelCel='+TelCel+'&EmailCli='+EmailCli+'&VlrBenCli='+VlrBenCli);
		
		send();

		onload = function(){


			if(responseText == 'Inserido com sucesso'){

				var calculoMargem = (VlrBenCli*30)/100;
				var calculoEmprestimo = parseFloat(calculoMargem/0.02800);


				calculoEmprestimo = calculoEmprestimo.toFixed(2).replace('.',',');

				// calculoEmprestimo.replace('.',',')

				// calculoEmprestimo = calculoEmprestimo.replace('.','.');

				document.getElementById('ValorEmprestimo').innerText =  "Com o valor de seu beneficio você tem disponivel para emprestimos consignado o valor de R$"+calculoEmprestimo+'. Aproveite essa oportunidade e entre em contato conosco já.';

			}

			else {

				document.getElementById('ValorEmprestimo').innerText = "Insira todas as informações para que possa fazer o calculo.";

			}
			
		}

	}
}



