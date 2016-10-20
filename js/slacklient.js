$ = jQuery;

$("#sendMessage").on('submit', function (e) {

    e.preventDefault();

    /* get the action attribute from the <form action=""> element */
    var $form = $( this ),
        url = $form.attr( 'action' );

    /* Send the data using post with element id name and name2*/
    var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );

    /* Alerts the results */
    posting.done(function( data ) {
        alert('success');
    });
});