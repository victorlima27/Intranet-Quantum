<?php
	session_start();
	switch($credentials){
		case "basic_credentials":
			if(!isset($_SESSION["nr_idUsuario"])){
				echo "<script>alert('Você deve estar conectado(a) para acessar esta página.');window.location='Index.php';</script>";
			}
		break;
		#case "leilao_credentials":
		#	if(!isset($_SESSION["nr_idUsuario"]) || !isset($_SESSION["id_leilao"])){
		#		echo "<script>alert('Acesso negado.');window.location='../Index.html';</script>";
		#	}
		#break;
		case "logged_in":
			echo 
			"<script>
				if(confirm('Você já está conectado(a). Deseja sair?')){window.location = 'logout.php';}
				else{window.location = 'Index.php';}
			</script>";
		break;
	}
?>