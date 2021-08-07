<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars Characters</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <?php
        include("./class/swapi-class.php");

        $sw = new swapi();

        $sw->resource = 'people';

        $swCharacters = $sw->getDataApi();
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Personagem</th>
                <th>Genero</th>
                <th>Planeta Natal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($swCharacters->results as $character): ?>
                
                <tr>
                    <td><?= $character->name; ?></td>
                    <td><?= $character->gender; ?></td>
                    <td><?= $sw->getDataResource($character->homeworld, 'planets', 'name'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>