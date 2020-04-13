<?php require_once("cabecalho.php");
require_once("banco-produto.php");

require_once("logica-usuario.php");


verificaUsuario();


 ?>


<?php if(isset($_SESSION["success"])) { ?>
<p class="alert-success"><?= $_SESSION["success"]?></p>
<?php
unset($_SESSION["success"]);
}?>


<table class="table table-striped table-bordered">
	<?php
	$produtos = listaProdutos($conexao);
	foreach ($produtos as $produto) { ?>

	<tr>
		<td>
			<?= $produto['nome'] ?>
		</td>
		<td>
			<?=	$produto['preco']?>
		</td>
		<td>
			<?=	substr($produto['descricao'], 0, 40)?>
		</td>
		<td>
			<?= $produto['categoria_nome']?>
		</td>
		<td>
			<form action="produto-altera-formulario.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<button class="btn btn-primary">Alterar</button>
			</form>
		</td>
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<button class="btn btn-danger" class="text-danger">Remover</button>
			</form>
		</td>
	</tr>

	<?php
}

?>
</table>
<?php include("rodape.php");?>
