<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Personagem</th>
            <th>Genero</th>
            <th>Planeta Natal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list->results as $character): ?>                    
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
<?php
include("./class/pagination-class.php");
$pg = new pagination($list);
echo $pg->viewPagination(); 
?>
