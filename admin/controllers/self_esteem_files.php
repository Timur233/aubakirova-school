<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

    add_action( 'rest_api_init', function(){
        $namespace = 'esteemfiles/v1';
    
        $rout_upload = '/upload';
        $rout_upload_params = [
            'methods'  => 'POST',
            'callback' => 'uploadFile',
            'args'     => [
                'file_name' => [
                    'type'     => 'string', 
                ]
            ],
        ];
    
        register_rest_route( $namespace, $rout_upload, $rout_upload_params );
    
        $rout_remove = '/remove';
        $rout_remove_params = [
            'methods'  => 'POST',
            'callback' => 'removeFile',
            'args'     => [
                'file_name' => [
                    'type'     => 'string', 
                ]
            ],
        ];
    
        register_rest_route( $namespace, $rout_remove, $rout_remove_params );
    
    } );


    function uploadFile(WP_REST_Request $request) {
        $upload_directory = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/self-esteem';
        $file = $_FILES['file'];
        $file_info = pathinfo($file['name']);
        $file_extension = $file_info['extension'];
        $file_name = $request->get_param('file_name') . '__' . 
            (microtime(true) * 10000) . '.' . $file_extension;
        $file_path = $upload_directory . '/' . $file_name;

        $response = array(
            'message'  => '',
            'file_name' => $file['name']
        );

        if (!file_exists($upload_directory)) mkdir($upload_directory, 0777, true);

        if (move_uploaded_file($file['tmp_name'], $file_path)) {
            $response['message'] = 'Файл успешно загружен';
        } else {
            $response['message'] = 'Не удалось загрузить файл';
        }

        return $response;
    }

    function removeFile(WP_REST_Request $request) {
        $upload_directory = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/self-esteem';
        $file_name = $request->get_param('file_name');
        $file_path = $upload_directory . '/' . $file_name;
        $response = [
            'status' => 500,
            'message' => 'Файл не существует'
        ];

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                $response['status'] = 200;
                $response['message'] = 'Файл успешно удален';
            } else {
                $response['message'] = error_get_last()['message'] . '______' . $file_name;
            }
        }

        return $response;
    }
?>