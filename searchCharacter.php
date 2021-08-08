<?php

include("./class/swapi-class.php");

$sw = new swapi();
$sw->resource = 'people';

$person = $_POST['person'];

$list = $sw->searchResource($person);

include('./includes/listCharacters.php');
?>
