<?php

    require_once('../conf/conectaBD.php');


    $con = conecta();

    $nome = $_POST['nome_prod'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco_uni'];



    $nome_img = $_FILES['foto']['name'];

    $sql = "INSERT INTO produto VALUES(id, '$nome','$quantidade','$preco','$nome_img')";

    $query = $con->query($sql);

    if(!$query)
	{
		 echo "Erro ao salvar as informações";
	}else{
        move_uploaded_file(
            $_FILES['foto']['tmp_name'], 
            '../uploads/'.$nome_img
        );

	    header('Location: ../PAGES/inicio.php');
    }

	fechaDB($con);

?>