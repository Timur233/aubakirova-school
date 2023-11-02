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
                    'type'    => 'anyOf',
                ],
            ],
        ];
    
        register_rest_route( $namespace, $rout, $rout_params );
    
    } );

    function uploadFile(WP_REST_Request $request) {

        $response = array(
            'user_name'  => $request->get_param('file'),
            'user_phone' => $request->get_param('file_name')
        );

        return json_encode($response);
    }
?>