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
                ]
            ],
        ];
    
        register_rest_route( $namespace, $rout, $rout_params );
    
    } );

    function uploadFile(WP_REST_Request $request) {
        $file = $_FILES['file'];
        $upload_directory = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/self-esteem';
        $file_path = $upload_directory . '/' . $file['name'];

        $response = array(
            'message'  => '',
            'file_name' => $file['name']
        );

        if (!file_exists($upload_directory)) {
            mkdir($upload_directory, 0755, true);
        }

        if (move_uploaded_file($file['tmp_name'], $file_path)) {
            $response['message'] = 'Файл успешно загружен';
        } else {
            $response['message'] = 'Не удалось загрузить файл';
        }

        return $response;
    }
?>