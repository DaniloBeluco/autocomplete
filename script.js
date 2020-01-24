$(function () {
    $('#busca').on('keyup', function () {   //ao soltar o mouse
        var texto = $(this).val();  //pega o texto digitado

        /*
         * Faz req. ajax ao arquivo busca.php
         */
        $.ajax({
            url: 'busca.php',
            type: 'POST',
            data: {texto: texto},
            success: function (html) {
                $('#resultado').html(html); //resposta vai pra div resultado 
            }
        });
    });
});


