<?php
include 'includes/produtos.php';
include 'includes/functions.php';
include 'includes/header.php';
    $c = isset($_GET['c']) ? $_GET['c'] : ''; // Pega a categoria da URL
foreach($produtos as $id => $produto){ //$id cria um ID para cada produto
    if($c == '' || $produto['cat'] == $c){ // mostra tudo ou uma categoria especifica 
    ?>
    <a href="detalhe.php?prod=<?=$id;?>"> <!-- Link com o ID do prod. -->
    <div class="card">
            <h2><?=$produto['nome'];?></h2>
            <div class="foto">
                <img src="assets/<?=$produto['foto'];?>" alt="">
            </div>
            <p><?=$produto['desc'];?></p>
            <p class="preco"><?=moeda($produto['preco']);?></p>
        </div>
    </a> <!-- Fechamento da tag do link -->
        <?php
}
}
?>
<?php
include 'includes/footer.php';
?>
    </main>
</body>
</html>