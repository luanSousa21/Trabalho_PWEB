<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/index.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s6">
				<h1>Cadastrar Produto</h1><br><br>
				<form action="../Controller/produtoCadController.php" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="input-field col s6">
				          <input name="nome_prod" id="nome" type="text" class="validate" required>
				          <label for="nome_prod">Nome do Produto</label>
				        </div>
				    </div>
					<div class="row">
						<div class="input-field col s6">
				          <input name="quantidade" id="qtd" type="text" class="validate" required>
				          <label for="quantidade">Quantidade</label>
				        </div>
				    </div>
			        <br>
			        <div class="row">
				        <div class="input-field col s6">
				          <input name="preco_uni"  id="preco" type="text" class="validate" required>
				          <label for="preco_uni">Preço unitário</label>
				        </div>
			    	</div>
					<div class="row">
				        <div class="input-field col s6">
				          <input name="foto"  id="foto" type="file">
				        </div>
			    	</div>
			    	<div class="row">
				        <input class="btn waves-effect waves-light" type="submit" name="cadastrar" value="Cadastrar">
			    	</div>

				</form>

			</div>
			
		</div>

	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>
</html>