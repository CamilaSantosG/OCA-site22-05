<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

/*Recebendo dados do form */

$nome = $_POST ['nome'];
$endereco = $_POST ['endereco'];
$numero = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$cep = $_POST ['cep'];
$telefone = $_POST ['telefone'];
$cpf = $_POST ['cpf'];
$rg = $_POST ['rg'];
$email = $_POST ['email'];



/*Comando para insert into*/
$sql = "INSERT INTO tb_cliente (nm_cliente, nm_endereço, nr_endereço, nm_bairro, nm_cidade, sg_estado, cd_cep, telefone, cpf, rg, email) values ('$nome','$endereco','$numero','$bairro','$cidade','$estado','$cep','$telefone','$cpf','$rg','$email')";

/*Comando para enviar os dados o banco*/
$insert = mysqli_query($conexao, $sql);


?>