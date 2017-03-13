<?php
  date_default_timezone_set('Europe/Berlin');

  // Delegate static file requests back to the PHP built-in webserver
  if (php_sapi_name() === 'cli-server'
      && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))
  ) {
      return false;
  }

  $db = array(
    'host' => 'localhost',
    'name' => 'dev_cm_45_ki',
    'user' => 'dev_cm_45_ki',
    'pass' => 'Start001',
  );

  chdir(dirname(__DIR__));
  require __DIR__.'/../vendor/autoload.php';

  /** @var \Interop\Container\ContainerInterface $container */
  $container = require __DIR__.'/../config/container.php';

  /** @var \Zend\Expressive\Application $app */
  $app = $container->get(\Zend\Expressive\Application::class);

  /** Import Routes / Endpoints */
  require __DIR__.'/../private/routes.php';