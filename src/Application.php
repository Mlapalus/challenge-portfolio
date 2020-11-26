<?php

namespace App;

use App\Controllers\Router\Router;

class Application
{

  public static function process()
  {

    $router = new Router($_SERVER['REQUEST_URI']);
    $router->get('/', 'App\Controllers\PagesController@index');
    $router->get('/experience', 'App\Controllers\PagesController@experience');
    $router->get('/formation', 'App\Controllers\PagesController@formation');

    $router->run();
  }
}