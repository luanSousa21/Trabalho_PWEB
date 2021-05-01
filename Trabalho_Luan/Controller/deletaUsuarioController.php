<?php
    require_once('../conf/conectaBD.php');


    $con = conecta();

    $sql = "DELETE from usuario where id=".$_GET['id'];

    echo $sql;

    $query = $con->query($sql)  or die( mysqli_error( $con ) );

    if(!$query)
	 {
		 echo "Erro ao excluir as informações";
	 }
     header('Location: ../PAGES/lista_usuarios.php');

	 fechaDB($con);
    

?>