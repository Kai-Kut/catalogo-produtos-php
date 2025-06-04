<?php
include 'includes/produtos.php';
include 'includes/functions.php';
include 'includes/header.php';
$itens = count($produtos);
if(isset($_GET['prod'])){
    if($_GET['prod'] < $itens){
    $prod = $_GET['prod'];
    $produto = $produtos[$prod];
}else{
    echo "<h1>O produto procurado não existe!</h1>";
    exit;
}
}else{
    echo "<h1>Não foi possível encontrar o produto desejado!</h1>";
}
$parcela = $produto['preco']/10;
?>
<nav class="breadcrumb">
    <a href="index.php">Produtos</a>
    <p><?=$produto['nome'];?></p>
</nav>
<section>
    <div class="det-foto">
        <img src="assets/<?=$produto['foto'];?>" alt="">
    </div>
    <div class="det-desc">
        <h2><?=$produto['nome'];?></h2>
        <p class="lead"><?=$produto['desc'];?></p>
        <div class="preco">
            <h1><?=moeda($produto['preco']);?></h1>
            <p class="parcela">Ou 10 x <?=moeda($parcela);?></p>
        </div>
        <button>Comprar</button>
    </div>
</section>
<?php
include 'includes/footer.php';