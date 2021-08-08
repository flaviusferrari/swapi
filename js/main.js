$(document).ready(function() {

    $('#listCharacters').on('click', '.viewDetailsHomeworld', function(e) {
        e.preventDefault();

        $.ajax({
            url: "http://localhost/swapi/planet.php",
            type: 'post',
            data: {
                url: $(this).attr('data-url')
            },
            success: function( data ) {                    
                $('.modal-body').html(data);                
                $('.modal').modal('show');
            }
        });

    });

    /**
     * Busca dos personagens
     * 
     *  - Efetua a busca do personagem de acordo com o nome digitado no formulário.
     *  - Retorna um arquivo HTML que irá substituir a lista atual.
     */
    $('form').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "http://localhost/swapi/searchCharacter.php",
            type: 'post',
            data: {
                person: $('#person').val()
            },
            success: function( data ) {                    
                $('#listCharacters').html(data);
            }
        });
    });

    /**
     * 
     */
     $('#listCharacters').on('click', '.page-link', function(e) {
        e.preventDefault();

        $.ajax({
            url: "http://localhost/swapi/searchCharacter.php",
            type: 'post',
            data: {
                page: $(this).attr('href')
            },
            success: function( data ) {                    
                $('#listCharacters').html(data);
            }
        });

    });


});