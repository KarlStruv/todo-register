<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('app/Views/partials/header.template.php');
$twig = new Environment($loader, [
    'cache' => '/path/to/compilation_cache',
]);