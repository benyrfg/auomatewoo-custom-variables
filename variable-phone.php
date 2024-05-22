<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * @class Variable_FooEvents_Event_Phone
 */

class Variable_FooEvents_Event_Phone extends AutomateWoo\Variable {

/**
 * AutomateWoo variable name
 *
 * @var string $name The event venue.
 */
protected $name = 'fooevents.event_phone';

/**
 * Load admin details
 */
public function load_admin_details() {

    $this->description = __( 'Displays the event support phone number.', 'woocommerce-events' );

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
    return $ticket['WooCommerceEventsSupportContact'];
}

}

return new Variable_FooEvents_Event_Phone();