<?php

  use JetBrains\PhpStorm\NoReturn;

  #[NoReturn] function dd($value): void
  {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
  }

  function urlIs($route): bool
  {
    return $_SERVER['REQUEST_URI'] === $route;
  }