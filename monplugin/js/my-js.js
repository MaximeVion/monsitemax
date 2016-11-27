

 value = jQuery("#myinput").val();
// A l'envoie du formulaire
jQuery(function ($){

    $("#monbouton").on('click', (function(event) {
        // Desactiver evenement de base
        event.preventDefault();

        // Recuperer la value du champ
        value = jQuery("#myinput").val();

        // Envoie de la requete
        $.ajax({
            url: 'http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=' + value,
            type: 'GET',
            dataType: 'json',
            data: {}
        })
        .done(function(json) {

            $("#mon_gif").attr('src', json.data.image_original_url);
            $("#error_msg").empty();

            //console.log("success left div");

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


        // Recuperer la value du champ
        value = jQuery("#myinput").val();

        // Envoie de la requete
        $.ajax({
            url: 'http://api.giphy.com/v1/gifs/translate?s=' + value + '&api_key=dc6zaTOxFJmzC',
            type: 'GET',
            dataType: 'json',
            data: {}
        })

        .done(function(json) {

            // La requete a fonctionnée
            if ((value === "")==true){

                $("#error_msg1").html('Pas de gif');
                $("#mon_gif1").attr('src', "");
            }

            else if((json.data.images === undefined)===true){

                $("#error_msg1").html('Pas de gif');
            }

            else{

                $("#mon_gif1").attr('src', json.data.images.downsized_large.url );
                $("#error_msg1").empty();
                //console.log("success right div");
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




