<?php

namespace App;

class Input
{
  private $_get;
  private $_server;


  public function __construct()
  {
    $this->_get = $_GET;
    $this->_server = $_SERVER;
  }

  public function get(string $key = null, $default = null)
  {
    return $this->checkGlobal($this->_get, $key, $default);
  }

  public function server(string $key = null, $default = null)
  {
    return $this->checkGlobal($this->_server, $key, $default);
  }

  public function checkGlobal($global, $key = null, $default = null)
  {
    if ($key) {
      return $global[$key] ?: $default ?: null;
    }
    return $global;
  }
}