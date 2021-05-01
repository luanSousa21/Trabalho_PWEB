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
				<h1>Atualizar</h1><br><br>
				<form action="../Controller/attUsuarioController.php" method="POST">

                    <?php
                        require_once('../conf/conectaBD.php');
                        $con = conecta();

                        $usuario = array('id' =>'', 'nome' =>'', 'email' =>'');
                        $sql = "SELECT id, nome, email From usuario where id = ".$_GET['id'];
                        $datas = $con->query($sql);
                        $usuario = mysqli_fetch_array($datas);
                        fechaDB($con);
                    ?>
                    <input type="text" name="id" value="<?php echo $usuario['id']?>">
					<div class="row">
						<div class="input-field col s6">
				          <input name="nome" id="nome" type="text" class="validate" value ="<?php echo $usuario['nome'];?>">
				          <label for="nome">Nome</label>
				        </div>
				    </div>
					<div class="row">
						<div class="input-field col s6">
				          <input name="email" id="email" type="email" class="validate" value ="<?php echo $usuario['email'];?>">
				          <label for="email">email</label>
				        </div>
				    </div>
			        <br>
			        <div class="row">
				        <div class="input-field col s6">
				          <input name="password"  id="password" type="password" class="validate">
				          <label for="password">Password</label>
				        </div>
			    	</div>
			    	<div class="row">
				        <input class="btn waves-effect waves-light" type="submit" name="entrar" value="entrar">
			    	</div>

				</form>

			</div>
			
		</div>

	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>