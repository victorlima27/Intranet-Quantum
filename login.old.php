<!DOCTYPE php>
<html>
<head>
	<title>Intranet SerraPark</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="Imagens/icone2.png">
	<link rel="stylesheet" type="text/css" href="Form/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Form/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Form/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Form/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Form/css/util.css">
	<link rel="stylesheet" type="text/css" href="Form/css/main.css">
	<style>
		@media screen and (min-width: 1920px) {
			.wrap-contact3{border: 3px solid grey}
		}
		@media screen and (max-width: 1600px) {
			.wrap-contact3{border: 3px solid grey;padding: 42px 55px 45px 55px;}
		}
		@media screen and (max-width: 1366px) {
			.wrap-contact3{border: 3px solid grey;padding: 42px 55px 45px 55px;}
		}
		@media screen and (max-width: 1280px) {
			.wrap-contact3{border: 3px solid grey;padding: 42px 55px 45px 55px;}
		}
	</style>
</head>
<body>
	<div class="bg-contact3" style="background-image: url('Fotos/DJI_0264.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="POST" action="check-in.php">
					<span class="contact3-form-title">
						<img src="Imagens/logoForm3.png" style="width:70%;heigth:70%;">
					</span>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="tipo" value="Administrativo" checked="checked">
							<label class="label-radio3" for="radio1">
								Administrativo
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="tipo" value="Encarregado">
							<label class="label-radio3" for="radio2">
								Encarregado
							</label>
						</div>
					</div>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text" name="usuario" placeholder="Usuário">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="password" name="senha" placeholder="Senha">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="setor">
								<?php
									
									include("conexao.php");
									$sql = "SELECT nm_nome FROM tb_departamentos";
									$setores = mysqli_query($link,$sql) or die(mysqli_error($link));
									while($linha = mysqli_fetch_array($setores)) {
										@$setor = $linha["nm_nome"];
										echo "<option value='".$setor."'>".$setor."</option>";
									}
									
								?>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>
					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn" type="submit">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="Form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Form/vendor/bootstrap/js/popper.js"></script>
	<script src="Form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Form/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="Form/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
