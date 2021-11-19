<?php
function show_receita($bd, $receita){
    $sql = "SELECT i.nome, i.quantidade, i.medida, r.preparo
    FROM receitas as r
    INNER JOIN receita_ingrediente as ri ON r.id = ri.id_receita
    INNER JOIN ingredientes as i ON i.id = ri.id_ingrediente
    WHERE r.nome='$receita'"; // SQL with parameters
    $query = $bd->query($sql);
    while($result = $query->fetch_object()):?>
    <ul> <?php
        echo "$result->quantidade $result->medida de $result->nome ";
        $preparo = $result->preparo;
        ?> </ul>
    <?php
    endwhile;?>
    <h2>Modo de preparo: </h2>
    <?php
        echo "$preparo";
}


require('conexaoMySql.php');
$receita = $_GET['receita'];
show_receita($bd, $receita);

?>
