<?php 
    add_action( 'rest_api_init', function(){
        $namespace = 'esteemfiles/v1';
    
        $rout = '/upload';
        $rout_params = [
            'methods'  => 'POST',
            'callback' => 'uploadFile',
            'args'     => [
                'file_name' => [
                    'type'     => 'string', 
                ],
                'file' => [
                    'type'    => 'object',
                ],
            ],
        ];
    
        register_rest_route( $namespace, $rout, $rout_params );
    
    } );

    function uploadFile(WP_REST_Request $request) {

        $response = array(
            'user_name'  => $request->get_param('user_name'),
            'user_phone' => $request->get_param('user_phone')
        );

        return json_encode($response);
    }
?>