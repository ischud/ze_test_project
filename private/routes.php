<?php

  /*
  // Examples
    $app->get('/hallo/{name}', Api\Controller\ExampleController::class);
    $app->get('/hallo/{name}', Api\Controller\ExampleController::class.'::ExampleAction');
    $app->get('/hello[/{name}]',function($request,$response,$next){
      $response->getBody()->write('Hello, ' . $request->getAttribute('name'));
      return $response;
    });
   */

  //$app->get('/', Api\Controller\HelpController::class);
  $app->get('/entity/{entity}[/{id}]', Api\Controller\EntityController::class);
  $app->get('/synsets[/{id}]', Api\Controller\SynsetsController::class);
  $app->get('/wordclass[/{id}]', Api\Controller\WordClassController::class);