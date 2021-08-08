<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Star Wars Characters</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/fontawesome-free/css/all.min.css" />
</head>
<body>
    <?php
        include("./class/swapi-class.php");
        $sw = new swapi();
        $sw->resource = 'people';
        $list = $sw->getDataApi();
    ?>
    <div class="container">
        <h1>Star Wars Characters</h1>
        <!-- FORMULÁRIO -->
        <form>
            <div class="form-row">
                <div class="col-3">
                    <label>Digite o Nome do personagem: </label> 
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" id="person" value="">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary mb-2">Localizar</button>
                </div>
            </div>
        </form>
        <!-- LISTAGEM -->
        <div id="listCharacters">
            <?php include('./includes/listCharacters.php'); ?>            
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>
</html>