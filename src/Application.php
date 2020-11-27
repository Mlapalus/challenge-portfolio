<?php

namespace App;

use App\Controllers\Router\Router;

class Application
{

  public static function process()
  {
    if (isset($_SERVER['REQUEST_URI'])) {

      $router = new Router($_SERVER['REQUEST_URI']);
      $router->get('/', 'App\Controllers\PagesController@index');
      $router->get('/cv', 'App\Controllers\PagesController@cv');
      $router->get('/portfolio', 'App\Controllers\PagesController@portfolio');
      $router->run();
    }
  }
}