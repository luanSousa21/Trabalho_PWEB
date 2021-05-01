<?php


function conecta()
{
	$conn = mysqli_connect('localhost', 'root', '', 'banco_produtos');
    if (!$conn) {
        die("connection failed ". mysqli_connect_error);
    }

    return $conn;
}



function fechaDB($conn) {
    mysqli_close($conn);
}


?>