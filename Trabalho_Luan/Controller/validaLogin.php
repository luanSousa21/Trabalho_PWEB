<?php

    require_once('../conf/conectaBD.php');

    $con = conecta();

    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    $sql = "SELECT id FROM usuario where email = '$user' and senha = '$password'";

    $query = $con->query($sql) or die(mysqli_error($con)); 
    if($query == '')
    {
        echo "entrou aqui";
        header('Location: ../PAGES/index.php');
    }else
    {
        echo "Não aqui";
        if(!$query)
        {
            echo "Porque";
            header('Location: ../PAGES/index.php');
        }else{
            header('Location: ../PAGES/inicio.php');
        }
    }








?>