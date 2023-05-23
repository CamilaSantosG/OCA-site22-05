<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

/*Recebendo dados do form */

$login = $_POST ['login'];
$senha = $_POST ['senha'];

$sql = "SELECT * FROM usuarios where login='$login'";
$seach = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($seach);

/*Confirir dados e iniciar sessão */

$senhabanco = $array['senha'];

if($senhabanco == $senha) {
    header('Location: \sistema\cadastro_cliente.php');
}
else{
    header('Location: Login.php?msg=1');
    mysql_close();
}

?>