<?php 

	session_start(); //Inicia a sessão

	include('conexao/conexao.php');

	if(isset($_POST['logar'])){
		$sql = mysql_query("SELECT * FROM login
							WHERE usuario = '".$_POST['usuario']."'
							AND senha = '".MD5($_POST['senha'])."' ") or die(mysql_error());

		if(mysql_num_rows($sql) > 0){
			echo "<script>alert('Usuário logado!');</script>";
			$_SESSION['logar'] = 1;
			//$dados = mysql_fetch_array($sql);
			$_SESSION['nome'] = $_POST['usuario'];
			echo "<script>location.href='lista.php';</script>";
		}else{
			echo "<script>alert('Usuário ou senha inválido.');</script>";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Meu primeiro Login</title>
</head>
<body>
	<form method="POST" name="form-login" action="">
		<label>Usuário: </label>
		<input maxlength="50" name="usuario" type="text" required="required" />
		<br>
		<label>Senha: </label>
		<input type="password" name="senha" required="required" maxlength="50" />
		<br>
		<input type="submit" name="logar" value="Logar" />
	</form>
	Não tem cadastro? cadastre-se <a href="cadastro.php">aqui</a>.
</body>

</html>