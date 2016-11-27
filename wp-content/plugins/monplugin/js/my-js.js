


// A l'envoie du formulaire
jQuery(function ($){

    $("#monbouton").on('click', (function(event) {
        // Desactiver evenement de base
        event.preventDefault();

        // Recuperer la value du champ
        value = $("#myinput").val();


        // Envoie de la requete
        $.ajax({
            //url: 'http://api.giphy.com/v1/gifs/translate?s=' + value + '&api_key=dc6zaTOxFJmzC',
            url: 'http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=' + value,
            type: 'GET',
            dataType: 'json',
            data: {}
        })
        .done(function(json) {

            // La requete a fonctionnée
            $("#mon_gif").attr('src', json.data.image_original_url);
            console.log("success 1 div");
        })
        .fail(function() {

            console.log("failure");

        })
        .always(function() { 

            // Peut importe, se lance tout le temps
            console.log("complete");
        });

        // Recuperer la value du champ
        value = $("#myinput").val();

        // Envoie de la requete
        $.ajax({
            url: 'http://api.giphy.com/v1/gifs/translate?s=' + value + '&api_key=dc6zaTOxFJmzC',
            //url: 'http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=' + value,
            type: 'GET',
            dataType: 'json',
            data: {}
        })

        .done(function(json) {

            // La requete a fonctionnée
            $("#mon_gif1").attr('src', json.data.images.downsized_large.url );

            console.log(json);
            console.log("success 2 div");
        })
        .fail(function() {

            // La requete n'a pas fonctionnée
            console.log("failure1");
        })
        .always(function() {

            // Peut importe, se lance tout le temps
            console.log("complete");
        });
}));
});





