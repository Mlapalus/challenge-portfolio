<?php

namespace App\Controllers\Router;

use App\Controllers\Router\Route;

class Router
{
  public $url;
  public $routes = [];

  /**
   * @param $url
   */
  public function __construct(string $url)
  {
    $this->url = trim($url, '/');
  }

  /**
   * @param $path, $action
   */
  public function get(string $path, string $action)
  {
    $this->routes['GET'][] = new Route($path, $action);
  }

  /**
   * @param $path, $action
   */
  public function post(string $path, string $action)
  {
    $this->routes['POST'][] = new Route($path, $action);
  }

  /**
   * launch the execute command for the matche's route
   */
  public function run()
  {
    if (isset($_SERVER['REQUEST_METHOD'])) {
      foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
        if ($route->matches($this->url)) {
          return $route->execute();
        }
      }
    }
    return header('HTTP/1.0 404 not found');
  }
}