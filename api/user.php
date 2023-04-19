<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
$requestMethod = $_SERVER['REQUEST_METHOD'];
$json = json_decode(file_get_contents('php://input'));
$action = $_REQUEST['action'] ?? $json->action ?? null;
$res =  null;

if( $requestMethod === 'GET'){
  $res = [
    'success'=> true,
    'data'=> [
      'name'=> 'Jane Doe',
      'email'=> 'jane_doe@gmail.com'
    ]
  ];
}


if( $requestMethod === 'POST'){
  $res = [
    'success'=> true
  ];
}

exit(json_encode($res));
