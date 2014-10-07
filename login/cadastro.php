<?php 
include('conexao/conexao.php');

	if(isset($_POST['cadastrar'])){
		$sql = mysql_query("INSERT INTO login(usuario,senha) 
					 VALUES('".$_POST['usuario']."',
					 		'".MD5($_POST['senha'])."') ") or die(mysql_error());
		if($sql){
			echo "<script>alert('Usuário cadastrado!');</script>";
			echo "<script>location.href='index.php';</script>";
		}else{
			echo "<script>alert('Erro no cadastrado!');</script>";
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
		<input maxlength="50" name="usuario" type="text" required />
		<br>
		<label>Senha: </label>
		<input type="password" name="senha" required maxlength="50" />
		<br>
		<input type="submit" name="cadastrar" value="Cadastrar" />
	</form>
</body>
</html>



