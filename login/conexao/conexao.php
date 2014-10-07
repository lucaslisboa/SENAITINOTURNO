<?php 
	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db("login",$con);
	
	if(!$db){
		echo "Banco de dados não foi encontrado!";
	}
?>