<?php
include("./class/swapi-class.php");

$sw = new swapi();

$url = $_POST['url'];

// Verifica se foi enviada alguma URL de consulta
if(empty($url)) {
    echo 'Não foi enviada nenhuma URL!';
    exit();
}

$planet = $sw->getDataResource($url, 'planets');
?>

Nome do Planeta: <?= $planet->name; ?><br>
Período de Rotação: <?= $planet->rotation_period; ?><br>
Gravidade: <?= $planet->gravity; ?><br>
População: <?= $planet->population; ?>
