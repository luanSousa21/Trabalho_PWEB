<?php
    require_once('../conf/conectaBD.php');


    $con = conecta();


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "Update usuario set nome = '$nome', email = '$email', senha = '$senha'  where id=".$_POST['id'];

    $query = $con->query($sql)  or die( mysqli_error( $con ) );

    if(!$query)
	 {
		 echo "Erro ao excluir as informações";
	 }

     header('Location: ../PAGES/lista_usuarios.php');

	 fechaDB($con);
    

?>