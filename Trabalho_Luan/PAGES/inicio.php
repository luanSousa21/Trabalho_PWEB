<?php
require_once('../comum/layout.php');
require_once('../conf/conectaBD.php');
?>
    <div class="barra1">
		<div class="texto1">
			Lista de usuários
		</div>
	</div>
	<div class="linha"></div>
	<div class="barra2">
		<input id="campoPesquisa" type="text" name="#" placeholder="Digite o que deseja pesquisar....">
		<div id="buttons">
			<button class="btn" style="background-color: green;">Novo</button>
			<button class="btn" style="background-color: orange;">Editar</button>
			<button class="btn" style="background-color: red;">Excluir</button>
		</div>
	</div>
	<div class="corpo">

		<?php
			$con = conecta();
			$sql = "SELECT count(1) as quantidade From produto";

			$qtd = $con->query($sql);
			$val = mysqli_fetch_array($qtd);
			fechaDB($con);
			echo "Existem ".$val['quantidade']." Produtos no catalogo";

		?>

    </div>

        
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>