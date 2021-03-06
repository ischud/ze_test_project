<?php


// Delegate static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server'
    && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))
) {
    return false;
}

chdir(dirname(__DIR__));
require __DIR__.'/../vendor/autoload.php';

/** @var \Interop\Container\ContainerInterface $container */
$container = require __DIR__.'/../config/container.php';




/** @var \Zend\Expressive\Application $app */
$app = $container->get(\Zend\Expressive\Application::class);

$app->get('/album[/{action}[/{id}]]',App\Action\AlbumPage::class.'::addAction');

$app->get('/hello[/{name}]',function($request,$response,$next){
  $response->getBody()->write('Hello, ' . $request->getAttribute('name'));
  return $response;
});

$app->run();
