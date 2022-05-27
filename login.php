<!DOCTYPE php>
<html>
<head>
	<title>Suporte Quantum</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="Imagens/Icon2.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Form/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Form/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Form/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Form/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Form/css/util.css">
	<link rel="stylesheet" type="text/css" href="Form/css/main.css">
	<style>
	</style>
</head>
<body>
	<div class="bg-contact3" style="background-image: url('Imagens/Back.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="POST" action="check-in.php">
					<span class="contact3-form-title">
						<img src="Imagens/Logo.png" style="width:90%;"/>
						<!-- <img src="Imagens/Logo25.png" style="width:0%;"/> -->
					</span>
					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="tipo" value="Administrativo" checked="checked">
							<label class="label-radio3" for="radio1">
								Administrativo
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="tipo" value="Analista">
							<label class="label-radio3" for="radio2">
								Analista
							</label>
						</div>
					</div>
					
					<div class="wrap-input3 validate-input" style="margin-top:35px;">
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

</body>
</html>
