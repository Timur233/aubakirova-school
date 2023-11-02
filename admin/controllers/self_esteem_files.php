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
                    'required' => true,  
                ],
                'file' => [
                    'type'    => 'object',
                    'required' => true,  
                ],
            ],
        ];
    
        register_rest_route( $namespace, $rout, $rout_params );
    
    } );

    function uploadFile() {
        
    }
?>