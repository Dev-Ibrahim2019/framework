<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind('Core\Database', function () {
  $config = require base_path('config.php');
  return new Database($config['database'], 'root', 12009121220191406);
});

App::setContainer($container);