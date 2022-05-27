<?php
  
  #$credentials = "logged_in";
  #include "auth.php";
  #unset($credentials);
  
  include("conexao.php");
  @$usuarioPost = $_POST["usuario"];
  @$usuario = addslashes($usuarioPost);
  @$senhaPost = $_POST["senha"];
  @$senha = addslashes($senhaPost);
  @$tipoUsuarioForm = $_POST["tipo"];
  @$setor = $_POST["setor"];
  #$email = md5($email);
  #$senha = md5($senha);  
  
  $sql = "SELECT * FROM tb_usuario WHERE nm_login = '$usuario' AND nm_senha = '$senha'";
  $loggable = mysqli_query($link,$sql) or die(mysqli_error($link));
  if($row = mysqli_fetch_array($loggable)) {
    session_start();
	@$tempoLimite = 300;
	$_SESSION["registro"] = time();
	$_SESSION["limite"] = $tempoLimite;
	$_SESSION["segundos"] = 0;
    $_SESSION["nr_idUsuario"] = $row["nr_idUsuario"];
    $idBanco = $row["nr_idUsuario"];
    $_SESSION["nm_nome"] = $row["nm_nome"];
    @$nomeBanco = $row["nm_nome"];
    @$tipoUsuarioBanco = $row["nm_tipoUsuario"];
    if ($tipoUsuarioForm == 'Analista') {
      if ($tipoUsuarioForm == $tipoUsuarioBanco){
        $checkSetor = "SELECT nm_nome FROM tb_departamentos WHERE nr_idEncarregado = '$idBanco'";
        $check = mysqli_query($link,$checkSetor) or die(mysqli_error($link));
        if($chk = mysqli_fetch_array($check)) {
          @$setorBanco = $chk["nm_nome"];
          if($setor == $setorBanco) {
            $_SESSION["nm_setor"] = $chk["nm_nome"];
            // echo "<script>window.location='Painel/Usuario/painel.php'</script>";
            // echo "<script>window.location='dashboard.php'</script>";
            echo "<script>window.location='Painel/Analista/dashboard.php'</script>";
          }
          if ($setor != $setorBanco){
            @$verificaSetores = "SELECT nm_nome FROM tb_departamentos WHERE nr_idEncarregado = '$idBanco'";
            @$verificaSet = mysqli_query($link,$verificaSetores) or die(mysqli_error($link));  
            while($verS = mysqli_fetch_array($verificaSet)) {
              @$setorUser = $verS["nm_nome"];
              if($setorUser == $setor){
                $_SESSION["nm_setor"] = $setorUser;
                // echo "<script>window.location='Painel/Usuario/painel.php'</script>";
                // echo "<script>window.location='dashboard.php'</script>";
                echo "<script>window.location='Painel/Analista/dashboard.php'</script>";
              }
            }
            echo "<script>alert('O setor informado est\u00e1 incorreto. Tente novamente.');</script>";
            echo "<script>window.location='login.php'</script>";
          }
        }
        else{
		  $checkSetor2 = "SELECT nm_nome FROM tb_departamentos WHERE nr_idSuplente = '$idBanco'";
          $check2 = mysqli_query($link,$checkSetor2) or die(mysqli_error($link));
		  if($chk2 = mysqli_fetch_array($check2)) {
			@$setorBanco2 = $chk2["nm_nome"];
            if($setor == $setorBanco2) {
              $_SESSION["nm_setor"] = $chk2["nm_nome"];
              // echo "<script>window.location='Painel/Usuario/painel.php'</script>";
              // echo "<script>window.location='dashboard.php'</script>";
              echo "<script>window.location='Painel/Analista/dashboard.php'</script>";
            }
			if ($setor != $setorBanco2){
              @$verificaSetores2 = "SELECT nm_nome FROM tb_departamentos WHERE nr_idSuplente = '$idBanco'";
              @$verificaSet2 = mysqli_query($link,$verificaSetores2) or die(mysqli_error($link));  
              while($verS2 = mysqli_fetch_array($verificaSet2)) {
                @$setorUser2 = $verS2["nm_nome"];
                if($setorUser2 == $setor){
                  $_SESSION["nm_setor"] = $setorUser2;
                  // echo "<script>window.location='dashboard.php'</script>";
                  echo "<script>window.location='Painel/Analista/dashboard.php'</script>";
                }
            }
            echo "<script>alert('O setor informado est\u00e1 incorreto. Tente novamente.');</script>";
            echo "<script>window.location='login.php'</script>";
            }
		  }
		  else{
            echo "<script>alert('O usu\u00e1rio inserido n\u00e3o \u00e9 Analista de nenhum setor. Tente novamente.');</script>";
            echo "<script>window.location='login.php'</script>";
		  }
        }
        
      }
      if ($tipoUsuarioForm != $tipoUsuarioBanco){
        echo "<script>alert('O usu\u00e1rio inserido n\u00e3o \u00e9 um Analista. Tente Novamente.');</script>";
        echo "<script>window.location='login.php'</script>";
      }
    }
    if ($tipoUsuarioForm == 'Administrativo'){
      if ($tipoUsuarioForm == $tipoUsuarioBanco){
        // echo "<script>window.location='Painel/Administrador/painel.php'</script>";
        echo "<script>window.location='indisponivel.php'</script>";
      }
      if ($tipoUsuarioForm != $tipoUsuarioBanco){
        echo "<script>alert('O usu\u00e1rio inserido n\u00e3o \u00e9 um Administrador. Tente Novamente.');</script>";
        echo "<script>window.location='login.php'</script>";
      }
    }
  }
  else {
    echo "<script>alert('Usu\u00e1rio e/ou senha inv\u00e1lidos!');</script>";
    echo "<script>window.location='login.php'</script>";
  }
  
?>