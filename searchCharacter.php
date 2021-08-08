<?php

include("./class/swapi-class.php");

$sw = new swapi();

// Verifica qual o 
if (isset($_POST['person'])) {
    $sw->resource = 'people';
    $person = $_POST['person'];
    $list = $sw->searchResource($person);
} else {
    $sw->resource = 'people';
    // $person = $_POST['person'];
    $list = $sw->getDataResource($_POST['page'], 'people');
}

include('./includes/listCharacters.php');
?>
