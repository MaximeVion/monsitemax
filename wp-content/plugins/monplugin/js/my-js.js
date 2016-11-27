


// A l'envoie du formulaire
jQuery(function ($){


    // Recuperer la value du champ
    value = $("#myinput").val();


    $("#monbouton").on('click', (function(event) {
        // Desactiver evenement de base
        event.preventDefault();

        // Envoie de la requete
        $.ajax({
            url: 'http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=' + value,
            type: 'GET',
            dataType: 'json',
            data: {}
        })
        .done(function(json) {

            $("#mon_gif").attr('src', json.data.image_original_url);
            console.log(json);
            console.log("success left div");

        })
        .fail(function() {

            //La requete n'a pas fonctionnée
            $("#error_msg1").html('Une erreur s\'est produite');
            $("#error_msg").html('Une erreur s\'est produite');

        })
       .always(function() { 

            // Peut importe, se lance tout le temps
            $("#msg_complete").html('Merci d\'avoir cherché un Gif');
            //console.log("Merci d'avoir cherché un Gif");
        }); 

        // Envoie de la requete
        $.ajax({
            url: 'http://api.giphy.com/v1/gifs/translate?s=' + value + '&api_key=dc6zaTOxFJmzC',
            type: 'GET',
            dataType: 'json',
            data: {}
        })

        .done(function(json) {

            // La requete a fonctionnée
            if ((value === "")===true){

                $("#error_msg1").html('Pas de gif');

            }

            else if((json.data.images === undefined)===true){

                $("#error_msg1").html('Pas de gif');
            }

            else{

                $("#mon_gif1").attr('src', json.data.images.downsized_large.url );
                console.log("success right div");
            }
        })

        .fail(function() {

            // La requete n'a pas fonctionnée
            $("#error_msg1").html('Une erreur s\'est produite');
            $("#error_msg").html('Une erreur s\'est produite');
        })

       .always(function() { 

            // Peut importe, se lance tout le temps
            $("#msg_complete").html('Merci d\'avoir cherché un Gif');
            //console.log("Merci d'avoir cherché un Gif");
        });
    }));
});




