<?php require_once("cabecalho.php");
require_once("logica-usuario.php");

?>

<?php if(usuarioEstaLogado()) {?>
<p class="text-success">Você está logado como <?= usuarioLogado()?></p>
<?php } else  {?>

<?php

require_once("logo-suporte.php");
 ?>

<form action="login.php" method="post">
	<table class="table">

		<div id="form-control" class="col-md-5 mb-3">
			<label for="validationServer01">Seu endereço de email</label>
			<input type="email" placeholder="Email" name="email" class="form-control" required>

		</div>
		<div  id="form-control" class="col-md-5 mb-3">
			<label for="validationServer01">Senha</label>
			<input type="password" placeholder="Senha" name="senha" class="form-control" required>

		</div>
		<button class="btn btn-outline-dark">Login</button>

	</table>
</form>

<?php } ?>

<?php include("rodape.php");?>
