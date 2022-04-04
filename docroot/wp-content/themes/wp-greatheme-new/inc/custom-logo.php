<?php 

add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {
    $html = str_replace( 'custom-logo', 'e-logo', $html );
    return $html;
}

?>