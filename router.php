<?php

  $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

  $routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/our-mission' => 'controllers/our-mission.php'
  ];

  function abort($code = 404): void {
    require "views/$code.php";
  }

  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
