<?php

add_action( 'rest_api_init', function(){
    $namespace = 'callback/v1';

	$rout = '/form';

	$rout_params = [
		'methods'  => 'POST',
		'callback' => 'send_form',
		'args'     => [
			'user_name' => [
				'type'     => 'string', 
			],
			'user_phone' => [
				'type'    => 'string',
				'required' => true,  
			],
		],
	];

	register_rest_route( $namespace, $rout, $rout_params );

} );

function send_form( WP_REST_Request $request ){

    $response = array(
		'user_name'  => $request->get_param('user_name'),
		'user_phone' => $request->get_param('user_phone')
	);

    $date = date("d M Y H:i:s");
    $mess = <<< MESSAGE
        Дата: {$date}.
        Имя: {$response['user_name']}
        Телефон: {$response['user_phone']}\n
        ----------------------------------
        ----------------------------------
    MESSAGE;

    $token   = '575889929:AAHx0Um6lHbpu52dgnP0Mpwf-4qGnno_HKQ';
    $chat_id = -597712172;

    $query = [
        'chat_id'    => $chat_id,
        'parse_mode' => 'HTML',
        'text'       => $mess
    ];

    file_get_contents(
        sprintf(
            'https://api.telegram.org/bot%s/sendMessage?%s',
            $token,
            http_build_query($query)
        )
    );

	return 200;
}