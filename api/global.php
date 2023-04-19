<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
$requestMethod = $_SERVER['REQUEST_METHOD'];
$json = json_decode(file_get_contents('php://input'));
$action = $_REQUEST['action'] ?? $json->action ?? null;
$res =  null;

switch ($action) {
  case 'hello':
    $res = [
      'success'=> true,
      'data'=> [
        'res'=> 'world'
      ]
    ];
  break;
}