<?php

$lines = file( 'treasure-island.txt');
//var_dump( $lines );

$casabona = file_get_contents( 'https://casabona.org' );

if( strpos( $casabona, 'wp-content' ) ) {
    echo "<p>This mike_homes is  using WordPress!</p>";
}