<?php

namespace App;

use App\Controllers\Router\Router;

class Application
{

  public static function process()
  {
    $input = new Input();

    $router = new Router($input->server('REQUEST_URI'));
    $router->get('/', 'App\Controllers\PagesController@index');
    $router->get('/cv', 'App\Controllers\PagesController@cv');
    $router->get('/portfolio', 'App\Controllers\PagesController@portfolio');
    $router->run();
  }
}