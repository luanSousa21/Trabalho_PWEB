<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/index.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s3"></div>
			<div class="col s6">
				<h1>LOGIN</h1><br><br>
				<form action="../Controller/validaLogin.php" method="POST">
					<div class="row">
						<div class="input-field col s6">
				          <input name="usuario" id="email" type="email" class="validate">
				          <label for="email">email</label>
				        </div>
				    </div>
			        <br>
			        <div class="row">
				        <div class="input-field col s6">
				          <input name="senha" id="password" type="password" class="validate">
				          <label for="password">Password</label>
				        </div>
			    	</div>
			    	<div class="row">
				        <input class="btn waves-effect waves-light" type="submit" name="entrar" value="entrar">
			    	</div>
					<p>Não possui um login?<a href="cad_usuario.php">Cadastre-se</a>

				</form>

			</div>
			<div class="col s3"></div>
		</div>

	</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>