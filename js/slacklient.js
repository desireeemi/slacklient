$ = jQuery;

$("#sendMessage").on('submit', function (e) {

    e.preventDefault();

    jQuery.post(
        ajaxurl,
        {
            'action': 'post_slack',
            'messageContent': 'coucou',
            'userName': 'toto'
        },
        function(response){
            console.log(response);
        }
    );
});