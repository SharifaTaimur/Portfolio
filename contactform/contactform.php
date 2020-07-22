<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */


/*require_once './vendor/autoload.php';*/
require_once __DIR__ . '/composer/autoload_real.php';

use FormGuide\Handlx\FormHandler;

$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('comments')->maxLength(6000);




$pp->sendEmailTo('sharifa_taimur2@hotmail.com'); // ← Your email here

echo $pp->process($_POST);