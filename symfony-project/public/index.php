<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};



// index.php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$url = $request->getPathInfo();
$response = new Response();

switch($url) {
    case '/':
        $response->setContent('Accueil');
        break;
    default:
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
}

$response->send();
