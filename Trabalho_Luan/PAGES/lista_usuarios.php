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
            $sql = "SELECT id, nome, email From usuario";

            $datas = $con->query($sql);
            while($row = mysqli_fetch_array($datas)) { ?>
                <ul class='collection'>
                    <li class='collection-item avatar'>
                        <strong><span class="title"><?php echo $row['nome'];?></span></strong><br>
                        <span class="title"><?php echo $row['email'];?></span><br>
                        <a href=  "atualiza_usuario.php?id=<?php echo $row['id'];?>">Atualizar</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href=  "../Controller/deletaUsuarioController.php?id=<?php echo $row['id'];?>">Deletar</a>
                    </li>
                </ul>
    <?php  } 
                fechaDB($con);
            
            ?>
            </table>
        </div>

</body>
</html>
