<?php 

session_start();

include('conexao/conexao.php'); 

if(isset($_SESSION['logar'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>
	<div>Você está conectado com o usuario 
	<?php echo $_SESSION['nome']; ?> 
	<a href="logout.php">Logout</a></div>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Usuário</td>
			<td>Senha</td>
		</tr>
		<?php 

			$sql = mysql_query("SELECT * FROM login");
			while ($dados_login = mysql_fetch_array($sql)) {
				/*$media = ($dados_login['nota1'] + $dados_login['nota2'])/2;

				if($media >= 7){
					$result = "Aprovado! <br>";
				}else{
					$result = "Reprovado! <br>";
				}*/

				echo "
					<tr>
						<td>".$dados_login['id']."</td>
						<td>".$dados_login['usuario']."</td>
						<td>".$dados_login['senha']."</td>
					</tr>
				";
			}
		?>
	</table>
</body>
</html>
<?php 
	}else{
		echo "<script>alert('Acesso Negado!');</script>";
		echo "<script>location.href='index.php';</script>";
	} 
?>