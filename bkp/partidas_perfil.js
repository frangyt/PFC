/**
 * Created by aluno on 18/10/16.
 */




$( function() {
    var handle = $( "#custom-handle" );
    $( "#slider" ).slider({
        create: function() {
            handle.text( $( this ).slider( "value" ) );
        },
        slide: function( event, ui ) {
            handle.text( ui.value );
        }
    });
} );
