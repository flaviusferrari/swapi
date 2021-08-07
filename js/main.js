$(document).ready(function() {

    $('.viewDetailsHomeworld').click(function(e) {
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


});