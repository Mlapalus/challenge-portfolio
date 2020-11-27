<?php

namespace App;

class Renderer
{
  public static function render(string $path, array $params)
  {

    ob_start();
    extract($params);

    require 'templates/' . $path . '.html.php';
    $pageContent = ob_get_clean();

    require 'templates/layout.html.php';
  }
}