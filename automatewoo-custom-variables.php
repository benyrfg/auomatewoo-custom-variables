<?php
/*
Plugin Name: Automatewoo Custom Variables
Description: Custom variables for the Automatewoo e-mails.
Author: Petr Benes
*/


/**
 * @param $variables array
 * @return array
 */

function my_automatewoo_variables( $variables ) {
	$variables['fooevents']['event_directions'] = dirname(__FILE__) . '/variable-directions.php';
	$variables['fooevents']['event_phone'] = dirname(__FILE__) . '/variable-phone.php';

    return $variables;
}

add_filter( 'automatewoo/variables', 'my_automatewoo_variables' );
