<?php
    require_once('../conf/conectaBD.php');


    $con = conecta();

    $sql = "DELETE from produto where id=".$_GET['id'];

    $query = $con->query($sql)  or die( mysqli_error( $con ) );

    if(!$query)
	 {
		 echo "Erro ao excluir as informações";
	 }else
     {
        unlink("../uploads/".$_GET['img_produto']);
     }

     header('Location: ../PAGES/lista_produtos.php');

	 fechaDB($con);
    

?>