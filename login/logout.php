<?php 
	session_start(); //Iniciar
	session_destroy(); //Destruir Sessão
	echo "<script>location.href='index.php';</script>";
?>