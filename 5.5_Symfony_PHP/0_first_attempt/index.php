<?php
//problem with the use statement
require __DIR__ . "/vendor/autoload.php";
use vendor\symfony\http-foundation\Session\Session.php;
// require __DIR__.'/vendor/composer/autoload_real.php';

$duper= "dump";
dump($duper);

$session = new Session();
$session->start();

// set and get session attributes
$session->set('name', 'Session');
$session->get('name');

// set flash messages
$session->getFlashBag()->add('notice', 'Profile updated');

// retrieve messages
foreach ($session->getFlashBag()->get('notice', []) as $message) {
    dump($message);
}
?>