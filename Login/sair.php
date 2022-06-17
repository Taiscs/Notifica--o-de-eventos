<?php
	session_start();
	
	unset(
		$_SESSION['Id'],
	    $_SESSION['usuarioNome'], 
	    $_SESSION['perfil'], 
	);
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>