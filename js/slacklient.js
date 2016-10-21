$ = jQuery;

$("#sendMessage").on('submit', function (e) {

    e.preventDefault();

    var messageContent = $('#messageContent').val();
    var userName = $('#userName').val();
    console.log(userName);

    jQuery.post(
        ajaxurl,
        {
            'action': 'post_slack',
            'messageContent': messageContent,
            'userName': userName
        },
        function(response){
            console.log(response);
        }
    );
});