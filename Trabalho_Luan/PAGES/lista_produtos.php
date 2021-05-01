<?php
require_once('../comum/layout.php');
require_once('../conf/conectaBD.php');
?>
    <div class="barra1">
			<div class="texto1">
				Lista de usuários
			</div>
		</div>
		<div class="linha"></div>
		<div class="barra2">
			<input id="campoPesquisa" type="text" name="#" placeholder="Digite o que deseja pesquisar....">
			<div id="buttons">
				<button class="btn" style="background-color: green;">Novo</button>
				<button class="btn" style="background-color: orange;">Editar</button>
				<button class="btn" style="background-color: red;">Excluir</button>
			</div>
		</div>
        <div class="corpo">
            <?php
            $con = conecta();
            $sql = "SELECT id, nome_prod, quantidade, preco_unitario, img_produto From produto";

            $datas = $con->query($sql);
            while($row = mysqli_fetch_array($datas)) {?>
                <ul class='collection'>
                    <li class='collection-item avatar'>
                        <img style = "width: 50px; heigth: 50px;" src= <?php echo "../uploads/".$row['img_produto']?> alt="img" class="circle">
                        <strong><span class="title"><?php echo $row['nome_prod'];?></span></strong><br>
                        <span class="title"><?php echo "Quantidade: ".$row['quantidade'];?></span><br>
                        <span class="title"><?php echo "Preço: ".$row['preco_unitario'];?></span><br>
                        <a href=  "atualiza_produto.php?id=<?php echo $row['id'];?>">Atualizar</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href=  "../Controller/deletaProdutoController.php?id=<?php echo $row['id'];?>&img_produto=<?php echo $row['img_produto']?>">Excluir</a>
                    </li>
                </ul>
                

       <?php }
                fechaDB($con);
            
            ?>
        </div>



</body>
</html>
