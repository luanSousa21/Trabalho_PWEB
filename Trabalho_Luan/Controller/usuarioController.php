<?php
	
	require_once('../conf/conectaBD.php');

	 $con = conecta();

	 $nome = $_POST['nome'];
	 $email = $_POST['email'];
	 $senha = $_POST['password'];

	 $sql = "INSERT INTO usuario values('$nome','$email', '$senha', id)";

	 $query = $con->query($sql);

	 if(!$query)
	 {
		 echo "Erro ao salvar as informações";
	 }

	 header('Location: ../PAGES/index.php');

	 fechaDB($con);
?>