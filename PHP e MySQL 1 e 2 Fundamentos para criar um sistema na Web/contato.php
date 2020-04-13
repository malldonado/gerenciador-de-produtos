<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
require_once("banco-produto.php");

verificaUsuario();

?>


<form action="envia-contato.php" method="post">

<table class="table">

<tr>
  <td>Nome</td>
  <td><input type="text" name="nome" class="form-control"></td>
</tr>
<tr>
  <td>Email</td>
  <td><input type="text" name="nome" class="form-control"></td>
</tr>
<tr>
  <td>Mensagem</td>
  <td><input type="text" name="nome" class="form-control"></td>
</tr>
<tr>

  <td><button class="btn btn-outline-dark">Enviar</button></td>
</tr>

</table>

</form>


<?php include("rodape.php");?>
