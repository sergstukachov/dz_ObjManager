<?php

require __DIR__.'/../vendor/autoload.php';



$factory = new \Factory\Factory();

$objectManager = new \ObjectManager\ObjectManager($factory);

/** @var \Test\TestDTO $dto */
$dto = $objectManager->create(\Test\TestDTO::class);

$dto->set(1, 'test');

printf("%s\n\n", $dto->get(1));