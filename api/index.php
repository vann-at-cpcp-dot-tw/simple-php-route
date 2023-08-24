<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
$requestMethod = $_SERVER['REQUEST_METHOD'];
$json = json_decode(file_get_contents('php://input'));
$action = $_REQUEST['action'] ?? $json->action ?? null;
$res =  null;

switch (strtok($_SERVER["REQUEST_URI"], '?')) {
  case '' :
  case '/' :
    require __DIR__ . '/global.php';
  break;

  case '/user' :
      require __DIR__ . '/user.php';
  break;
}


exit(json_encode($res));
