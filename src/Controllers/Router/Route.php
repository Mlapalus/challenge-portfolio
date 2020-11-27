<?php

namespace App\Controllers\Router;


/**
 * A path route
 */
class Route
{
  private $path;
  private $action;
  private $matches;

  /**
   * @param $path, $action
   */
  public function __construct(string $path, string $action)
  {
    $this->path = trim($path, '/');
    $this->action = $action;
  }

  /**
   * @param $url
   * return bool 
   */
  public function matches(string $url): bool
  {

    $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
    $pathToMatch = "#^$path$#";
    if (preg_match($pathToMatch, $url, $matches)) {
      $this->matches = $matches;
    }
    return (preg_match($pathToMatch, $url, $matches));
  }

  /**
   * return callable
   */
  public function execute(): ?callable
  {
    $params = explode('@', $this->action);
    $controller = new $params[0]();
    $method = $params[1];

    return isset($this->matches[1]) ?
      $controller->$method($this->matches[1]) :
      $controller->$method();
  }
}