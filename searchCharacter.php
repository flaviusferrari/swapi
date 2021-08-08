<?php

include("./class/swapi-class.php");

$sw = new swapi();
$sw->resource = 'people';

$person = $_POST['person'];

$rt = $sw->searchResource($person);
?>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Personagem</th>
            <th>Genero</th>
            <th>Planeta Natal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rt->results as $character): ?>                    
            <tr>
                <td><?= $character->name; ?></td>
                <td><?= $character->gender; ?></td>
                <td>
                    <?= $sw->getDataResource($character->homeworld, 'planets', 'name'); ?>
                    <a href="#" class="viewDetailsHomeworld" data-url="<?= $character->homeworld; ?>" title="Maiores Informações">
                        <i class="fas fa-search"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>