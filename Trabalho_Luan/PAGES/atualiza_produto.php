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
				<h1>Cadastrar</h1><br><br>
				<form action="../Controller/attProdutoController.php" method="POST" enctype="multipart/form-data">
                    <?php
                        require_once('../conf/conectaBD.php');
                        $con = conecta();

                        $produto = array('id' =>'', 'nome_prod' =>'', 'quantidade' =>'', 'preco_unitario' =>'','img_produto' =>'');
                        $sql = "SELECT id, nome_prod, quantidade, preco_unitario, img_produto From produto where id = ".$_GET['id'];
                        $datas = $con->query($sql);
                        $produto = mysqli_fetch_array($datas);
                        fechaDB($con);
                    ?>
                    <input type="hidden" name="id" value="<?php echo $produto['id']?>">
					<div class="row">
						<div class="input-field col s6">
				          <input name="nome_prod" id="nome" type="text" class="validate" value ="<?php echo $produto['nome_prod'];?>">
				          <label for="nome_prod">Nome do Produto</label>
				        </div>
				    </div>
					<div class="row">
						<div class="input-field col s6">
				          <input name="quantidade" id="qtd" type="text" class="validate" value ="<?php echo $produto['quantidade'];?>">
				          <label for="quantidade">Quantidade</label>
				        </div>
				    </div>
			        <br>
			        <div class="row">
				        <div class="input-field col s6">
				          <input name="preco_uni"  id="preco" type="text" class="validate" value ="<?php echo $produto['preco_unitario'];?>">
				          <label for="preco_uni">Preço unitário</label>
				        </div>
			    	</div>
					<div class="row">
				        <div class="input-field col s6">
				          <input name="foto"  id="foto" type="file"  value ="<?php echo $produto['img_produto'];?>">
				          <label for="foto">Foto</label>
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