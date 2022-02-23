<?php declare(strict_types=1);
require_once 'Singlton.php';
$object = Singlton::getObject();
echo "\n";
$object = Singlton::getObject();
echo "\n";
$object = Singlton::getObject();
echo "\n";


echo $object->getInc()."\n";
echo $object->getInc()."\n";
echo $object->getInc()."\n";
echo $object->getInc()."\n";
echo $object->getInc()."\n";