<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * @class Variable_FooEvents_Event_Directions
 */

class Variable_FooEvents_Event_Directions extends AutomateWoo\Variable {

/**
 * AutomateWoo variable name
 *
 * @var string $name The event venue.
 */
protected $name = 'fooevents.event_directions';

/**
 * Load admin details
 */
public function load_admin_details() {

    $this->description = __( 'Displays the event directions.', 'woocommerce-events' );

    parent::load_admin_details();

}


/**
 * Get and return variable value
 *
 * @param array $ticket FooEvents ticket array.
 * @param array $parameters AutomateWoo parameters.
 * @param array $workflow AutomateWoo Workflow.
 * @return string
 */
public function get_value( $ticket, $parameters, $workflow ) {
    return $ticket['WooCommerceEventsDirections'];
}

}

return new Variable_FooEvents_Event_Directions();