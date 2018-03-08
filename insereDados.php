<?php 

$connection = mysqli_connect('localhost','root','macaco22','Cecapi') or die;

$insereCliente = "INSERT INTO CLIENTE (NOME, CPF, TELEFONE_FIXO, TELEFONE_CELULAR, EMAIL, VALOR) VALUES ('$_GET[NomeCliente]','$_GET[CPFCli]','$_GET[TelFixo]','$_GET[TelCel]','$_GET[EmailCli]',$_GET[VlrBenCli])";

$insereCliente = str_replace("''", "NULL", $insereCliente);

if(mysqli_query($connection,$insereCliente)){

	echo "Inserido com sucesso";
}
else{

	echo "Algo está errado";
}

?>