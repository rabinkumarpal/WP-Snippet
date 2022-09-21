add_filter( 'yith_wapo_enqueue_front_scripts', 'yith_wapo_enqueue_front_scripts_custom', 999999 );

function yith_wapo_enqueue_front_scripts_custom( $value ) {
        if ( isset( $_GET['action'] ) && $_GET['action'] == 'piotnetgrid' ){
            $value = false;        
        }

    return $value;

}
