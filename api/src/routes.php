<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/login/user={user}&password={password}', function ($request, $response, $args) {
    $res = [];
    $db = new Login();
    $conn = $db->getLoginErrors($args['user'], $args['password']);

    return $response->write($conn);
});
/*
$app->post('/signup/user', function ($request, $response) {
	$res = [];
    $db = new Login();
    $data = $request->getParsedBody();
    $user_data = [];
    $user_data['email'] = filter_var($data['email'], FILTER_SANITIZE_STRING);
    $user_data['password'] = filter_var($data['password'], FILTER_SANITIZE_STRING);
    $user_data['password2'] = filter_var($data['password2'], FILTER_SANITIZE_STRING);

    $user_data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
    $user_data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
    $user_data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
    $user_data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);

    if (($user_data['password'] == $user_data['password2']) && !empty($user_data['password'])) {
    	if (!empty($user_data['email']) && filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)) {
    		
    	} else {
    		res = array("status" => 0, "msg" => "Email incorrecto");
    	}
    } else {
    	res = array("status" => 0, "msg" => "Los passwords no coinciden");
    }
    return $response->write(json_encode($conn));
});
*/