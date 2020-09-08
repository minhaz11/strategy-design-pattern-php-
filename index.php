<?php 

spl_autoload_register(function($class){
    include 'php/'.$class.'.php';
});

$user = new User();
$msg = $user->getMsg();

switch ($msg) {
    case 'sms':
        $obj = new Sms();
        break;
    case 'email':
        $obj = new Mail();
        break;
    
    default:
      echo "No process";
        break;
}
    $obj->notification();
?>