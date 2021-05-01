<?php

    require_once('../conf/conectaBD.php');


    $con = conecta();

    $nome = $_POST['nome_prod'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco_uni'];
    $nome_img = $_FILES['foto']['name'];
    if($nome_img =='')
    {
        $sql = "UPDATE produto set nome_prod = '$nome', quantidade = '$quantidade', preco_unitario = '$preco' where id = ".$_POST['id'];

        $query = $con->query($sql);

        if(!$query)
        {
            echo "Erro ao salvar as informações";
        }else
            header('Location: ../PAGES/lista_produtos.php');

        fechaDB($con);
    }else
    {

        $sql = 'SELECT img_produto FROM produto where id = '.$_POST['id'];

        $datas = $con->query($sql);

        $imagem  = mysqli_fetch_array($datas);

        unlink("../uploads/".$imagem['img_produto']);

        $sql = "UPDATE produto set nome_prod = '$nome', quantidade = '$quantidade', preco_unitario = '$preco', img_produto = '$nome_img' where id = ".$_POST['id'];

        $query = $con->query($sql);

        if(!$query)
        {
            echo "Erro ao salvar as informações";
        }else
        {
            move_uploaded_file(
                $_FILES['foto']['tmp_name'], 
                '../uploads/'.$nome_img
            );
            header('Location: ../PAGES/lista_produtos.php');
        }
        fechaDB($con);
    }

?>